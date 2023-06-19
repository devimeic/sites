<?php

namespace App\Http\Livewire\Admin;

use Carbon\Carbon;
use App\Models\User;
use Livewire\Component;
use App\Models\Pengajuan;
use App\Models\Notifikasi;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Auth;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class UserManagement extends Component
{
    use LivewireAlert;
    use WithPagination;

    public $loading = false;

    public $name;
    public $username;
    public $password;
    public $no_hp;
    public $role;
    public $status_users;
    public $ids;
    protected $paginationTheme = 'bootstrap';
    public $search = '';


    public function render()
    {
        return view('livewire.admin.user-management',[
          'data'  => User::search('name', $this->search)->whereLike('role',$this->search)->whereLike('username',$this->search)->whereLike('status_users',$this->search)
          ->orderBy('created_at', 'desc')->paginate(10),
        ])->extends('layouts.main',[
            'tittle' => 'User Management',
        ])->section('isi');
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }
    protected $rules=
    [
        'name' => 'required',
        'username' => 'required',
        'password' => 'required|min:8',
        'no_hp' => 'required|min:11|max:15',
        'role' => 'required',
        'status_users' => 'required'
];

    protected $messages = [
        'name.required' => 'nama tidak boleh kosong',
        'username.required' => 'Username tidak boleh kosong',
        'username.unique' => 'Username sudah digunakan',
        'password.required' => 'password tidak boleh kosong',
        'password.min' => 'password kurang dari 8 karakter',
        'no_hp.required' => 'nomor hp tidak boleh kosong',
        'no_hp.min' => 'nomor hp kurang dari 11 karakter',
        'no_hp.max' => 'nomor hp terlalu panjang',
        'role.required' => 'role belum dipilih'

    ];

    public function updated($field)
    {
        $this->validateOnly($field, [
        'name' => 'required',
        'username' => 'required',
        'password' => 'required|min:8',
        'no_hp' => 'required|min:11|max:15',
        'role' => 'required',
        'status_users' => 'required'
        ]);
    }


    public function submit()
    {
        $this->validate([
            'name' => 'required',
            'username' => 'required|unique:users,username',
            'password' => 'required|min:8',
            'no_hp' => 'required|min:11|max:15',
            'role' => 'required',
            'status_users' => 'required'
        ]);
        $this->loading = true;
            User::create([
                'name' => $this->name,
                'username' => $this->username,
                'password' => bcrypt($this->password),
                'no_hp' => $this->no_hp,
                'role' => $this->role,
                'status_users' => $this->status_users
            ]);
            $v = User::where('id',Auth::user()->id)->get();
            foreach ($v as $key) {
                Notifikasi::create([
                    'user_id' => $key->id,
                    'keterangan' => 'Berhasil menambah user baru',
                    'status' => 'admin',
                    'jadwal' => Carbon::now()
                ]);
            }
           $this->dispatchBrowserEvent('simpan');
           $this->alert('success', 'Berhasil',[
            'position' => 'center',
            'timer' => 3000,
            'toast' => false,
            'text' => 'Menambah User',
            'timerProgressBar' => true,
        ]);
        $this->loading = false;
            $this->resetInput();
            // return redirect()->route('user-management');

            // $user = User::find($this->id);
            // $user->update([
            //     'name' => $this->name,
            //     'username' => $this->username,
            //     'password' => bcrypt($this->password),
            //     'no_hp' => $this->no_hp,
            //     'role' => $this->role,
            //     'status_users' => $this->status_users
            // ]);
            // session()->flash('message', 'Users Update Successfully.');
            // return redirect()->route('user-management');
        }

        public function edit($id)
        {

            $Users = User::where('id',$id)->first();
            $this->ids  = $Users->id;
            $this->name  = $Users->name;
            $this->username  = $Users->username;
            $this->password = $Users->password;
            $this->no_hp = $Users->no_hp;
            $this->role = $Users->role;
            $this->status_users = $Users->status_users;
        }

        public function resetInput()
        {
            $this->name  =  null ;
            $this->username  =  null ;
            $this->password =  null ;
            $this->no_hp =  null ;
            $this->role =  null ;
            $this->status_users =  null ;
        }

        public function update(){
            $this->validate([
                'name' => 'required',
                'username' => 'required|unique:users,username,'.$this->ids,
                'password' => 'required|min:8',
                'no_hp' => 'required|min:12',
                'role' => 'required',
                'status_users' => 'required'
            ]);

            $user = User::find($this->ids);
            $user->update([
                'name' => $this->name,
                'username' => $this->username,
                'password' => bcrypt($this->password),
                'no_hp' => $this->no_hp,
                'role' => $this->role,
                'status_users' => $this->status_users
            ]);

            $this->dispatchBrowserEvent('update2');
            $this->alert('success', 'Berhasil',[
                'position' => 'center',
                'timer' => 3000,
                'toast' => false,
                'text' => 'Mengubah User',
                'timerProgressBar' => true,
            ]);
            $v = User::where('id',Auth::user()->id)->get();
            foreach ($v as $key) {
                Notifikasi::create([
                    'user_id' => $key->id,
                    'keterangan' => 'Berhasil mengubah user baru',
                    'status' => 'admin',
                    'jadwal' => Carbon::now()
                ]);
            }
            $this->resetInput();
            return redirect()->route('user-management');

        }



        public function resetpsswd($id)
        {

            $Users = User::where('id',$id)->first();
            $this->ids  = $Users->id;
            // $this->password = $Users->password;
        }


        public $password_confirmation;

        public function updatepsswrd(){
        $validatedData = $this->validate([
                'password' => 'required|min:8',
                'password_confirmation' => ['required', 'same:password'],
            ]);

            $user = User::find($this->ids);
            $user->update([
                'password' => bcrypt($this->password),
            ]);
            $this->dispatchBrowserEvent('update3');
            $this->alert('success', 'Berhasil',[
                'position' => 'center',
                'timer' => 3000,
                'toast' => false,
                'text' => 'Mengubah User',
                'timerProgressBar' => true,
            ]);
            $v = User::where('id',Auth::user()->id)->get();
            foreach ($v as $key) {
                Notifikasi::create([
                    'user_id' => $key->id,
                    'keterangan' => 'Berhasil mengubah password user',
                    'status' => 'admin',
                    'jadwal' => Carbon::now()
                ]);
            }
            $this->resetInput();
            return redirect()->route('user-management');

        }



}
