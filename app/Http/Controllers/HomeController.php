<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if ( Auth::user()->role == "admin"){
            $tittle = 'Dashboard';
            // return view('admin.dashboard', compact('tittle'));
            return redirect()->route('admin');

        } elseif (Auth::user()->role == "pemohon"){
            $tittle = 'Dashboard';
            return redirect()->route('pemohon');

        } elseif (Auth::user()->role == "verifikator berkas"){
            $tittle = 'Dashboard';
            return redirect()->route('berkas');

        } elseif (Auth::user()->role == "verifikator lapangan"){
            $tittle = 'Dashboard';
            return redirect()->route('lapangan');

        } elseif (Auth::user()->role == "pemberi rekomendasi"){
            $tittle = 'Dashboard';
            return redirect()->route('rekomendasi');

    } else {
        return view('auth.login2');
    }
}

    public function profil()
    {
        $tittle = 'Profil';
        $data = User::where('id',Auth::user()->id)->first();
        return view('profile', compact(['tittle','data']));
    }

    public function editprofil(Request $request){
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'username' => 'required|unique:users,username,'.auth()->id(),
            'no_hp' => 'required|min:12',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()]);
        }

        $user = User::where('id', auth()->id())->first();
        $user->update([
            'name' => $request->name,
            'username' => $request->username,
            'no_hp' => $request->no_hp
        ]);

        if (Auth::user()->role == 'admin') {
            return redirect()->route('profil-admin')->with('success', 'Data berhasil di ubah');

        }elseif (Auth::user()->role == 'pemohon') {
            return redirect()->route('profil-pemohon')->with('success', 'Data berhasil di ubah');

        }elseif (Auth::user()->role == 'verifikasi berkas') {
            return redirect()->route('profil-berkas')->with('success', 'Data berhasil di ubah');

        }elseif (Auth::user()->role == 'verifikasi lapangan') {
            return redirect()->route('profil-lapangan')->with('success', 'Data berhasil di ubah');

        }elseif (Auth::user()->role == 'pemberi rekomendasi') {
            return redirect()->route('profil-rekomendasi')->with('success', 'Data berhasil di ubah');
        }else{
            return redirect()->route('home');
        }


    }

    public function editpassword(Request $request){
        $validator = Validator::make($request->all(), [
            'password' => 'required|min:8',
        ]);

        // if ($validator->fails()) {
        //     return response()->json(['errors' => $validator->errors()]);
        // }

        $user = User::where('id', auth()->id())->first();
        $user->password = Hash::make($request->password);
        $user->save();

        if (Auth::user()->role == 'admin') {
            return redirect()->route('edit-password-admin')->with('success', 'Data berhasil di ubah');

        }elseif (Auth::user()->role == 'pemohon') {
            return redirect()->route('edit-password-pemohon')->with('success', 'Data berhasil di ubah');

        }elseif (Auth::user()->role == 'verifikasi berkas') {
            return redirect()->route('edit-password-berkas')->with('success', 'Data berhasil di ubah');

        }elseif (Auth::user()->role == 'verifikasi lapangan') {
            return redirect()->route('edit-password-lapangan')->with('success', 'Data berhasil di ubah');

        }elseif (Auth::user()->role == 'pemberi rekomendasi') {
            return redirect()->route('edit-password-rekomendasi')->with('success', 'Data berhasil di ubah');
        }else{
            return redirect()->route('home');
        }


    }
}
