<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function login() {
        return view('login');
    }

    public function dashboard(Request $request) {
        $username = session('username', 'Guest');
        return view('dashboard', ['username' => $username]);
    }

    public function pengelolaan() {
        return view('pengelolaan');
    }

    public function profile(Request $request) {
        $username = session('username', 'Guest');
        return view('profile', ['username' => $username]);
    }
}
