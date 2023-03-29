<?php

namespace App\Http\Controllers;

use App\Models\Berkas;
use Illuminate\Http\Request;

class PemohonController extends Controller
{
    public function index()
    {
        $tittle = 'Dashboard';
        return view('pemohon.dashboard', compact('tittle'));
    }

    public function pengajuan()
    {
        $berkas = Berkas::all();
        $tittle = 'Pengajuan';
        return view('pemohon.pengajuan', compact('tittle','berkas'));
    }

    public function list()
    {
        $tittle = 'List Pengajuan';
        return view('pemohon.list-pengajuan', compact('tittle'));
    }

    public function riwayat()
    {
        $tittle = 'Riwayat Pengajuan';
        return view('pemohon.riwayat', compact('tittle'));
    }

}
