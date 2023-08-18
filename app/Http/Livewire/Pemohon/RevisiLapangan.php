<?php

namespace App\Http\Livewire\Pemohon;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Berkas;
use App\Models\Upload;
use Livewire\Component;
use App\Models\Pengajuan;
use App\Models\Notifikasi;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class RevisiLapangan extends Component
{
    use LivewireAlert;
    use WithFileUploads;

    public function render()
    {
        return view('livewire.pemohon.revisi-lapangan',[
            'berkas' => Berkas::whereIn('id', function ($query) {
                $query->select('berkas_id')
                      ->from('tb_upload')
                      ->where('pengajuan_id', $this->pengajuan->id);
            })->get(),
            'upload' => Upload::where('pengajuan_id', $this->pengajuan->id)->first(),
        ])
        ->extends('layouts.main',[
            'tittle' => 'Revisi Lapangan',
        ])->section('isi');
    }

    public $files ;
    public $pengajuan ;
    public $catatan ;
    public $status_brks ;
    public $nama_pro;

    protected $messages = [
        'nama_berkas.*.max'=> 'Ukuran berkas terlalu besar. Mohon unggah berkas dengan ukuran maksimal 2 MB.'
    ];

    public function mount($id)
    {

        $this->pengajuan = Pengajuan::where('id',$id)->first();
        $berks = Upload::where('pengajuan_id',$this->pengajuan->id)->get();
        $this->catatan[0]= null;
        $this->berkas_id[0]= null;
        $this->status_brks[0]= null;
        $this->nama_pro = $this->pengajuan->nama_pro;
        foreach( $berks as $key){

        array_push($this->catatan,$key->catatan);
        array_push($this->status_brks,$key->status_berkas);
        array_push($this->berkas_id,$key->id);
        };
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

        protected $rules = [
            // 'name' => 'required|min:6',
            'nama_berkas.*' => 'file|max:3000',
        ];

        // protected $messages = [];

        public function updated($propertyName)
        {
            $this->validateOnly($propertyName);
        }

        public function submit()
        {
            $this->validate([
                'nama_berkas.*' => 'file|max:3000', // Validasi ukuran maksimum 3 MB (3000 KB)
            ]);

        if ($this->nama_berkas) {

            $directori = strtolower(str_replace(' ', '_', $this->nama_pro));

            if (!Storage::exists($directori)) {
                Storage::makeDirectory($directori, 0777, true, true);
            }

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
            Notifikasi::create([
                'user_id' => $peng->pengaju,
                'keterangan' => 'Proyek '.$peng->nama_pro. ' Sedang Di Proses Verifikasi Lapangan',
                'status' => 'lapangan',
                'jadwal' => Carbon::now()
            ]);

            $v = User::where('role','Verifikator Lapangan')->get();
            foreach ($v as $key) {
                Notifikasi::create([
                    'user_id' => $key->id,
                    'keterangan' => 'Proyek '.$peng->nama_pro. ' Perlu Dilakukan Verifikasi Lapangan',
                    'status' => 'lapangan',
                    'jadwal' => Carbon::now()
                ]);
            }
            $directori = strtolower(str_replace(' ', '_', $this->nama_pro));
            Storage::deleteDirectory('public/temp/'.$directori);
        }
        $this->alert('success', 'Berkas dalam status Verifikasi Lapangan', [
            'position' => 'center',
            'timer' => 3000,
            'toast' => true,
        ]);

        return redirect()->route('riwayat-pemohon');

        }


    public $preview;

    public function showPreview($id){

        // dd($id);
         $this->preview = $id;
    }

}
