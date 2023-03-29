<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RekomendasiController extends Controller
{
    public function index()
    {
        $tittle = 'Dashboard';
        return view('rekomendasi.dashboard', compact('tittle'));
    }

    public function pengajuan()
    {
        $tittle = 'Pengajuan';
        return view('Rekomendasi.pengajuan', compact('tittle'));
    }

    public function surat()
    {
        $tittle=' Surat Rekomendasi';
        return view('rekomendasi.surat_rekom', compact('tittle'));
    }
}
