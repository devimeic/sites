<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if ( Auth::user()->role == "admin"){
            $tittle = 'Dashboard';
            // return view('admin.dashboard', compact('tittle'));
            return redirect()->route('admin');

        } elseif (Auth::user()->role == "pemohon"){
            $tittle = 'Dashboard';
            return redirect()->route('pemohon');

        } elseif (Auth::user()->role == "verifikator berkas"){
            $tittle = 'Dashboard';
            return redirect()->route('berkas');

        } elseif (Auth::user()->role == "verifikator lapangan"){
            $tittle = 'Dashboard';
            return redirect()->route('lapangan');

        } elseif (Auth::user()->role == "pemberi rekomendasi"){
            $tittle = 'Dashboard';
            return redirect()->route('rekomendasi');

    } else {
        return view('auth.login2');
    }
}
}
