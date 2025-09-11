<?php

namespace App\Http\Controllers;

use App\Models\alumni;
use App\Models\Ekstra;
use App\Models\fasilitas;
use App\Models\jurusan;
use App\Models\Profile;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index () {
        $ekstras = Ekstra::take(4)->get();
        $jurusan = Jurusan::get();
        $fasilitas = fasilitas::take(4)->get();
        $profile = Profile::get()->first();
        return view('pages.landing.index',compact('ekstras','jurusan', 'fasilitas', 'profile'));
    }

    public function ekstrakulikuler () {
       $ekstras = Ekstra::get();

       return view('pages.landing.ekstrakulikuler.index', compact('ekstras'));
    }

public function alumni(Request $request)
{
    $query = Alumni::query();

    // Filter dinamis
    if ($request->filled('angkatan')) {
        $query->where('angkatan', $request->angkatan);
    }

    if ($request->filled('tahun_lulus')) {
        $query->where('tahun_lulus', $request->tahun_lulus);
    }

    if ($request->filled('status')) {
        $query->where('status', $request->status);
    }

    $alumni = $query->latest()->get();
 $totalLulus = Alumni::count(); // total alumni
    $totalKuliah = Alumni::where('status', 'Kuliah')->count();
    $totalKerja  = Alumni::where('status', 'bekerja')->count();

    return view('pages.landing.alumni.index', compact(
        'alumni',
        'totalLulus',
        'totalKuliah',
        'totalKerja'
    ));
    // Kirim filter aktif ke view juga
}

public function profile(){
    $profile = Profile::get()->first();
    return view('pages.landing.profile.index',compact('profile'));
}

public function jurusan(){
    $jurusan= Jurusan::get();
    return view('pages.landing.jurusan.index',compact('jurusan'));
}
public function fasilitas(){
    $fasilitas= fasilitas::get();
    return view('pages.landing.fasilitas.index',compact('fasilitas'));
}


}
