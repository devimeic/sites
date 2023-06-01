<?php

namespace App\Http\Livewire\Lapangan;

use App\Models\Pengajuan;
use App\Models\Rapat;
use Illuminate\Support\Carbon;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Livewire\WithPagination;

class ListRapat extends Component
{
    use WithPagination;
    use LivewireAlert;
    protected $paginationTheme = 'bootstrap';
    public $search = '';
    public $rapats;
    public $selectedDate;
    public $agenda;
    public $jadwal;

    public function render()
    {
        return view('livewire.lapangan.list-rapat',[
            'rapat' => Rapat::where(function($query) {
                    $query->where('agenda', 'like', '%'.$this->search.'%')
                    ->orWhere('jadwal', 'like', '%'.$this->search.'%');
                })
                ->orderBy('created_at', 'desc')
                ->paginate(10),
                // 'pengajuan' => Pengajuan::where('pengajuan_id', $this->pengajuan->id)->first(),
          ])->extends('layouts.main',[
              'tittle' => 'Daftar Rapat',
          ])->section('isi');
    }



    public function edit($id)
    {
        $this->rapats = Rapat::where('id',$id)->first();
        $this->agenda  = $this->rapats->agenda;

        $this->selectedDate  = $this->rapats->jadwal;
        }

        public function setuju()
        {
            // $this->validate([
            //     'selectedDate' => 'required',
            //     'agenda' => 'required'
            // ]);



            if ($this->rapats->jadwal == $this->selectedDate) {
                $this->rapats->update([
                    'agenda'=> $this->agenda,
                    'jadwal'=> $this->selectedDate,
                ]);

            }else{


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

            $this->rapats->update([
                'agenda'=> $this->agenda,
                'jadwal'=> $this->jadwal,
            ]);
            }

            $this->alert('success', 'Jadwal berhasil di ubah', [
                'position' => 'center',
                'timer' => 3000,
                'toast' => true,
            ]);
            return redirect()->route('rapat');
            }

            public function delete($id)
    {
            Rapat::where('id', $id)->delete();

            $this->alert('success', 'Berhasil',[
                'position' => 'center',
                'timer' => 3000,
                'toast' => false,
                'text' => 'Menghapus Jadwal Rapat',
                'timerProgressBar' => true,
            ]);
            return redirect()->route('rapat');
    }


}
