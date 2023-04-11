<?php

namespace App\Http\Livewire\Berkas;

use App\Models\Psu;
use App\Models\Tipe;
use App\Models\Berkas;
use App\Models\Upload;
use Livewire\Component;
use App\Models\Pengajuan;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\WithPagination;

class ShowList extends Component
{


    use LivewireAlert;

    public $pengajuan;
    public $berkas_id = [];
    public $status_brks = [];

    public function render()
    {
        return view('livewire.berkas.show-list',[
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
        $berks = Upload::where('pengajuan_id',$this->pengajuan->id)->get();
        foreach( $berks as $key){
        array_push($this->berkas_id,$key->id);
        };
    }
public function simpan($id ,$st)
{
    if ($st == 0) {
        $sta = 'setuju';
    }elseif ($st == 1) {
        $sta = 'tolak';

    };
    $smp = Upload::where('pengajuan_id',$this->pengajuan->id)->where('berkas_id',$id)->first();
    if ($smp) {
        $smp->update(['status_berkas'=> $sta]);
        $this->alert('success', 'Berhasil', [
            'position' => 'top-right',
            'timer' => 3000,
            'toast' => true,
        ]);
    }else {
        $this->alert('error', 'berkas kosong', [
            'position' => 'top-right',
            'timer' => 3000,
            'toast' => true,
        ]);
    }

}

    public function revisi()
    {
    $this->pengajuan->update([
        'status_pengajuan' => 'Revisi Berkas'
    ]);
    $this->alert('success', 'Berkas dalam status Revisi', [
        'position' => 'top-right',
        'timer' => 3000,
        'toast' => true,
    ]);
    return redirect()->route('pengajuan-berkas');
    }
    
    public function setuju()
    {
    $this->pengajuan->update([
        'status_pengajuan' => 'Verifikasi Lapangan'
    ]);
    $this->alert('success', 'Berkas dalam status Verifikasi Lapangan', [
        'position' => 'top-right',
        'timer' => 3000,
        'toast' => true,
    ]);
    return redirect()->route('pengajuan-berkas');
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
