<?php

namespace App\Http\Livewire\Lapangan;

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
        return view('livewire.lapangan.list-pengajuan',[
            'pengajuan' => Pengajuan::whereIn('status_pengajuan', ['Verifikasi Lapangan', 'Revisi Lapangan'])
                ->where(function($query) {
                    $query->where('nama_pro', 'like', '%'.$this->search.'%')
                          ->orWhere('tanggal', 'like', '%'.$this->search.'%')
                          ->orWhere('status_pengajuan', 'like', '%'.$this->search.'%');
                })
                ->orderBy('status_pengajuan', 'asc')
                ->paginate(10),
          ])->extends('layouts.main',[
              'tittle' => 'Riwayat Pengajuan Lapangan',
          ])->section('isi');

    }
}
