<?php

namespace App\Http\Livewire\Berkas;

use App\Models\Berkas;
use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class InputBerkas extends Component
{
    use LivewireAlert;
    public $nama_berkas;
    public $ids;

    public function render()
    {
        return view('livewire.berkas.input-berkas',[
            'data'  => Berkas::all(),
          ])->extends('layouts.main',[
              'tittle' => 'Input Berkas',
          ])->section('isi');
    }

    protected $rules=
    [
        'nama_berkas' => 'required',
    ];

    protected $messages = [
        'nama_berkas.required' => 'Berkas tidak boleh kosong',
    ];

    public function updated($field)
    {
        $this->validateOnly($field, [
        'nama_berkas' => 'required',
        ]);
    }

    public function resetInput()
        {
            $this->nama_berkas  =  null ;
        }

     public function submit()
        {
            $this->validate([
                'nama_berkas' => 'required',
            ]);

            Berkas::create([
                'nama_berkas' => $this->nama_berkas,
            ]);
            $this->dispatchBrowserEvent('simpan');
            $this->alert('success', 'Berhasil',[
            'position' => 'center',
            'timer' => 3000,
            'toast' => false,
            'text' => 'Menambah Berkas',
            'timerProgressBar' => true,
        ]);
            $this->resetInput();
            return redirect()->route('input-berkas');
}

    public function edit($id)
        {

            $Berkas = Berkas::where('id',$id)->first();
            $this->ids  = $Berkas->id;
            $this->nama_berkas  = $Berkas->nama_berkas;
        }

        public function update(){
            $this->validate([
                'nama_berkas' => 'required',
            ]);

            $user = Berkas::find($this->ids);
            $user->update([
                'nama_berkas' => $this->nama_berkas
            ]);
            $this->dispatchBrowserEvent('update2');
            $this->alert('success', 'Berhasil',[
            'position' => 'center',
            'timer' => 3000,
            'toast' => false,
            'text' => 'Mengubah Berkas',
            'timerProgressBar' => true,
        ]);
            $this->resetInput();
            return redirect()->route('input-berkas');

        }
        public function delete($id)
    {
        Berkas::where('id', $id)->delete();

        $this->alert('success', 'Berhasil',[
            'position' => 'center',
            'timer' => 3000,
            'toast' => false,
            'text' => 'Menghapus Berkas',
            'timerProgressBar' => true,
        ]);
        $this->resetInput();
        return redirect()->route('input-berkas');
    }
}
