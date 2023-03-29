<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LapanganController extends Controller
{
    public function index()
    {
        $tittle = 'Dashboard';
        return view('lapangan.dashboard', compact('tittle'));
    }

    public function pengajuan()
    {
        $tittle = 'Pengajuan';
        return view('lapangan.pengajuan', compact('tittle'));
    }
}
