<?php

namespace App\Http\Livewire\Admin;

use App\Models\Pengajuan;
use App\Models\Tipe;
use Livewire\Component;
use Livewire\WithPagination;

class Riwayat extends Component
{

    use WithPagination;


    public $dev;
    public $nama_dev;
    public $alamat_dev;
    public $no_hp;
    public $asosiasi;
    public $no_anggota;
    public $nama_pro;
    public $alamat_pro;
    public $pemohon1;
    public $tel_pemohon1;
    public $pemohon2;
    public $tel_pemohon2;
    public $total;
    public $slug;
    public $tanggal;
    protected $paginationTheme = 'bootstrap';
    public $search = '';

    public function render()
    {
        return view('livewire.admin.riwayat',[
            'pengajuan' => Pengajuan::where('status_pengajuan', '<>', 'draft')
                ->where(function($query) {
                    $query->where('nama_pro', 'like', '%'.$this->search.'%')
                          ->orWhere('tanggal', 'like', '%'.$this->search.'%')
                          ->orWhere('status_pengajuan', 'like', '%'.$this->search.'%');
                })
                ->orderBy('created_at', 'desc')
                ->paginate(10),
          ])->extends('layouts.main',[
              'tittle' => 'Riwayat Pengajuan Livewire',
          ])->section('isi');
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }


    public $pengaju;
    public $status_pengajuan;
    public $tipe;
    public $juml_unit;
    public $kategori;
    public $jln_saluran;
    public $taman;
    public $rth;
    public $ibadah;
    public $olahraga;
    public $kesehatan;
    public $lain;

    public function showRiwayat($id)
        {

            $Pengajuan = Pengajuan::where('id',$id)->first();
            $tipee = Tipe::where('',$Pengajuan->id)->get();
            $this->dev  = $Pengajuan->id;
            $this->nama_dev  = $Pengajuan->nama_dev;
            $this->no_hp  = $Pengajuan->no_hp;
            $this->alamat_dev  = $Pengajuan->alamat_dev;
            $this->pengaju  = $Pengajuan->pengaju;
            $this->status_pengajuan = $Pengajuan->status_pengajuan;
            $this->tanggal = $Pengajuan->tanggal;
            $this->asosiasi = $Pengajuan->asosiasi;
            $this->no_anggota = $Pengajuan->no_anggota;
            $this->nama_pro = $Pengajuan->nama_pro;
            $this->alamat_dev = $Pengajuan->alamat_dev;
            $this->pemohon1 = $Pengajuan->pemohon1;
            $this->tel_pemohon1 = $Pengajuan->tel_pemohon1;
            $this->pemohon2 = $Pengajuan->pemohon2;
            $this->tel_pemohon2 = $Pengajuan->tel_pemohon2;
            $this->total = $Pengajuan->total;
            $this->tipe = $tipee->tipe;
            $this->juml_unit = $tipee->juml_unit;
            $this->kategori = $tipee->kategori;
            $this->jln_saluran = $tipee->jln_saluran;
            $this->taman = $tipee->taman;
            $this->rth = $tipee->rth;
            $this->ibadah = $tipee->ibadah;
            $this->olahraga = $tipee->olahraga;
            $this->kesehatan = $tipee->kesehatan;
            $this->lain = $tipee->lain;

        }

}
