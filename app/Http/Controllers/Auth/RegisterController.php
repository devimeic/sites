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
            'name' => ['required', 'string', 'max:255'],
            'username' => ['required', 'string', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'no_hp' => ['required',  ],
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
        $response = Http::post('http://localhost:8001/send-message', [
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
            $response = Http::post('http://localhost:8001/send-message', [
                'number' => $user->no_hp,
                'message' => 'Terima Kasih akun anda sudah aktif',
            ]);
            // $this->guard()->login($user);
            return redirect()->route('home');

        }else {
            return back()->with('message', 'Otp yang anda masukkan salah.');
        }


    }

    // protected function registered(Request $request, $user)
    // {
    //     return view('otp');
    // }
}
