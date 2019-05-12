<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Penyewa;
use Session;
//storage/framework/sessions
//use App\Http\Controllers\Auth\Session;
use Auth;

class LoginPenyewaController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
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
        $this->middleware('guest')->except('logout');
        $this->middleware('guest:admin')->except('logout');
        $this->middleware('guest:penyewa')->except('logout');
    }

    public function showPenyewaLoginForm()
    {
        return view('auth.loginpenyewa');
    }

    public function penyewaLogin(Request $request)
    {
        $this->validate($request, [
            'email'   => 'required|email',
            'kata_sandi' => 'required|min:8'
        ]);

        $email = $request['email'];
        $data = Penyewa::where('email',$email)->first();
        Session::put('email',$data->email);
        // $this->session(['user_agent' => $data]);

        // $this->$request->session()->put('email', $email);

        if (Auth::guard('penyewa')->attempt(['email' => $request->email, 'kata_sandi' => $request->kata_sandi], $request->get('remember'))) {

            return redirect()->intended('/home');
        }
        // $email = $request['email'];
        // $data = Penyewa::where('email',$email)->first();
        // Session::put('email',$data->email);
        return view('home');

    //     public function show(Request $request, $id)
    // {
    //     $value = $request->session()->get('key');
    //     $value = session('key');
    //     $request->session()->put('key', 'value');
    }
}