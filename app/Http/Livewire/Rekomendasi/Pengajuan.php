<?php

namespace App\Http\Livewire\Rekomendasi;

use App\Models\Pengajuan as ModelsPengajuan;
use Livewire\Component;
use Livewire\WithPagination;

class Pengajuan extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $search = '';

    public function render()
    {
        return view('livewire.rekomendasi.pengajuan',[
            'pengajuan' => ModelsPengajuan::whereIn('status_pengajuan', [ 'Rekomendasi'])
                ->where(function($query) {
                    $query->where('nama_pro', 'like', '%'.$this->search.'%')
                          ->orWhere('tanggal', 'like', '%'.$this->search.'%')
                          ->orWhere('status_pengajuan', 'like', '%'.$this->search.'%');
                })
                ->orderBy('created_at', 'desc')
                ->paginate(10),
          ])->extends('layouts.main',[
              'tittle' => 'Riwayat Pengajuan Rekomendasi',
          ])->section('isi');
    }
}
