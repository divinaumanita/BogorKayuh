<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Admin;
use App\Penyewaan;
use App\Penyewa;
use Auth;

class LoginAdminController extends Controller
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

    public function showAdminLoginForm()
    {
        return view('auth.loginadmin');
    }

    public function adminLogin(Request $request)
    {
        $this->validate($request, [
            'kata_sandi' => 'required|min:6'
        ]);

//         public function index()
//    {
//    // $konfirmasi = PenyewaanDB::with('penyewa')->get();
        $penyewaans = Penyewaan::with('penyewa')->where('status','!=','lunas')
            ->select('id_penyewaan', 'waktu_mulai','durasi','bayar','status')
            ->get();
        //$ndata = Penyewaan::with('penyewa')->first()->toArray();
        // return view ('admin',['penyewaans' => $penyewaans]);
        return redirect('/admin')->with(['penyewaans' => $penyewaans]);
//    }

//         return view('admin');
    }
}