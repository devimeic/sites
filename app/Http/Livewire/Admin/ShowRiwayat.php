<?php

namespace App\Http\Livewire\Admin;

use App\Models\Berkas;
use App\Models\Pengajuan;
use App\Models\Psu;
use App\Models\Tipe;
use App\Models\Upload;
use Livewire\Component;

class ShowRiwayat extends Component
{
    public $pengajuan;

    public function render()
    {
        return view('livewire.admin.show-riwayat',[
            'berkas'=> Berkas::all(),
            'tipe' => Tipe::where('pengajuan_id', $this->pengajuan->id)->get(),
            'psu' => Psu::where('pengajuan_id', $this->pengajuan->id)->first(),
            'upload' => Upload::where('pengajuan_id', $this->pengajuan->id)->first(),
        ])
        ->extends('layouts.main',[
            'tittle' => 'Riwayat',
        ])->section('isi');
    }

    public function mount($id)
    {
        $this->pengajuan = Pengajuan::where('id', $id)->first();
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
}
