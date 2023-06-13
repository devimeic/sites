<?php

namespace App\Http\Livewire\Lapangan;

use DateTime;
use Exception;
use DateTimeZone;
use Carbon\Carbon;
use App\Models\User;
use App\Models\Rapat;
use App\Models\Berkas;
use App\Models\Upload;
use Livewire\Component;
use App\Models\Pengajuan;
use App\Models\Notifikasi;
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
        $this->emit('setDate', '2023-05-04 12:00:00');
        return view('livewire.lapangan.show-berkas',[
            'berkas'=> Berkas::all(),
            'upload' => Upload::where('pengajuan_id', $this->pengajuan->id)->first(),
            'setDate' => function($date) { $this->setDate($date); },
        ])
        ->extends('layouts.main',[
            'tittle' => 'Verifikasi Lapangan',
        ])->section('isi');
    }
    public $selectedDate ;



    public function mount($id)
    {
        $this->pengajuan = Pengajuan::where('id', $id)->first();
        $berks = Upload::where('pengajuan_id',$this->pengajuan->id)->get();
        // $this->catatan[0]= null;
        $this->berkas_id[0]= null;
        $this->status_brks[0]= null;
        foreach( $berks as $key){

        // array_push($this->catatan,$key->catatan);
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
                // $this->alert('success', 'Berhasil', [
                //     'position' => 'top-right',
                //     'timer' => 3000,
                //     'toast' => true,
                // ]);
            // }else {
            //     $this->alert('error', 'berkas kosong', [
            //         'position' => 'top-right',
            //         'timer' => 3000,
            //         'toast' => true,
            //     ]);
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
        Notifikasi::create([
            'user_id' => $this->pengajuan->pengaju,
            'keterangan' => 'Proyek '.$this->pengajuan->nama_pro. ' Perlu Dilakukan Revisi Lapangan',
            'status' => 'lapangan',
            'jadwal' => Carbon::now()
        ]);
        $v = User::where('role','Verifikator Lapangan')->get();
        foreach ($v as $key) {
            Notifikasi::create([
                'user_id' => $key->id,
                'keterangan' => 'Proyek '.$this->pengajuan->nama_pro. ' Sedang Di Revisi Lapangan',
                'status' => 'lapangan',
                'jadwal' => Carbon::now()
            ]);
        }
        $this->alert('success', 'Berkas dalam status Revisi Lapangan', [
            'position' => 'center',
            'timer' => 3000,
            'toast' => true,
        ]);
        return redirect()->route('pengajuan-lapangan');
        }

        public $agenda;
        public $jadwal;

        protected $rules=
    [
        'agenda' => 'required',
        'jadwal' => 'required',
];

    protected $messages = [
        'agenda.required' => 'agenda tidak boleh kosong',
        'jadwal.required' => 'Jadwal tidak boleh kosong',

    ];

        public function setuju()
        {

            $this->validate([
                'selectedDate' => 'required',
                'agenda' => 'required'
            ]);


            $dateString = $this->selectedDate;


            $translations = [
                'Senin' => 'Monday',
                'Selasa' => 'Tuesday',
                'Rabu' => 'Wednesday',
                'Kamis' => 'Thursday',
                'Jumat' => 'Friday',
                'Sabtu' => 'Saturday',
                'Minggu' => 'Sunday',
                'Januari' => 'January',
                'Februari' => 'February',
                'Maret' => 'March',
                'April' => 'April',
                'Mei' => 'May',
                'Juni' => 'June',
                'Juli' => 'July',
                'Agustus' => 'August',
                'September' => 'September',
                'Oktober' => 'October',
                'November' => 'November',
                'Desember' => 'December',
            ];

            [$day, $dayNum, $month, $year, $time] = explode(' ', $dateString);
            $day = $translations[$day];
            $month = $translations[$month];


            $englishDateString = "$day $dayNum $month $year $time";

            $this->jadwal = Carbon::parse($englishDateString)->format('Y-m-d H:i:s');



        $smp = Upload::where('pengajuan_id',$this->pengajuan->id)->get();
        foreach ($smp as $key ) {
        $key->update([
            'status_berkas'=> null,

        ]);
        Rapat::updateOrCreate([
            'agenda'=>$this->agenda,
            'jadwal'=>$this->jadwal,
            'rapat_id'=> $this->pengajuan->id,
        ]);
            }
        $this->pengajuan->update([
            'status_pengajuan' => 'Rekomendasi'
        ]);
        Notifikasi::create([
            'user_id' => $this->pengajuan->pengaju,
            'keterangan' => 'Proyek '.$this->pengajuan->nama_pro. ' Sedang Di Proses Rekomendasi',
            'status' => 'lapangan',
            'jadwal' => Carbon::now()
        ]);
        $v = User::where('role','Pemberi Rekomendasi')->get();
            foreach ($v as $key) {
            Notifikasi::create([
                'user_id' => $key->id,
                'keterangan' => 'Proyek '.$this->pengajuan->nama_pro. ' Perlu Dilakukan Rekomendasi',
                'status' => 'lapangan',
                'jadwal' => Carbon::now()
         ]);
        }
        $this->alert('success', 'Berkas diajukkan untuk proses rekomendasi', [
            'position' => 'center',
            'timer' => 3000,
            'toast' => true,
        ]);
        return redirect()->route('pengajuan-lapangan');
        }
    }
