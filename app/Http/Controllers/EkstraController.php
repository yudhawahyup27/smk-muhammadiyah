<?php

namespace App\Http\Controllers;

use App\Models\Ekstra;
use Illuminate\Http\Request;

class EkstraController extends Controller
{
    public function index () {
        $data =Ekstra::get();
        return view('pages.dashboard.ekstra.index',compact('data'));
    }

    public function manage ($id = null){
        $data = $id ? Ekstra::findOrFail($id) : new Ekstra();

        return view( 'pages.dashboard.ekstra.manage', compact('data'));
    }
}
