<?php

namespace App\Http\Controllers;

use App\Models\Pengajuan;
use App\Models\Rapat;
use Carbon\Carbon;
use DateTime;
use Illuminate\Http\Request;

class BerkasController extends Controller
{
    public function index()
    {
        $tittle = 'Dashboard';
        $verifikasi = Pengajuan::where('status_pengajuan','Verifkasi Berkas')->count();
        $revisi = Pengajuan::where('status_pengajuan','Revisi Berkas')->count();
        $datas = Rapat::where('jadwal', '>=',now()->format('Y-m-d'))->get();
        return view('berkas.dashboard', compact(['tittle','verifikasi','revisi','datas']));
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
