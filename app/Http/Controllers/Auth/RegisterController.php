<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Admin;
use App\Penyewa;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
        $this->middleware('guest:admin');
        $this->middleware('guest:penyewa');
    }

    public function showPenyewaRegisterForm()
    {
        return view('auth.register');
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
            'nama' => ['required', 'string', 'max:255'],
            'nama_pengguna' => ['required', 'string', 'max:20', 'unique:penyewas'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'kata_sandi' => ['required', 'string', 'min:8', 'confirmed'],
            'kata_sandi_confirmation' => ['required'],
            'no_telepon' => ['required', 'string', 'max:20'],
            'alamat' => ['required', 'string', 'max:255'],
        ]);
    }

    protected function createPenyewa(Request $request)
    {
        $this->validator($request->all())->validate();
        $penyewa = Penyewa::create([
            'nama' => $request['nama'],
            'nama_pengguna'=> $request['nama_pengguna'],
            'no_telepon'=> $request['no_telepon'],
            'alamat'=> $request['alamat'],
            'email' => $request['email'],
            'kata_sandi' => Hash::make($request['kata_sandi']),
            'kata_sandi_confirmation' => Hash::make($request['kata_sandi_confirmation']),
        ]);
        return redirect()->intended('/home');
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return Penyewa::create([
            'nama' => $data['nama'],
            'nama_pengguna'=> $data['nama_pengguna'],
            'no_telepon'=> $data['no_telepon'],
            'alamat'=> $data['alamat'],
            'email' => $data['email'],
            'kata_sandi' => Hash::make($data['kata_sandi']),
        ]);
    }
}
