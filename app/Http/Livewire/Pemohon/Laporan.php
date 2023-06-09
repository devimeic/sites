<?php

namespace App\Http\Livewire\Pemohon;

use Livewire\Component;
use App\Models\Pengajuan;
use Illuminate\Support\Facades\Auth;
use Livewire\WithPagination;

class Laporan extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';
    public $search = '';

    public function render()
    {
        return view('livewire.pemohon.laporan',[
            'pengajuan' => Pengajuan::where('status_pengajuan', 'Dikembalikan')->orWhere('status_pengajuan', 'Selesai')
                ->where(function($query) {
                    $query->where('nama_pro', 'like', '%'.$this->search.'%')
                          ->orWhere('tanggal', 'like', '%'.$this->search.'%')
                          ->orWhere('status_pengajuan', 'like', '%'.$this->search.'%');
                })->where('pengaju',Auth::user()->id)
                ->orderBy('created_at', 'desc')
                ->paginate(10),
          ])->extends('layouts.main',[
              'tittle' => 'Laporan',
          ])->section('isi');
    }
}
