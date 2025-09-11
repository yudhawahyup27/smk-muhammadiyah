<?php

namespace App\Http\Controllers;

use App\Models\alumni;
use App\Models\jurusan;
use Illuminate\Http\Request;
use Storage;

class AlumniController extends Controller
{
    public function index(Request $request)
    {
        $jurusans = Jurusan::all();

        // Query builder untuk alumni dengan filter
        $query = Alumni::with('jurusan');

        // Filter berdasarkan jurusan
        if ($request->filled('jurusan')) {
            $query->where('jurusan_id', $request->jurusan);
        }

        // Filter berdasarkan tahun lulus
        if ($request->filled('tahun')) {
            $query->where('tahun_lulus', $request->tahun);
        }

        // Filter berdasarkan angkatan
        if ($request->filled('angkatan')) {
            $query->where('angkatan', $request->angkatan);
        }

        // Filter berdasarkan status
        if ($request->filled('status')) {
            $query->where('status', $request->status);
        }

        // Pagination dengan 10 data per halaman
        $alumnis = $query->paginate(10)->withQueryString();

        return view('pages.dashboard.alumni.index', compact('alumnis', 'jurusans'));
    }

    public function manage($id = null)
    {
        $alumni = $id ? Alumni::findOrFail($id) : null;
        $jurusans = Jurusan::all();

        return view('pages.dashboard.alumni.manage', compact('alumni', 'jurusans'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'tahun_lulus' => 'required|integer|min:1900|max:' . date('Y'),
            'angkatan' => 'required|integer|min:1900|max:' . date('Y'),
            'status' => 'required|in:bekerja,kuliah',
            'tempat' => 'required|string|max:255',
            'jurusan_id' => 'required|exists:jurusans,id',
            'caption' => 'nullable|string',
        ]);

        // Handle file upload
        if ($request->hasFile('photo')) {
            $validated['photo'] = $request->file('photo')->store('alumni', 'public');
        }

        // Update or Create berdasarkan ID
        if ($request->filled('id')) {
            // Update existing record
            $alumni = Alumni::findOrFail($request->id);

            // Jika ada foto baru, hapus foto lama
            if ($request->hasFile('photo') && $alumni->photo) {
                \Illuminate\Support\Facades\Storage::disk('public')->delete($alumni->photo);
            }

            $alumni->update($validated);
            $message = 'Data alumni berhasil diperbarui!';
        } else {
            // Create new record
            Alumni::create($validated);
            $message = 'Data alumni berhasil ditambahkan!';
        }

        return redirect()->route('dashboards.alumni')->with('success', $message);
    }

    public function destroy($id)
    {
        $alumni = Alumni::findOrFail($id);

        // Hapus foto jika ada
        if ($alumni->photo) {
            \Illuminate\Support\Facades\Storage::disk('public')->delete($alumni->photo);
        }

        $alumni->delete();

        return redirect()->back()->with('success', 'Data alumni berhasil dihapus!');
    }

}
