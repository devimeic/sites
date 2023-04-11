<?php

namespace App\Http\Livewire\Pemohon;

use App\Models\Upload;
use Livewire\Component;
use App\Models\Pengajuan;
use Livewire\WithPagination;

class Riwayat extends Component
{

    use WithPagination;



    protected $paginationTheme = 'bootstrap';
    public $search = '';
    public $pengajuan_id;

    public function render()
    {
        return view('livewire.pemohon.riwayat',[
            'pengajuan' => Pengajuan::where('status_pengajuan', '<>', 'draft')
                ->where(function($query) {
                    $query->where('nama_pro', 'like', '%'.$this->search.'%')
                          ->orWhere('tanggal', 'like', '%'.$this->search.'%')
                          ->orWhere('status_pengajuan', 'like', '%'.$this->search.'%');
                })
                ->orderBy('created_at', 'desc')
                ->paginate(10),
          ])->extends('layouts.main',[
              'tittle' => 'Riwayat Pengajuan',
          ])->section('isi');
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }

}
