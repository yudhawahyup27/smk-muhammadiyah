<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlumniController extends Controller
{
    public function index(){

        return  view('pages.dashboard.alumni.index');
    }
}
