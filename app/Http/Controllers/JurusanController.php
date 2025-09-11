<?php

// app/Http/Controllers/JurusanController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jurusan;
use Illuminate\Support\Facades\Storage;

class JurusanController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->query('search');

        $jurusan = Jurusan::when($search, function ($query, $search) {
            return $query->where('nama', 'like', "%{$search}%")
                         ->orWhere('deskripsi', 'like', "%{$search}%");
        })->paginate(10);

        return view('pages.dashboard.jurusan.index', compact('jurusan', 'search'));
    }

    public function manage($id = null)
    {
        $data = $id ? Jurusan::findOrFail($id) : new Jurusan();
        return view('pages.dashboard.jurusan.manage', compact('data'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'nama' => 'required|string|max:255',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'deskripsi' => 'nullable|string',
        ]);

        if ($request->hasFile('gambar')) {
            $data['gambar'] = $request->file('gambar')->store('jurusan', 'public');
        }

        Jurusan::create($data);

        return redirect()->route('dashboards.jurusan')->with('success', 'Jurusan berhasil ditambahkan.');
    }

    public function update(Request $request, $id)
    {
        $jurusan = Jurusan::findOrFail($id);

        $data = $request->validate([
            'nama' => 'required|string|max:255',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'deskripsi' => 'nullable|string',
        ]);

        if ($request->hasFile('gambar')) {
            if ($jurusan->gambar) {
                Storage::disk('public')->delete($jurusan->gambar);
            }
            $data['gambar'] = $request->file('gambar')->store('jurusan', 'public');
        }

        $jurusan->update($data);

        return redirect()->route('dashboards.jurusan')->with('success', 'Jurusan berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $jurusan = Jurusan::findOrFail($id);

        if ($jurusan->gambar) {
            Storage::disk('public')->delete($jurusan->gambar);
        }

        $jurusan->delete();

        return redirect()->route('dashboards.jurusan')->with('success', 'Jurusan berhasil dihapus.');
    }
}
