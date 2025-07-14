<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{

    public function index() {
        $user = auth()->user()->first();
        if (!$user) {
            return redirect()->route('login');
        }
        return view("pages.dashboard.index", compact('user'));
    }
}
