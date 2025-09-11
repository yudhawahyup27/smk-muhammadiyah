<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index(){
        $profile= Profile::first();
        return view('pages.dashboard.profile.index', compact('profile'));
    }

    public function storeOrUpdate(Request $request)
    {
        $validated = $request->validate([
            'name' => 'nullable|string',
            'slogan' => 'nullable|string',
            'tahun_berdiri' => 'nullable|digits:4|integer',
            'akreditasi' => 'nullable|string',
            'alamat' => 'nullable|string',
            'sejarah' => 'nullable|string',
            'visi' => 'nullable|string',
            'misi' => 'nullable|string',
            'email' => 'nullable|email',
            'telepon' => 'nullable|string',
            'instagram' => 'nullable|string',
            'web' => 'nullable|string',
        ]);

        $profile = Profile::first();

        if ($profile) {
            $profile->update($validated);
        } else {
            Profile::create($validated);
        }

        return redirect()->back()->with('success', 'Profile berhasil disimpan.');
    }
}
