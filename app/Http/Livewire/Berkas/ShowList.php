<?php

namespace App\Http\Livewire\Berkas;

use Carbon\Carbon;
use App\Models\Psu;
use App\Models\Tipe;
use App\Models\User;
use App\Models\Berkas;
use App\Models\Upload;
use Livewire\Component;
use App\Models\Pengajuan;
use App\Models\Notifikasi;
use Livewire\WithPagination;
use Livewire\WithFileUploads;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class ShowList extends Component
{


    use LivewireAlert;
    use WithFileUploads;

    public $pengajuan;
    public $catatan=[];
    public $berkas_id = [];
    public $status_brks = [];
    public $jln_saluran;
    public $taman;
    public $rth;
    public $ibadah;
    public $olahraga;
    public $kesehatan;
    public $lain;
    public $luas_lain = [];
    public $inputs_lain =[];
    public $l = 1;


    public function render()
    {
        return view('livewire.berkas.show-list',[
            'berkas'=> Berkas::all(),
            'tipe' => Tipe::where('pengajuan_id', $this->pengajuan->id)->get(),
            'psu' => Psu::where('pengajuan_id', $this->pengajuan->id)->first(),
            'upload' => Upload::where('pengajuan_id', $this->pengajuan->id)->first(),
        ])
        ->extends('layouts.main',[
            'tittle' => 'Daftar Pengajuan Berkas',
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

        $psus = Psu::where('pengajuan_id',$this->pengajuan->id)->first();
        // if ($psus) {
            $this->jln_saluran  = Psu::where('pengajuan_id',$this->pengajuan->id)->where('psu','jln_saluran')->pluck('luas');
            $this->taman  = Psu::where('pengajuan_id',$this->pengajuan->id)->where('psu','taman')->pluck('luas');
            $this->rth  = Psu::where('pengajuan_id',$this->pengajuan->id)->where('psu','rth')->pluck('luas');
            $this->ibadah  = Psu::where('pengajuan_id',$this->pengajuan->id)->where('psu','ibadah')->pluck('luas');
            $this->olahraga  = Psu::where('pengajuan_id',$this->pengajuan->id)->where('psu','olahraga')->pluck('luas');
            $this->kesehatan  = Psu::where('pengajuan_id',$this->pengajuan->id)->where('psu','kesehatan')->pluck('luas');
            $this->lain  = Psu::where('pengajuan_id',$this->pengajuan->id)->where('psu','lain')->get();
            $l = 1;
    }

    public function catatansimpan($id)
    {
        $smp = Upload::where('pengajuan_id',$this->pengajuan->id)->where('berkas_id',$id)->first();
        // Memeriksa apakah ID berkas sudah ada dalam array catatan
        if(!array_key_exists($id,$this->catatan)){
            $this->catatan[$id] = null;
        }
        // Memeriksa apakah data upload ditemukan
    if ($smp) {
        $smp->update([
            'catatan' => $this->catatan[$id]
    ]);}
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

    public function revisi()
    {
        // dd($this->pengajuan->pengaju);
    $this->pengajuan->update([
        'status_pengajuan' => 'Revisi Berkas',
    ]);
    Notifikasi::create([
        'user_id' => $this->pengajuan->pengaju,
        'keterangan' => 'Proyek '.$this->pengajuan->nama_pro. ' Perlu Dilakukan Revisi Berkas',
        'status' => 'berkas',
        'jadwal' => Carbon::now()
    ]);
    $v = User::where('role','Verifikator Berkas')->get();
        foreach ($v as $key) {
            Notifikasi::create([
                'user_id' => $key->id,
                'keterangan' => 'Proyek '.$this->pengajuan->nama_pro. ' Sedang Di Revisi Pemohon',
                'status' => 'berkas',
                'jadwal' => Carbon::now()
        ]);
    }
    $this->alert('success', 'Berkas dalam status Revisi', [
        'position' => 'center',
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
            'catatan'=> null,
        ]);
            Notifikasi::create([
                'user_id' => $this->pengajuan->pengaju,
                'keterangan' => 'Proyek '.$this->pengajuan->nama_pro. ' Sedang Di Proses Verifikasi Lapangan',
                'status' => 'lapangan',
                'jadwal' => Carbon::now()
            ]);
            $v = User::where('role','Verifikator Lapangan')->get();
                foreach ($v as $key) {
                    Notifikasi::create([
                        'user_id' => $key->id,
                        'keterangan' => 'Proyek '.$this->pengajuan->nama_pro. ' Perlu Dilakukan Verifikasi Lapangan',
                        'status' => 'lapangan',
                        'jadwal' => Carbon::now()
                ]);
            }
        }



        $this->pengajuan->update([
            'status_pengajuan' => 'Verifikasi Lapangan'
        ]);
        $this->alert('success', 'Berkas diajukkan untuk Verifikasi Lapangan', [
            'position' => 'center',
            'timer' => 3000,
            'toast' => true,
        ]);
        // Notifikasi::create([
        //     'user_id' => $this->pengajuan->pengaju,
        //     'keterangan' => 'Proses Verifikasi Berkas',
        //     'status' => 'berkas',
        //     'jadwal' => Carbon::now()
        // ]);
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

}
