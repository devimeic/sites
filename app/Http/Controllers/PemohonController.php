<?php

namespace App\Http\Controllers;

use App\Models\Berkas;
use App\Models\Pengajuan;
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
        $pengajuan = Pengajuan::where('status_pengajuan','Draft')->get();
        return view('pemohon.list-pengajuan', compact('tittle','pengajuan'));
    }

    public function riwayat()
    {
        $tittle = 'Riwayat Pengajuan';
        $pengajuan = Pengajuan::all();
        return view('pemohon.riwayat', compact('tittle','pengajuan'));
    }

}
