<?php

namespace App\Http\Controllers;

use App\Models\fasilitas;
use Illuminate\Container\Attributes\Storage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage as FacadesStorage;

class FasilitasController extends Controller
{
      public function index(Request $request)
    {
        $search = $request->query('search');

        $fasilitas = Fasilitas::when($search, function ($query, $search) {
            return $query->where('nama', 'like', "%{$search}%")
                         ->orWhere('deskripsi', 'like', "%{$search}%");
        })->paginate(10);

        return view('pages.dashboard.fasilitas.index', compact('fasilitas', 'search'));
    }

    public function manage($id = null)
    {
        $data = $id ? Fasilitas::findOrFail($id) : new fasilitas();
        return view('pages.dashboard.fasilitas.manage', compact('data'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'nama' => 'required|string|max:255',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'deskripsi' => 'nullable|string',
        ]);

        if ($request->hasFile('gambar')) {
            $data['gambar'] = $request->file('gambar')->store('fasilitas', 'public');
        }

        Fasilitas::create($data);

        return redirect()->route('dashboards.fasilitas')->with('success', 'fasilitas berhasil ditambahkan.');
    }

    public function update(Request $request, $id)
    {
        $fasilitas = Fasilitas::findOrFail($id);

        $data = $request->validate([
            'nama' => 'required|string|max:255',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'deskripsi' => 'nullable|string',
        ]);

        if ($request->hasFile('gambar')) {
            if ($fasilitas->gambar) {
                \Illuminate\Support\Facades\Storage::disk('public')->delete($fasilitas->gambar);
            }
            $data['gambar'] = $request->file('gambar')->store('fasilitas', 'public');
        }

        $fasilitas->update($data);

        return redirect()->route('dashboards.fasilitas')->with('success', 'fasilitas berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $fasilitas = Fasilitas::findOrFail($id);

        if ($fasilitas->gambar) {
            FacadesStorage::disk('public')->delete($fasilitas->gambar);
        }

        $fasilitas->delete();

        return redirect()->route('dashboards.fasilitas')->with('success', 'fasilitas berhasil dihapus.');
    }
}
