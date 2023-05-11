<?php

namespace App\Http\Controllers;

use App\Models\Rapat;
use App\Models\Pengajuan;
use Illuminate\Http\Request;

class RekomendasiController extends Controller
{
    public function index()
    {
        $tittle = 'Dashboard';
        $rekom = Pengajuan::where('status_pengajuan','Rekomendasi')->count();
        $datas = Rapat::where('jadwal', '>=',now()->format('Y-m-d'))->get();
        return view('rekomendasi.dashboard', compact(['tittle','rekom','datas']));
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
