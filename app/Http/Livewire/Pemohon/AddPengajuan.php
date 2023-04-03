<?php

namespace App\Http\Livewire\Pemohon;

use Carbon\Carbon;
use App\Models\Berkas;
use Livewire\Component;
use App\Models\Pengajuan;
use App\Models\Psu;
use App\Models\Tipe;
use Illuminate\Support\Facades\Auth;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class AddPengajuan extends Component
{

    use LivewireAlert;

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
        'tel_pemohon1' => 'required|min:12',
];

    protected $messages = [
        'dev.required' => 'nama developer tidak boleh kosong',
        'nama_dev.required' => 'nama developer tidak boleh kosong',
        'alamat_dev.required' => 'alamat developer tidak boleh kosong',
        'asosiasi.required' => 'asosiasi tidak boleh kosong',
        'no_anggota.required' => 'nomor anggota developer tidak boleh kosong',
        'tel_pemohon1 min'=> 'nomor hp kurang dari 12 karakter'
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
                $this->alert('success', 'Berhasil', [
                    'position' => 'center',
                    'timer' => 3000,
                    'toast' => false,
                    'text' => 'Mengubah Pengajuan',
                    'timerProgressBar' => true,
                ]);
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
                $this->alert('success', 'Berhasil', [
                    'position' => 'top-right',
                    'timer' => 3000,
                    'toast' => true,
                ]);
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
            'tel_pemohon1' => 'required|min:12',

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
        $this->alert('success', 'Data Berhasil Diupdate', [
            'position' => 'top-right',
            'timer' => 3000,
            'toast' => true,
        ]);
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
        //
        $this->step++;
    }

    public $bangun;

    public function store()
    {
        $this->pengajuan_id = $this->pengajuans->id;

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

 }

