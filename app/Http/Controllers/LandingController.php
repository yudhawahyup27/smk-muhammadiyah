<?php

namespace App\Http\Controllers;

use App\Models\Ekstra;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index () {
        $ekstras = Ekstra::take(4)->get();


        return view('pages.landing.index',compact('ekstras'));
    }
}
