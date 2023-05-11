<?php

namespace App\Http\Livewire\Lapangan;

use App\Models\Pengajuan;
use App\Models\Rapat;
use Livewire\Component;
use Livewire\WithPagination;

class ListRapat extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $search = '';
    public $rapat;
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

    public function mount($id)
    {
        $this->rapat = Rapat::where('id',$id)->first();
        $this->agenda  = $this->rapat->agenda;
        $this->jadwal  = $this->rapat->jadwal;
    }
}
