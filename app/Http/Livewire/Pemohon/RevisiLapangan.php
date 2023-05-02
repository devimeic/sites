<?php

namespace App\Http\Livewire\Pemohon;

use App\Models\Berkas;
use App\Models\Upload;
use Livewire\Component;
use App\Models\Pengajuan;
use Illuminate\Support\Facades\Storage;
use Livewire\WithFileUploads;

class RevisiLapangan extends Component
{

    use WithFileUploads;

    public function render()
    {
        return view('livewire.pemohon.revisi-lapangan',[
            'berkas' => Berkas::whereIn('id', function ($query) {
                $query->select('berkas_id')
                      ->from('uploads')
                      ->where('pengajuan_id', $this->pengajuan->id);
            })->get(),
            'upload' => Upload::where('pengajuan_id', $this->pengajuan->id)->first(),
        ])
        ->extends('layouts.main',[
            'tittle' => 'Riwayat',
        ])->section('isi');
    }

    public $files ;
    public $pengajuan ;

    public function mount($id)
    {

        $this->pengajuan = Pengajuan::where('id',$id)->first();
    }

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

        public $berkas_id = [];
        public $nama_berkas = [];
        // public $pengajuan_id;

        public function submit()
        {

        if ($this->nama_berkas) {

            foreach($this->nama_berkas as $key => $value ){


                $cek = Upload::where('berkas_id',$key)->where('pengajuan_id',$this->pengajuan->id)->first();

                if ($cek) {
                    if (Storage::exists($cek->lokasi_berkas)) {
                        Storage::delete($cek->lokasi_berkas);
                    }
                    $imagePath = $value->store('public/images');
                    $cek->update([
                    'lokasi_berkas' => $imagePath,
                   ]);
                }else{

                    $imagePath = $value->store('public/images');
                    Upload::create([
                    'berkas_id' => $key,
                    'lokasi_berkas' => $imagePath,
                    'pengajuan_id' =>$this->pengajuan->id,
                   ]);
                }

            }

            $peng = Pengajuan::where('id',$this->pengajuan->id)->first();
            $peng->update(['status_pengajuan' => 'Verifikasi Lapangan',]);
        }


        return redirect()->route('riwayat-pemohon');

        }
}
