<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class Profil extends Component
{
    use LivewireAlert;

    public $name;
    public $username;
    public $password;
    public $no_hp;
    public $role;
    public $status_users;
    public $selectedId;
    public $data;

    public function render()
    {
        return view('livewire.profil',[
          ])->extends('layouts.main',[
              'tittle' => 'Profil User',
          ])->section('isi');
    }


    public function resetInput()
    {
        // $this->name  =  null ;
        // $this->username  =  null ;
        // $this->password =  null ;
        // $this->no_hp =  null ;
        // $this->role =  null ;
        // $this->status_users =  null ;
    }

    public function edit($id){
        $user = User::find($id);

        $this->selectedId = $user->id;
        $this->name  =  $user->name ;
        $this->username  =  $user->username ;
        $this->no_hp =  $user->no_hp ;
    }

    protected $rules=
    [
        'name' => 'required',
        'username' => 'required',
        'password' => 'required|min:8',
        'no_hp' => 'required|min:12',
        'password_confirmation' => 'required|same:password',
];

    protected $messages = [
        'name.required' => 'nama tidak boleh kosong',
        'username.required' => 'Username tidak boleh kosong',
        'username.unique' => 'Username sudah digunakan',
        'password.required' => 'password tidak boleh kosong',
        'password.min' => 'password kurang dari 8 karakter',
        'no_hp.required' => 'nomor hp tidak boleh kosong',
        'no_hp.min' => 'nomor hp kurang dari 12 karakter',
        'password_confirmation.same' => 'Password tidak sama',
        'password_confirmation.required' => 'Konfirmasi password tidak boleh kosong',


    ];

    public function update()
    {
        $this->validate([
            'name' => 'required',
            'username' => 'required|unique:users,username,' . Auth::id(),
            'no_hp' => 'required|min:12',
        ]);

        // $user = Auth::user();
        $user = User::where('id',Auth::user()->id)->first();
        $user->update([
            'name' => $this->name,
            'username' => $this->username,
            'no_hp' => $this->no_hp,
        ]);

        $this->dispatchBrowserEvent('update2');
        $this->alert('success', 'Berhasil',[
            'position' => 'center',
            'timer' => 3000,
            'toast' => false,
            'text' => 'Mengubah User',
            'timerProgressBar' => true,
        ]);
        $this->resetInput();
    }

public function resetpsswd($id)
        {

            $Users = User::where('id',$id)->first();
            $this->selectedId  = $Users->id;
            // $this->password = $Users->password;
        }


        public $password_confirmation;

        public function updatepsswrd(){
        $validatedData = $this->validate([
                'password' => 'required|min:8',
                'password_confirmation' => ['required', 'same:password'],
            ]);

            $user = User::find($this->selectedId);
            $user->update([
                'password' => bcrypt($this->password),
            ]);
            $this->dispatchBrowserEvent('update3');
            $this->alert('success', 'Berhasil',[
                'position' => 'center',
                'timer' => 3000,
                'toast' => false,
                'text' => 'Mengubah Password User',
                'timerProgressBar' => true,
            ]);
            $this->resetInput();
            // return redirect()->route('user-management');

        }

}
