<?php

namespace App\Http\Livewire\Pemohon;

use App\Models\Upload;
use Livewire\Component;
use App\Models\Pengajuan;
use Illuminate\Support\Facades\Auth;
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
            'pengajuan' => Pengajuan::whereNotIn('status_pengajuan', ['Draft', 'Dikembalikan', 'Selesai'])
                ->where(function($query) {
                    $query->where('nama_pro', 'like', '%'.$this->search.'%')
                          ->orWhere('tanggal', 'like', '%'.$this->search.'%')
                          ->orWhere('status_pengajuan', 'like', '%'.$this->search.'%');
                })->where('pengaju',Auth::user()->id)
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
