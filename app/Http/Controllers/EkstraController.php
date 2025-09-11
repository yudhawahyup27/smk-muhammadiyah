<?php

namespace App\Http\Controllers;

use App\Models\Ekstra;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EkstraController extends Controller
{
    public function index() {
        $data = Ekstra::get();
        return view('pages.dashboard.ekstra.index', compact('data'));
    }

    public function manage($id = null) {
        $data = $id ? Ekstra::findOrFail($id) : new Ekstra();
        return view('pages.dashboard.ekstra.manage', compact('data'));
    }

    public function store(Request $request) {
        $request->validate([
            'nama' => 'required|string',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg',
            'jadwal' => 'required|string',
            'deskripsi' => 'required|string',
        ]);

        $imagePath = $request->hasFile('gambar')
            ? $request->file('gambar')->store('ekstras', 'public')
            : null;

        Ekstra::create([
            'nama' => $request->nama,
            'gambar' => $imagePath,
            'jadwal' => $request->jadwal,
            'deskripsi' => $request->deskripsi,
        ]);

        return redirect()->route('dashboards.ekstra')->with('success', 'Ekstra berhasil ditambahkan.');
    }

    public function update(Request $request, $id) {
        $ekstra = Ekstra::findOrFail($id);

        $request->validate([
            'nama' => 'required|string',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg',
            'jadwal' => 'required|string',
            'deskripsi' => 'required|string',
        ]);

        if ($request->hasFile('gambar')) {
            // Hapus gambar lama jika ada
            if ($ekstra->gambar && Storage::disk('public')->exists($ekstra->gambar)) {
                Storage::disk('public')->delete($ekstra->gambar);
            }
            $ekstra->gambar = $request->file('gambar')->store('ekstras', 'public');
        }

        $ekstra->nama = $request->nama;
        $ekstra->jadwal = $request->jadwal;
        $ekstra->deskripsi = $request->deskripsi;
        $ekstra->save();

        return redirect()->route('dashboards.ekstra')->with('success', 'Ekstra berhasil diperbarui.');
    }

    public function destroy($id) {
        $ekstra = Ekstra::findOrFail($id);

        // Hapus gambar jika ada
        if ($ekstra->gambar && Storage::disk('public')->exists($ekstra->gambar)) {
            Storage::disk('public')->delete($ekstra->gambar);
        }

        $ekstra->delete();

        return redirect()->route('dashboards.ekstra')->with('success', 'Ekstra berhasil dihapus.');
    }
}
