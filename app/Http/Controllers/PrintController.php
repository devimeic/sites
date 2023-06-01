<?php

namespace App\Http\Controllers;

use App\Models\Pengajuan;
use App\Models\Psu;
use App\Models\Tipe;
use App\Models\Upload;
use Illuminate\Http\Request;

class PrintController extends Controller
{
    public function index($id)
    {
        // Pengajuan::where('status_pengajuan','Revisi Berkas')->get();
        $cc = Pengajuan::where('id',$id)->first();
        $tabel = Upload::where('pengajuan_id',$id)->get();
        $tipe = Tipe::where('pengajuan_id',$id)->get();
        $jln = Psu::where('pengajuan_id',$id)->where('psu','jln_saluran')->first();
        $taman = Psu::where('pengajuan_id',$id)->where('psu','taman')->first();
        $rth = Psu::where('pengajuan_id',$id)->where('psu','rth')->first();
        $ibadah = Psu::where('pengajuan_id',$id)->where('psu','ibadah')->first();
        $olahraga = Psu::where('pengajuan_id',$id)->where('psu','olahraga')->first();
        $kesehatan = Psu::where('pengajuan_id',$id)->where('psu','kesehatan')->first();
        $lain = Psu::where('pengajuan_id',$id)->where('psu','lain')->get();
        return view('layouts.print-revisiBerkas',compact('cc','tabel','tipe','jln','taman','rth','ibadah','olahraga','kesehatan','lain'));
    }
    public function lapangan($id)
    {
        // Pengajuan::where('status_pengajuan','Revisi Berkas')->get();
        $cc = Pengajuan::where('id',$id)->first();
        $tabel = Upload::where('pengajuan_id',$id)->get();
        $tipe = Tipe::where('pengajuan_id',$id)->get();
        $jln = Psu::where('pengajuan_id',$id)->where('psu','jln_saluran')->first();
        $taman = Psu::where('pengajuan_id',$id)->where('psu','taman')->first();
        $rth = Psu::where('pengajuan_id',$id)->where('psu','rth')->first();
        $ibadah = Psu::where('pengajuan_id',$id)->where('psu','ibadah')->first();
        $olahraga = Psu::where('pengajuan_id',$id)->where('psu','olahraga')->first();
        $kesehatan = Psu::where('pengajuan_id',$id)->where('psu','kesehatan')->first();
        $lain = Psu::where('pengajuan_id',$id)->where('psu','lain')->get();
        return view('layouts.print-revisiLap',compact('cc','tabel','tipe','jln','taman','rth','ibadah','olahraga','kesehatan','lain'));
    }

    // public function berkas(){
    //     $pengajuan = Pengajuan::where('status_pengajuan','Revisi Berkas')->get();
    //     return redirect()->route('print-berkas',compact('pengajuan'));
    // }
}
