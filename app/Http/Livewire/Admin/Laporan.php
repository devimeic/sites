<?php

namespace App\Http\Livewire\Admin;

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
        return view('livewire.admin.laporan',[
            'pengajuan' => Pengajuan::whereIn('status_pengajuan', ['Dikembalikan', 'Selesai'])
                ->where(function($query) {
                    $query->where('nama_pro', 'like', '%'.$this->search.'%')
                          ->orWhere('tanggal', 'like', '%'.$this->search.'%')
                          ->orWhere('status_pengajuan', 'like', '%'.$this->search.'%');
                })
                ->orderBy('created_at', 'desc')
                ->paginate(10),
          ])->extends('layouts.main',[
              'tittle' => 'Laporan',
          ])->section('isi');
    }
}
