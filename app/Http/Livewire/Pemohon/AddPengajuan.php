<?php

namespace App\Http\Livewire\Pemohon;

use Carbon\Carbon;
use App\Models\Berkas;
use App\Models\Notifikasi;
use Livewire\Component;
use App\Models\Pengajuan;
use App\Models\Psu;
use App\Models\Tipe;
use App\Models\Upload;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;



class AddPengajuan extends Component
{

    use LivewireAlert;
    use WithFileUploads;

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
    public $slug;
    public $tanggal;

    public function render()
    {

        return view('livewire.pemohon.pengajuan',[
            'berkas'  => Berkas::all(),
          ])->extends('layouts.main',[
              'tittle' => 'Pengajuan Berkas',
          ])->section('isi');

    }

    public $updateMode = false;
    public $inputs = [];
    public $i = 1;
    public $l = 1;

    public function add($i)
    {
        $i = $i + 1;
        $this->i = $i;
        array_push($this->inputs ,$i);
    }

    public function remove($i)
    {
        // unset($this->inputs[$i]);
        unset($this->tipe[$i]);
    }
    public function removee($i)
    {
        unset($this->inputs[$i]);
        // unset($this->tipe[$i]);
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


    public $step;

    public $pengajuans;
    public $pengajuan_id;
    private $stepActions = [
        'submit2',
        'submit3',
        'store',
        'submit5',
    ];

    public function mount()
    {
        $this->step = 0;
    }
    public function minus()
    {
        $this->step--;
    }
    public function plus()
    {
        $this->step++;
    }
    public function jump($to)
    {
        $this->step = $to;
    }

    public function submit()
    {

        $action = $this->stepActions[$this->step];

        $this->$action();
    }

    protected $rules=
    [
        'dev' => 'required',
        'nama_dev' => 'required',
        'alamat_dev' => 'required',
        'asosiasi' => 'required',
        'no_anggota' => 'required',
        'tel_pemohon1' => 'required|min:11|max:15',
];

    protected $messages = [
        'dev.required' => 'nama developer tidak boleh kosong',
        'nama_dev.required' => 'nama developer tidak boleh kosong',
        'alamat_dev.required' => 'alamat developer tidak boleh kosong',
        'asosiasi.required' => 'asosiasi tidak boleh kosong',
        'no_anggota.required' => 'nomor anggota developer tidak boleh kosong',
        'tel_pemohon1.min'=> 'nomor hp kurang dari 11 karakter',
        'tel_pemohon2.min'=> 'nomor hp kurang dari 11 karakter',
        'tel_pemohon1.max'=> 'nomor hp terlalu panjang',
        'tel_pemohon2.max'=> 'nomor hp terlalu panjang'
    ];

    public function submit2()
    {
        $this->validate([
            'nama_dev' => 'required',
            'alamat_dev' => 'required',
            'asosiasi' => 'required',
            'no_anggota' => 'required',
        ]);

        if ($this->pengajuans) {
            $this->pengajuans = tap($this->pengajuans)->update(
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
            } else {
                $this->pengajuans = Pengajuan::create(
                    [
                        'dev' => $this->dev,
                        'nama_dev' => $this->nama_dev,
                        'no_hp' => Auth::user()->no_hp,
                        'pengaju' => Auth::user()->id,
                        'date' => Carbon::now()->format('d-m-Y'),
                        'tahun' => Carbon::now()->year,
                        'alamat_dev' => $this->alamat_dev,
                        'asosiasi' => $this->asosiasi,
                        'no_anggota' => $this->no_anggota,
                        'status_pengajuan' => 'Draft',
                        'tanggal' => Carbon::now(),


                    ]
                );
                // $this->alert('success', 'Berhasil', [
                //     'position' => 'top-right',
                //     'timer' => 3000,
                //     'toast' => true,
                // ]);
            }
            $this->pengajuan_id = $this->pengajuans->id;
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
        $this->pengajuans = tap($this->pengajuans)->update([
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
        $this->pengajuan_id = $this->pengajuans->id;
        $this->step++;
    }


    public $kategori, $tipe, $juml_unit, $jln_saluran, $taman, $rth,
    $ibadah, $olahraga, $kesehatan, $lain ;

    public function submit4()
    {
        $this->pengajuan_id = $this->pengajuans->id;

        // $this->store();
        $this->step++;
    }

    public $nama_berkas = [];
    public $berkas_id = [];




    public function submit5()
    {

        if ($this->nama_berkas) {

            $directori = strtolower(str_replace(' ', '_', $this->nama_pro));

            if (!Storage::exists($directori)) {
                Storage::makeDirectory($directori, 0777, true, true);
            }


            foreach($this->nama_berkas as $key => $value ){

                $imagePath = $value->store('public/berkas/'.$directori);
                Upload::create([
                'berkas_id' => $key,
                'lokasi_berkas' => $imagePath,
                'pengajuan_id' =>$this->pengajuan_id,

               ]);
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

        // $this->step++;
    }

    public $bangun;
    public $keterangan_lain = [];
    public $luas_lain = [];
    public $inputs_lain =[];

    public function store()
    {
        $this->pengajuan_id = $this->pengajuans->id;

        $this->validate(
            [

                'tipe.*' => 'required',
                'juml_unit.*' => 'required',
                'kategori.*' => 'required',
                'keterangan_lain.*' => 'required',
                'luas_lain.*' => 'required',

            ],
            [

                'tipe.*.required' => 'tipe tidak boleh kosong',
                'juml_unit.*.required' => 'jumlah unit tidak boleh kosong',
                'kategori.*.required' => 'kategori tidak boleh kosong',
                'keterangan_lain.*.required' => 'tidak boleh kosong',
                'luas_lain.*.required' => 'tidak boleh kosong',

            ]
        );
        $dell = Tipe::query()->where('pengajuan_id', $this->pengajuan_id)->get();
        // Psu::query()->whereIn('pengajuan_id', [$this->pengajuan_id])->delete();
        $del = Psu::where('pengajuan_id', $this->pengajuan_id )->get();


        if ($this->tipe) {

            foreach ($del as $k)
            {
                $k->delete();
                }
            foreach ($dell as $k)
            {
                $k->delete();
                }

            // Psu::updateOrCreate([
            //     'pengajuan_id' => $this->pengajuan_id,
            //     'jln_saluran' => $this->jln_saluran,
            //     'taman' => $this->taman,
            //     'rth' => $this->rth,
            //     'ibadah' => $this->ibadah,
            //     'olahraga' => $this->olahraga,
            //     'kesehatan' => $this->kesehatan,
            //     'lain' => $this->lain,
            //  ]);

            if ($this->jln_saluran) {
                # code...
                Psu::create([
                    'pengajuan_id' => $this->pengajuan_id,
                    'psu'=>'jln_saluran',
                    'luas'=> $this->jln_saluran,
                ]);
            }
                if ($this->taman) {
                Psu::create([
                    'pengajuan_id' => $this->pengajuan_id,
                    'psu'=>'taman',
                    'luas'=> $this->taman,
                ]);
            }

        if ($this->rth) {
            Psu::create([
                'pengajuan_id' => $this->pengajuan_id,
                'psu'=>'rth',
                'luas'=> $this->rth,
            ]);
        }
        if ($this->ibadah) {
            Psu::create([
                'pengajuan_id' => $this->pengajuan_id,
                'psu'=>'ibadah',
                'luas'=> $this->ibadah,
            ]);
        }
        if ($this->olahraga) {
            Psu::create([
                'pengajuan_id' => $this->pengajuan_id,
                'psu'=>'olahraga',
                'luas'=> $this->olahraga,
            ]);
        }
        if ($this->kesehatan) {
            Psu::create([
                'pengajuan_id' => $this->pengajuan_id,
                'psu'=>'kesehatan',
                'luas'=> $this->kesehatan,
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

 }

