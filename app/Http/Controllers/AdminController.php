<?php

namespace App\Http\Controllers;

use App\Models\User;
use Redirect,Response;
use App\Models\Pengajuan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    public function index()
    {
        $tittle = 'Dashboard';
        return view('admin.dashboard', compact('tittle'));
    }

    public function user()
    {
        $data = User::all();
        $tittle = 'User Management';
        return view('admin.user', compact('tittle', 'data'));
    }

    public function store(Request $request)
    {
        //define validation rules
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'username' => 'required|unique:users,username',
            'password' => 'required|min:8',
            'no_hp' => 'required|min:12',
            'role' => 'required',
            'status_users' => 'required',
        ]);

        //check if validation fails
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        //create post
        $post = User::create([
            'name' => $request->name,
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'no_hp' => $request->no_hp,
            'role' => $request->role,
            'status_users' => $request->status_users,
        ]);

        //return response
        return response()->json([
            'success' => true,
            'message' => 'Data Berhasil Disimpan!',
            'data'    => $post
        ]);
    }

    //     // // dd($request->all());
    //     // User::create($request->all());
    //     // return redirect()->route('user-management')->with('success', 'Data di tambahkan');
        // $this->validate($request, [
        //     'name' => 'required',
        //     'username' => 'required|unique:users,username',
        //     'password' => 'required|min:8',
        //     'no_hp' => 'required|min:12',
        //     'role' => 'required',
        //     'status_users' => 'required',
        // ]);
        // $request->merge(['password' => Hash::make($request->input('password'))]);

        // $user = User::updateOrCreate([
        //     'name' => $request->name,
        //     'username' => $request->username,
        //     'password' => Hash::make($request->password),
        //     'no_hp' => $request->no_hp,
        //     'role' => $request->role,
        //     'status_users' => $request->status_users,
        // ]);

        // if ($user) {
        //     return redirect()->route('user-management')->with('success', 'Data berhasil di tambahkan');
        // } else {
        //     return redirect()->route('user-management')->with('failed', 'Data gagal di tambahkan');
        // }

                // $r=$request->validate([
                //     'name' => 'required',
                //     'username' => 'required|unique:users,username',
                //     'password' => 'required|min:8',
                //     'no_hp' => 'required|min:12',
                //     'role' => 'required',
                //     'status_users' => 'required',
                //     ]);
                // $request->merge(['password' => Hash::make($request->input('password'))]);

                //     $custId = $request->cust_id;
                //     User::updateOrCreate(['id' => $custId],[
                //         'name' => $request->name,
                //         'username' => $request->username,
                //         'password' => Hash::make($request->password),
                //         'no_hp' => $request->no_hp,
                //         'role' => $request->role,
                //         'status_users' => $request->status_users,
                //     ]);
                //     if(empty($request->cust_id)){
                //         return redirect()->route('user-management')->with('success','Data berhasil di tambahkan');
                //     }else{
                //         return redirect()->route('user-management')->with('success','Data berhasil di Update');

                //     }
    // }

    public function updateadmin(Request $request, $id)
    {
        // Melakukan validasi data
        // $this->validate($request, [
        //     'name' => 'max:255',
        //     'username' => 'max:11|unique:users',
        //     'password' => 'min:8|',
        //     'no_hp' => 'numeric|max:14',
        // ]);

        // Mengambil data berdasarkan id
        $data = [
            'name' => $request->name,
            'username' => $request->username,
            'password' => bcrypt($request->password),
            'no_hp' => $request->no_hp,
            'role' => $request->role,
            'status_users' => $request->status_users
        ];

        //
        $updateData = User::where('id', $request->id)->update($data);

        if($updateData){
            return redirect()->route('user-management')->with('success', 'Data berhasil di ubah');
        } else {
            return redirect()->route('user-management')->with('failed', 'Data gagal di ubah');
        }
    }

    // public function ubahadmin(Request $request,$id)
    // {
    //     $this->validate($request, [
    //         'name' => 'required',
    //         'username' => 'required|unique:users,username',
    //         // 'password' => 'required|min:8',
    //         'no_hp' => 'required',
    //         'role' => 'required',
    //         'status_users' => 'required',
    //     ]);

    //     $user = User::findOrFail($request->id);

    //     $user->update([
    //         'name' => $request->name,
    //         'username' => $request->username,
    //         // 'password' => Hash::make($request->password),
    //         'no_hp' => $request->no_hp,
    //         'role' => $request->role,
    //         'status_users' => $request->status_users,
    //     ]);

    //     if($user) {
    //         return redirect()->route('user-management')->with('success', 'Data berhasil di ubah');
    //     } else {
    //         return redirect()->route('user-management')->with('failed', 'Data gagal di ubah');
    //     }
        // $data = User::all();
        // $data1 =User::find($id);
        // $tittle = 'User Management';

        // return dd($user);
        // return view('admin.user', compact('data1','data','tittle'));

    // }

    public function hapus($id)
    {
        $data =User::find($id);
        $data->delete();
        return redirect()->route('user-management')->with('success', 'Data berhasil di hapus');
    }

    public function riwayat()
    {
        $tittle = 'Riwayat Pengajuan';
        $pengajuan = Pengajuan::whereNotIn('status_pengajuan', ['Draft'])->get();
        return view('admin.riwayat', compact('tittle','pengajuan'));
    }

}

