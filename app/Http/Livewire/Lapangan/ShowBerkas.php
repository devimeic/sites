<?php

namespace App\Http\Livewire\Lapangan;

use App\Models\Berkas;
use App\Models\Upload;
use Livewire\Component;
use App\Models\Pengajuan;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class ShowBerkas extends Component
{

    use LivewireAlert;

    public $pengajuan;
    public $catatan=[];
    public $berkas_id = [];
    public $status_brks = [];

    public function render()
    {
        return view('livewire.lapangan.show-berkas',[
            'berkas'=> Berkas::all(),
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
        $this->catatan[0]= null;
        $this->berkas_id[0]= null;
        $this->status_brks[0]= null;
        foreach( $berks as $key){

        array_push($this->catatan,$key->catatan);
        array_push($this->status_brks,$key->status_berkas);
        array_push($this->berkas_id,$key->id);
        };
    }
    public $files ;

    public function showBerkas($id)
        {

            $file = Upload::where('berkas_id',$id)->where('pengajuan_id',$this->pengajuan->id)->first();
            // @dd($file);
            if(!is_null($file))
            {
                $this->files = $file->lokasi_berkas;

            }else{
            $this->files = null;
            }

        }

        public function simpan($id ,$st)
        {
            if ($st == 0) {
                $sta = 'setuju';
            }elseif ($st == 1) {
                $sta = 'tolak';

            };
            $smp = Upload::where('pengajuan_id',$this->pengajuan->id)->where('berkas_id',$id)->first();
            $this->catatansimpan($id);
            if ($smp) {
                $smp->update([
                    'status_berkas'=> $sta,
                    // 'catatan' => $this->catatan[$id]
            ]);
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

        public function catatansimpan($id)
    {
        $smp = Upload::where('pengajuan_id',$this->pengajuan->id)->where('berkas_id',$id)->first();
        if(!array_key_exists($id,$this->catatan)){
            $this->catatan[$id] = null;
        }
    if ($smp) {
        $smp->update([
            'catatan' => $this->catatan[$id]
    ]);}
    }

        public function revisi()
        {
        $this->pengajuan->update([
            'status_pengajuan' => 'Revisi Lapangan',
        ]);
        $this->alert('success', 'Berkas dalam status Revisi Lapangan', [
            'position' => 'top-right',
            'timer' => 3000,
            'toast' => true,
        ]);
        return redirect()->route('pengajuan-berkas');
        }

        public function setuju()
        {

        $smp = Upload::where('pengajuan_id',$this->pengajuan->id)->get();
        foreach ($smp as $key ) {
        $key->update([
            'status_berkas'=> null,

        ]);
    }
        $this->pengajuan->update([
            'status_pengajuan' => 'Rekomendasi'
        ]);
        $this->alert('success', 'Berkas diajukkan untuk proses rekomendasi', [
            'position' => 'top-right',
            'timer' => 3000,
            'toast' => true,
        ]);
        return redirect()->route('pengajuan-berkas');
        }
    }
