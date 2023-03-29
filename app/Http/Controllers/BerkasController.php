<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BerkasController extends Controller
{
    public function index()
    {
        $tittle = 'Dashboard';
        return view('berkas.dashboard', compact('tittle'));
    }

    public function pengajuan()
    {
        $tittle = 'Pengajuan';
        return view('berkas.pengajuan', compact('tittle'));
    }

    public function view()
    {
        $tittle = 'Rincian Berkas';
        return view('berkas.view-berkas', compact('tittle'));
    }

    public function input()
    {
        $tittle = 'Persyaratan Berkas';
        return view('berkas.input-berkas', compact('tittle'));
    }
}
