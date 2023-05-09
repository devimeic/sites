<?php

namespace App\Http\Livewire\Rekomendasi;

use Livewire\Component;
use App\Models\Pengajuan;
use App\Models\Rekomendasi;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class UploadSurat extends Component
{
    use WithFileUploads;
    use LivewireAlert;

    public function render()
    {
        return view('livewire.rekomendasi.upload-surat',[
            'pengajuan'=> Pengajuan::all(),
        ])
        ->extends('layouts.main',[
            'tittle' => 'Riwayat',
        ])->section('isi');
    }

    public $nama_dev;
    public $nama_pro;
    public $pengajuan;

    public function mount($id)
    {
        $this->pengajuan = Pengajuan::where('id', $id)->first();
        $this->pengajuan_id = $this->pengajuan->id;

        $this->nama_dev  = $this->pengajuan->nama_dev;
        $this->nama_pro  = $this->pengajuan->nama_pro;

    }

    public $files;
    public $nomor_rekomendasi;
    public $pengajuan_id;

    public function setuju()
    {
        $this->validate([
'files'=> 'required',
'nomor_rekomendasi'=> 'required'
        ]);
        // if ($this->files) {

            $directori = strtolower(str_replace(' ', '_', $this->nama_pro));

            if (!Storage::exists($directori)) {
                Storage::makeDirectory($directori, 0777, true, true);
            }


                $imagePath = $this->files->store('public/berkas/'.$directori);
                Rekomendasi::create([
                'files' => $imagePath,
                'nomor_rekomendasi' => $this->nomor_rekomendasi,
                'pengajuan_id' =>$this->pengajuan_id,

               ]);


            // $rekom = Rekomendasi::where('id',$this->pengajuan_id)->first();
            // $rekom->update(
            //     [
            // ]);

            $peng = Pengajuan::where('id',$this->pengajuan_id)->first();
            $peng->update(['status_pengajuan' => 'Selesai',]);
        // }

        $this->alert('success', 'Surat Rekomendasi Telah Diserahkan', [
            'position' => 'center',
            'timer' => 3000,
            'toast' => true,
        ]);
        return redirect()->route('pengajuan-rekomendasi');

        // $this->step++;
    }

    public function revisi()
        {
        $this->pengajuan->update([
            'status_pengajuan' => 'Dikembalikan',
        ]);
        $this->alert('success', 'Pengajuan Telah Dikembalikan', [
            'position' => 'center',
            'timer' => 3000,
            'toast' => true,
        ]);
        return redirect()->route('pengajuan-rekomendasi');
        }

}