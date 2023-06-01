<?php

namespace App\Http\Livewire\Pemohon;

use App\Models\Psu;
use App\Models\Tipe;
use App\Models\Berkas;
use App\Models\Upload;
use Livewire\Component;
use App\Models\Pengajuan;
use App\Models\Rekomendasi;
use App\Models\User;

class ShowRiwayat extends Component
{

    public $pengajuan;
    public $nama_dev;
    public $nama_pro;
    public $nomor_rekomendasi;
    public $rekom;
    public $jln_saluran;
    public $taman;
    public $rth;
    public $ibadah;
    public $olahraga;
    public $kesehatan;
    public $lain;
    public $luas_lain = [];
    public $inputs_lain =[];
    public $l = 1;

    public function render()
    {
        $tittle = '';

        if (request()->routeIs('show-pemohon.*')) {
            $tittle = 'Riwayat';
        } elseif (request()->routeIs('show-laporan.*')) {
            $tittle = 'Laporan';
        }
        return view('livewire.pemohon.show-riwayat',[
            'user' => User::all(),
            'berkas'=> Berkas::all(),
            'tipe' => Tipe::where('pengajuan_id', $this->pengajuan->id)->get(),
            'psu' => Psu::where('pengajuan_id', $this->pengajuan->id)->first(),
            'upload' => Upload::where('pengajuan_id', $this->pengajuan->id)->first(),
        ])
        ->extends('layouts.main',[
            'tittle' => $tittle,
        ])->section('isi');
    }

    public function mount($id)
    {
        $this->pengajuan = Pengajuan::where('id', $id)->first();
        // $this->pengajuan = Rekomendasi::where('id', $id)->first();
        $this->nama_dev  = $this->pengajuan->nama_dev;
        $this->nama_pro  = $this->pengajuan->nama_pro;

        $cek = Rekomendasi::where('pengajuan_id',$this->pengajuan->id)->first();
        // $this->pengajuan = Rekomendasi::where('pengajuan_id', $id)->first();
        if($cek){

            $this->nomor_rekomendasi  = $cek->nomor_rekomendasi;
            $this->rekom1  = $cek->id;
        }
        $psus = Psu::where('pengajuan_id',$this->pengajuan->id)->first();
        // if ($psus) {
            $this->jln_saluran  = Psu::where('pengajuan_id',$this->pengajuan->id)->where('psu','jln_saluran')->pluck('luas');
            $this->taman  = Psu::where('pengajuan_id',$this->pengajuan->id)->where('psu','taman')->pluck('luas');
            $this->rth  = Psu::where('pengajuan_id',$this->pengajuan->id)->where('psu','rth')->pluck('luas');
            $this->ibadah  = Psu::where('pengajuan_id',$this->pengajuan->id)->where('psu','ibadah')->pluck('luas');
            $this->olahraga  = Psu::where('pengajuan_id',$this->pengajuan->id)->where('psu','olahraga')->pluck('luas');
            $this->kesehatan  = Psu::where('pengajuan_id',$this->pengajuan->id)->where('psu','kesehatan')->pluck('luas');
            $this->lain  = Psu::where('pengajuan_id',$this->pengajuan->id)->where('psu','lain')->get();
            $l = 1;
            // dd($this->rth);
        }

    public $step;
    public function plus()
    {
        $this->step++;
    }
    public function minus()
    {
        $this->step--;
    }
    public function jump($to)
    {
        $this->step = $to;
    }
    public $files ;
    public $rekom1 ;

    public function showBerkas($id)
        {

            $file = Upload::where('berkas_id',$id)->where('pengajuan_id',$this->pengajuan->id)->first();
            // @dd($file);
            if(!is_null($file))
            {
                $this->files = $file->lokasi_berkas;

            }else{
                $this->files = null;
            }

        }
    public function showRekom()
        {

            $file = Rekomendasi::where('pengajuan_id',$this->pengajuan->id)->first();
            // @dd($file);
            if(!is_null($file))
            {
                $this->rekom = $file->files;

            }else{
                $this->rekom = null;
            }

        }
}
