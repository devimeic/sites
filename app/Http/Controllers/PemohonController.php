<?php

namespace App\Http\Controllers;

use App\Models\Rapat;
use App\Models\Berkas;
use App\Models\Pengajuan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PemohonController extends Controller
{
    public function index()
    {
        $tittle = 'Dashboard';
        $selesai = Pengajuan::where('status_pengajuan','Selesai')->count();
        $kembali = Pengajuan::where('status_pengajuan','Dikembalikan')->count();
        $datas = Rapat::where('jadwal', '>=',now()->format('Y-m-d'))->get();
        return view('pemohon.dashboard', compact(['tittle','selesai','kembali','datas']));
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
