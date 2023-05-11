<?php

namespace App\Http\Controllers;

use App\Models\Rapat;
use App\Models\Pengajuan;
use Illuminate\Http\Request;

class LapanganController extends Controller
{
    public function index()
    {
        $tittle = 'Dashboard';
        $verifikasi = Pengajuan::where('status_pengajuan','Verifkasi Lapangan')->count();
        $revisi = Pengajuan::where('status_pengajuan','Revisi Lapangan')->count();
        $datas = Rapat::where('jadwal', '>=',now()->format('Y-m-d'))->get();
        return view('lapangan.dashboard', compact(['tittle','verifikasi','revisi','datas']));
    }

    public function pengajuan()
    {
        $tittle = 'Pengajuan';
        return view('lapangan.pengajuan', compact('tittle'));
    }
}
