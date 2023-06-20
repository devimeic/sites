<?php

namespace App\Http\Livewire\Pemohon;

use Carbon\Carbon;
use App\Models\Psu;
use App\Models\Tipe;
use App\Models\User;
use App\Models\Berkas;
use App\Models\Upload;
use Livewire\Component;
use App\Models\Pengajuan;
use App\Models\Notifikasi;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class ShowDraft extends Component
{
    use LivewireAlert;
    use WithFileUploads;

    public $pengajuan;

    public $dev;
    public $nama_dev;
    public $alamat_dev;
    public $no_hp;
    public $asosiasi;
    public $no_anggota;
    public $nama_pro;
    public $alamat_pro;
    public $pemohon1;
    public $tel_pemohon1;
    public $pemohon2;
    public $tel_pemohon2;
    public $total;
    public $kategori = [];
    public $tipe = [];
    public $juml_unit = [];
    public $jln_saluran;
    public $taman;
    public $rth;
    public $ibadah;
    public $olahraga;
    public $kesehatan;
    public $lain;
    public $step;
    public $keterangan_lain = [];
    public $luas_lain = [];
    public $inputs_lain =[];
    public $l = 1;

    public function render()
    {


        if ($this->pengajuan->status_pengajuan == 'Revisi Berkas') {
            $berkas = Berkas::with(['upload' => function ($query) {
                $query->where('pengajuan_id', $this->pengajuan->id);
            }])->get();
        }else{
        $berkas = Berkas::all();
        }

        return view('livewire.pemohon.show-draft',[
            'berkas'  => $berkas,
        ])
        ->extends('layouts.main',[
            'tittle' => 'Draft',
        ])->section('isi');
    }



    public function mount($id)
    {
        $this->pengajuan = Pengajuan::where('id', $id)->first();

        $this->dev  = $this->pengajuan->dev;
        $this->nama_dev  = $this->pengajuan->nama_dev;
        $this->alamat_dev  = $this->pengajuan->alamat_dev;
        $this->no_hp  = $this->pengajuan->no_hp;
        $this->asosiasi  = $this->pengajuan->asosiasi;
        $this->no_anggota  = $this->pengajuan->no_anggota;
        $this->nama_pro  = $this->pengajuan->nama_pro;
        $this->alamat_pro  = $this->pengajuan->alamat_pro;
        $this->pemohon1  = $this->pengajuan->pemohon1;
        $this->tel_pemohon1  = $this->pengajuan->tel_pemohon1;
        $this->pemohon2  = $this->pengajuan->pemohon2;
        $this->tel_pemohon2  = $this->pengajuan->tel_pemohon2;
        $this->total  = $this->pengajuan->total;


        $tipes =  Tipe::where('pengajuan_id',$this->pengajuan->id)->get();
        $j = 1;
        foreach ($tipes as $key ) {

            // [$key]  = $key->tipe;
            array_push($this->kategori ,$key->kategori);
            array_push($this->juml_unit ,$key->juml_unit);
            array_push($this->tipe ,$key->tipe);
            array_push($this->inputs ,$j++);

            // $this->kategori[$j++]  = $key->kategori ;
            // $this->juml_unit[$j++]  = $key->juml_unit;
        }


        // public $keterangan = [];
        // public $luas = [];

        $psus = Psu::where('pengajuan_id',$this->pengajuan->id)->first();
        // if ($psus) {
            $this->jln_saluran  = Psu::where('pengajuan_id',$this->pengajuan->id)->where('psu','jln_saluran')->pluck('luas');
            $this->taman  = Psu::where('pengajuan_id',$this->pengajuan->id)->where('psu','taman')->pluck('luas');
            $this->rth  = Psu::where('pengajuan_id',$this->pengajuan->id)->where('psu','rth')->pluck('luas');
            $this->ibadah  = Psu::where('pengajuan_id',$this->pengajuan->id)->where('psu','ibadah')->pluck('luas');
            $this->olahraga  = Psu::where('pengajuan_id',$this->pengajuan->id)->where('psu','olahraga')->pluck('luas');
            $this->kesehatan  = Psu::where('pengajuan_id',$this->pengajuan->id)->where('psu','kesehatan')->pluck('luas');
            $lain  = Psu::where('pengajuan_id',$this->pengajuan->id)->where('psu','lain')->get();
            $l = 1;
            foreach ( $lain as $key => $value  ) {
// dd($key);
                // [$key]  = $key->tipe;
                array_push($this->keterangan_lain ,$value->keterangan);
                array_push($this->luas_lain ,$value->luas);
                array_push($this->inputs_lain ,$l++);


                // $this->kategori[$j++]  = $key->kategori ;
                // $this->juml_unit[$j++]  = $key->juml_unit;
            }
            // dd($this->inputs_lain);

        // } else {
        //     $this->step = 0;
        // }

        $this->step = 0;
    }

    public function add_lain($l)
    {
        $l = $l + 1;
        $this->l = $l;
        array_push($this->inputs_lain ,$l);
    }

    public function remove_lain($l)
    {
        unset($this->inputs_lain[$l]);
    }
    public function remove_lainn($l)
    {
        unset($this->keterangan_lain[$l]);
    }
    public $updateMode = false;
    public $inputs = [];
    public $i = 1;

    public function add($i)
    {
        $i = $i + 1;
        $this->i = $i;
        array_push($this->inputs ,$i);
    }

    public function remove($i)
    {
        unset($this->tipe[$i]);
    }
    public function removee($i)
    {
        unset($this->inputs[$i]);
        // unset($this->tipe[$i]);
    }
    public $pengajuans;
    public $pengajuan_id;
    private $stepActions = [
        'submit2',
        'submit3',
        'store',
        'submit5',
    ];

    public function submit()
    {

        $action = $this->stepActions[$this->step];

        $this->$action();
    }
//     protected $rules=
//     [
//         'dev' => 'required',
//         'nama_dev' => 'required',
//         'alamat_dev' => 'required',
//         'asosiasi' => 'required',
//         'no_anggota' => 'required',
//         'tel_pemohon1' => 'required|min:11|max:15',
//         'tel_pemohon2' => 'min:11|max:15',
// ];

    protected $messages = [
        'dev.required' => 'nama developer tidak boleh kosong',
        'nama_dev.required' => 'nama developer tidak boleh kosong',
        'alamat_dev.required' => 'alamat developer tidak boleh kosong',
        'asosiasi.required' => 'asosiasi tidak boleh kosong',
        'no_anggota.required' => 'nomor anggota developer tidak boleh kosong',
        'tel_pemohon1.min'=> 'nomor hp kurang dari 11 karakter',
        'tel_pemohon2.min'=> 'nomor hp kurang dari 11 karakter',
        'tel_pemohon1.max'=> 'nomor hp terlalu panjang',
        'tel_pemohon2.max'=> 'nomor hp terlalu panjang',
        'nama_berkas.*.max'=> 'Ukuran berkas terlalu besar. Mohon unggah berkas dengan ukuran maksimal 2 MB.',
        'nama_pro.required' => 'nama proyek tidak boleh kosong',
        'alamat_pro.required' => 'alamat proyek tidak boleh kosong',
        'pemohon1.required' => 'nama pemohon tidak boleh kosong',
        'tel_pemohon1.required' => 'nomor hp tidak boleh kosong',
        'tel_pemohon1.min' => 'nomor hp kurang dari 11 karakter',
        'tel_pemohon1.max' => 'nomor hp terlalu panjang',
        'tel_pemohon1.required' => 'nomor hp tidak boleh kosong',
        'tel_pemohon2.min' => 'nomor hp kurang dari 11 karakter',
        'tel_pemohon2.max' => 'nomor hp terlalu panjang',
        'total.required' => 'total tidak boleh kosong'
    ];

    public function submit2()
    {
        $this->validate([
            'nama_dev' => 'required',
            'alamat_dev' => 'required',
            'asosiasi' => 'required',
            'no_anggota' => 'required',
        ]);


            $this->pengajuan = tap($this->pengajuan)->update(
                [
                    'dev' => $this->dev,
                    'nama_dev' => $this->nama_dev,
                    'no_hp' => Auth::user()->no_hp,
                    'alamat_dev' => $this->alamat_dev,
                    'pengaju' => Auth::user()->id,
                    'status_pengajuan' => 'Draft',
                    'tanggal' => Carbon::now(),
                    'asosiasi' => $this->asosiasi,
                    'no_anggota' => $this->no_anggota,

                ]);
                // $this->alert('success', 'Berhasil', [
                //     'position' => 'center',
                //     'timer' => 3000,
                //     'toast' => false,
                //     'text' => 'Mengubah Pengajuan',
                //     'timerProgressBar' => true,
                // ]);

            // $this->alert('success', 'Berhasil', [
            //     'position' => 'top-right',
            //     'timer' => 3000,
            //     'toast' => true,
            // ]);
            $this->pengajuan_id = $this->pengajuan->id;
            $this->step++;
        }

        public function submit3()
        {
            $this->validate([
                'nama_pro' => 'required',
                'alamat_pro' => 'required',
                'pemohon1' => 'required',
                'tel_pemohon1' => 'required|min:11|max:15',
                'tel_pemohon2' => 'min:11|max:15',
                'total' => 'required',

            ]);
            $this->pengajuan = tap($this->pengajuan)->update([
                'nama_pro' => $this->nama_pro,
                'alamat_pro' => $this->alamat_pro,
                'pemohon1' => $this->pemohon1,
                'tel_pemohon1' => $this->tel_pemohon1,
                'pemohon2' => $this->pemohon2,
                'tel_pemohon2' => $this->tel_pemohon2,
                'total' => $this->total,

            ]);
            // $this->alert('success', 'Data Berhasil Diupdate', [
            //     'position' => 'top-right',
            //     'timer' => 3000,
            //     'toast' => true,
            // ]);
            $this->pengajuan_id = $this->pengajuan->id;
            $this->step++;
        }

        public function submit4()
        {
            $this->pengajuan_id = $this->pengajuan->id;

            // $this->store();
            $this->step++;
        }

        public $bangun;
        public $berkas_id = [];
        public $nama_berkas = [];
        protected $rules = [
            // 'name' => 'required|min:6',
            'nama_berkas.*' => 'file|max:3000',
        ];

            public function updated($propertyName)
        {
            $this->validateOnly($propertyName);
        }

    //     public function submit5()
    // {

    //     if ($this->nama_berkas) {

    //         foreach($this->nama_berkas as $key => $value ){


    //             $cek = Upload::where('berkas_id',$key)->where('pengajuan_id',$this->pengajuan_id)->first();
    //             if ($cek) {
    //                 if (Storage::exists($cek->lokasi_berkas)) {
    //                     Storage::delete($cek->lokasi_berkas);
    //                 }
    //                 $imagePath = $value->store('public/images');
    //                 $cek->update([
    //                 'lokasi_berkas' => $imagePath,
    //                ]);
    //             }else{

    //                 $imagePath = $value->store('public/images');
    //                 Upload::create([
    //                 'berkas_id' => $key,
    //                 'lokasi_berkas' => $imagePath,
    //                 'pengajuan_id' =>$this->pengajuan_id,
    //                ]);
    //             }

    //         }

    //         $peng = Pengajuan::where('id',$this->pengajuan_id)->first();
    //         $peng->update(['status_pengajuan' => 'Verifikasi Berkas',]);
    //     }

    //     $this->alert('success', 'Berkas diajukkan untuk diverifikasi', [
    //         'position' => 'center',
    //         'timer' => 3000,
    //         'toast' => true,
    //     ]);
    //     return redirect()->route('riwayat-pemohon');

        // $this->step++;
    // }
    public function submit5()
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
                $cek = Upload::where('berkas_id',$key)->where('pengajuan_id',$this->pengajuan_id)->first();
                if ($cek) {


                    if (Storage::exists($cek->lokasi_berkas)) {
                        Storage::delete($cek->lokasi_berkas);
                    }
                    $imagePath = $value->store('public/berkas/'.$directori);
                    $cek->update([
                    'lokasi_berkas' => $imagePath,
                   ]);
                }else{

                    $imagePath = $value->store('public/berkas/'.$directori);
                    Upload::create([
                    'berkas_id' => $key,
                    'lokasi_berkas' => $imagePath,
                    'pengajuan_id' =>$this->pengajuan_id,

                   ]);

                }


            }

            $peng = Pengajuan::where('id',$this->pengajuan_id)->first();
            $peng->update(['status_pengajuan' => 'Verifikasi Berkas',]);
            Notifikasi::create([
                'user_id' => $peng->pengaju,
                'keterangan' => 'Proyek '.$peng->nama_pro. ' Sedang Di proses Verifikasi Berkas',
                'status' => 'berkas',
                'jadwal' => Carbon::now()
            ]);

            $v = User::where('role','Verifikator Berkas')->get();
            foreach ($v as $key) {
                Notifikasi::create([
                    'user_id' => $key->id,
                    'keterangan' => 'Proyek '.$peng->nama_pro. ' Perlu Dilakukan Verifikasi Berkas',
                    'status' => 'berkas',
                    'jadwal' => Carbon::now()
                ]);
            }
            $directori = strtolower(str_replace(' ', '_', $this->nama_pro));
            Storage::deleteDirectory('public/temp/'.$directori);
        }

        $this->alert('success', 'Berkas diajukkan untuk diverifikasi', [
            'position' => 'center',
            'timer' => 3000,
            'toast' => true,
        ]);
        return redirect()->route('riwayat-pemohon');
    }

        public function store()
    {
        $this->pengajuan_id = $this->pengajuan->id;

        $validatedDate = $this->validate(
            [

                'tipe.*' => 'required',
                'juml_unit.*' => 'required',
                'kategori.*' => 'required'
            ],
            [
                'tipe.*.required' => 'Bidang tipe harus diisi.',
                'juml_unit.*.required' => 'Bidang jumlah unit harus diisi.',
                'kategori.*.required' => 'Bidang kategori harus diisi.',
            ]
        );


        if ($this->tipe) {
            Tipe::query()->whereIn('pengajuan_id', [$this->pengajuan_id])->delete();
            Psu::query()->whereIn('pengajuan_id', [$this->pengajuan_id])->delete();

            if ($this->jln_saluran) {
                # code...
                Psu::create([
                    'pengajuan_id' => $this->pengajuan_id,
                    'psu'=>'jln_saluran',
                    'luas'=> $this->jln_saluran[0],
                ]);
            }
            if ($this->taman) {
            Psu::create([
                'pengajuan_id' => $this->pengajuan_id,
                'psu'=>'taman',
                'luas'=> $this->taman[0],
            ]);
        }

        if ($this->rth) {
            Psu::create([
                'pengajuan_id' => $this->pengajuan_id,
                'psu'=>'rth',
                'luas'=> $this->rth[0],
            ]);
        }
        if ($this->ibadah) {
            Psu::create([
                'pengajuan_id' => $this->pengajuan_id,
                'psu'=>'ibadah',
                'luas'=> $this->ibadah[0],
            ]);
        }
        if ($this->olahraga) {
            Psu::create([
                'pengajuan_id' => $this->pengajuan_id,
                'psu'=>'olahraga',
                'luas'=> $this->olahraga[0],
            ]);
        }
        if ($this->kesehatan) {
            Psu::create([
                'pengajuan_id' => $this->pengajuan_id,
                'psu'=>'kesehatan',
                'luas'=> $this->kesehatan[0],
            ]);
        }

            foreach ($this->keterangan_lain as $key => $value) {
                # code...
                if ($this->keterangan_lain[$key]) {
                Psu::create([
                    'pengajuan_id' => $this->pengajuan_id,
                    'psu'=>'lain',
                    'keterangan'=> $this->keterangan_lain[$key],
                    'luas'=> $this->luas_lain[$key],
                ]);}
            }



            foreach ($this->tipe as $key => $value) {
                $this->bangun = Tipe::updateOrCreate([
                    'pengajuan_id' => $this->pengajuan_id,
                    'tipe' => $this->tipe[$key],
                    'juml_unit' => $this->juml_unit[$key],
                    'kategori' => $this->kategori[$key],
                ]);
            }


        } else {
            foreach ($this->tipe as $key => $value) {
                $this->bangun = Tipe::updateOrCreate([
                    'pengajuan_id' => $this->pengajuan_id,
                    'tipe' => $this->tipe[$key],
                    'juml_unit' => $this->juml_unit[$key],
                    'kategori' => $this->kategori[$key],
                ]);
            }
        Psu::updateOrCreate([
            'pengajuan_id' => $this->pengajuan_id,
            'jln_saluran' => $this->jln_saluran,
            'taman' => $this->taman,
            'rth' => $this->rth,
            'ibadah' => $this->ibadah,
            'olahraga' => $this->olahraga,
            'kesehatan' => $this->kesehatan,
            'lain' => $this->lain,
        ]);

        }


        $this->step++;


    }

    public $preview;

    public function showPreview($id){

        // dd($id);
         $this->preview = $id;
    }


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
