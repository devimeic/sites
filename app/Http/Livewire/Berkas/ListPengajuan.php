<?php

namespace App\Http\Livewire\Berkas;

use Livewire\Component;
use App\Models\Pengajuan;
use Livewire\WithPagination;

class ListPengajuan extends Component
{
    use WithPagination;



    protected $paginationTheme = 'bootstrap';
    public $search = '';

    public function render()
    {
        return view('livewire.berkas.list-pengajuan',[
            'pengajuan' => Pengajuan::whereIn('status_pengajuan', ['Verifikasi Berkas', 'Revisi Berkas'])
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
