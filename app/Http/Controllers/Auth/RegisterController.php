<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\otp;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'max:255'],
            'username' => ['required', 'max:255', 'unique:users'],
            'password' => ['required', 'min:8', 'confirmed'],
            'no_hp' => ['required', 'min:11', 'max:15' ],
        ],[
            'name.required' => 'Nama tidak boleh kosong.',
            'name.max' => 'Nama tidak boleh lebih dari :max karakter.',
            'username.required' => 'Username tidak boleh kosong.',
            'username.max' => 'Username tidak boleh lebih dari :max karakter.',
            'username.unique' => 'Username sudah digunakan.',
            'password.required' => 'Password tidak boleh kosong.',
            'password.min' => 'Password harus minimal 8 karakter.',
            'password.confirmed' => 'Konfirmasi password tidak cocok.',
            'no_hp.required' => 'Nomor HP tidak boleh kosong.',
            'no_hp.min' => 'Nomor HP harus memiliki minimal 11 karakter.',
            'no_hp.max' => 'Nomor HP tidak boleh lebih dari 15 karakter.',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'username' => $data['username'],
            'no_hp' => $data['no_hp'],
            'password' => Hash::make($data['password']),
        ]);
    }



    public function register(Request $request)
    {
        $this->validator($request->all())->validate();

        event(new Registered($user = $this->create($request->all())));
        $otp = mt_rand(1000, 9999);
        // $userid=

        otp::create([
            'user_id'=>$user->id,
            'otp'=>$otp,
            'no_hp'=> $user->no_hp,

        ]);
        $response = Http::post('https://whatsaap-api-perkim.up.railway.app/send-message', [
            'number' => $user->no_hp,
            'message' => 'Silahkan Masukkan nomer otp berikut '.$otp,
        ]);

        // $this->guard()->login($user);

        if ($response = $this->registered($request, $user)) {
            return $response;
        }

        return $request->wantsJson()
                    ? new JsonResponse([], 201)
                    : redirect()->route('otp',$user->id);
    }

    public function indexotp($id)
    {
        $user = User::where('id',$id)->first();
        return view('otp',compact(['user']));
    }

    public function kirimotp(Request $request)
    {
        $otps = otp::where('user_id',$request->id)->first();
        $user = User::where('id',$request->id)->first();


        $this->validate($request,[
            'otp'=>'required'
        ]);

        if ($request->otp == $otps->otp) {
            $user->update([
                'status_users'=>'aktif'
            ]);
            $response = Http::post('https://whatsaap-api-perkim.up.railway.app/send-message', [
                'number' => $user->no_hp,
                'message' => 'Terima Kasih akun anda sudah aktif',
            ]);
            // $this->guard()->login($user);
            return redirect()->route('home')->with('message', 'Akun Anda telah berhasil diaktifkan.');

        }else {
            return back()->with('message', 'Otp yang anda masukkan salah.');
        }


    }

    // protected function registered(Request $request, $user)
    // {
    //     return view('otp');
    // }
}
