<?php

namespace App\Http\Livewire\Pemohon;

use Carbon\Carbon;
use App\Models\Psu;
use App\Models\Tipe;
use App\Models\Berkas;
use App\Models\Upload;
use Livewire\Component;
use App\Models\Pengajuan;
use Illuminate\Support\Facades\Auth;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\WithFileUploads;

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
            'tittle' => 'Melihat Draft',
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


        $psus = Psu::where('pengajuan_id',$this->pengajuan->id)->first();
        $this->jln_saluran  = $psus->jln_saluran;
        $this->taman  = $psus->taman;
        $this->rth  = $psus->rth;
        $this->ibadah  = $psus->ibadah;
        $this->olahraga  = $psus->olahraga;
        $this->kesehatan  = $psus->kesehatan;
        $this->lain  = $psus->lain;

        $this->step = 0;
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
        unset($this->inputs[$i]);
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
    protected $rules=
    [
        'dev' => 'required',
        'nama_dev' => 'required',
        'alamat_dev' => 'required',
        'asosiasi' => 'required',
        'no_anggota' => 'required',
        'tel_pemohon1' => 'required|min:12',
        'tel_pemohon2' => 'min:12',
];

    protected $messages = [
        'dev.required' => 'nama developer tidak boleh kosong',
        'nama_dev.required' => 'nama developer tidak boleh kosong',
        'alamat_dev.required' => 'alamat developer tidak boleh kosong',
        'asosiasi.required' => 'asosiasi tidak boleh kosong',
        'no_anggota.required' => 'nomor anggota developer tidak boleh kosong',
        'tel_pemohon1 min'=> 'nomor hp kurang dari 12 karakter',
        'tel_pemohon2 min'=> 'nomor hp kurang dari 12 karakter'
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
                $this->alert('success', 'Berhasil', [
                    'position' => 'center',
                    'timer' => 3000,
                    'toast' => false,
                    'text' => 'Mengubah Pengajuan',
                    'timerProgressBar' => true,
                ]);

            $this->alert('success', 'Berhasil', [
                'position' => 'top-right',
                'timer' => 3000,
                'toast' => true,
            ]);
            $this->pengajuan_id = $this->pengajuan->id;
            $this->step++;
        }

        public function submit3()
        {
            $this->validate([
                'nama_pro' => 'required',
                'alamat_pro' => 'required',
                'pemohon1' => 'required',
                'tel_pemohon1' => 'required|min:12',
                'tel_pemohon2' => 'min:12',
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
            $this->alert('success', 'Data Berhasil Diupdate', [
                'position' => 'top-right',
                'timer' => 3000,
                'toast' => true,
            ]);
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

        public function submit5()
    {

        if ($this->nama_berkas) {

            foreach($this->nama_berkas as $key => $value ){
                $imagePath = $value->store('public/images');
                Upload::create([
                'berkas_id' => $key,
                'lokasi_berkas' => $imagePath,
                'pengajuan_id' =>$this->pengajuan_id,

               ]);
            }

            $peng = Pengajuan::where('id',$this->pengajuan_id)->first();
            $peng->update(['status_pengajuan' => 'Verifikasi Berkas',]);
        }


        return redirect()->route('riwayat-pemohon');

        // $this->step++;
    }

        public function store()
    {
        $this->pengajuan_id = $this->pengajuan->id;

        $validatedDate = $this->validate(
            [
                'tipe.0' => 'required',
                'juml_unit.0' => 'required',
                'kategori.0' => 'required',
                // 'pengajuan_id.0' => 'required',
                'tipe.*' => 'required',
                'juml_unit.*' => 'required',
                'kategori.*' => 'required',
                'jln_saluran' => 'required',
                'taman' => 'required',
                'rth' => 'required',
                'ibadah' => 'required',
                'olahraga' => 'required',
                'kesehatan' => 'required',
                'lain' => 'required',
                // 'pengajuan_id.*' => 'required',
            ],
            [
                'tipe.0.required' => 'tipe field is required',
                'juml_unit.0.required' => 'juml_unit field is required',
                // 'kategori.0.required' => 'kategori field is required',
                'pengajuan_id.0.required' => 'pengajuan_id field is required',
                'tipe.*.required' => 'tipe field is required',
                'juml_unit.*.required' => 'juml_unit field is required',
                'kategori.*.required' => 'kategori field is required',
                // 'pengajuan_id.*.required' => 'pengajuan_id field is required',
            ]
        );


        if ($this->tipe) {
            Tipe::query()->whereIn('pengajuan_id', [$this->pengajuan_id])->delete();

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
        $this->alert('success', 'Data Berhasil Diupdate', [
            'position' => 'top-right',
            'timer' => 3000,
            'toast' => true,
        ]);

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
}
