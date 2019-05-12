<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Controllers\PenyewaController;
use App\Penyewa;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;
use Auth;
use Session;
use App\User;
use App\Admin;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
//use View;

class ProfilController extends Controller
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

    // use AuthenticatesUsers;

    // /**
    //  * Where to redirect users after login.
    //  *
    //  * @var string
    //  */
    // protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function editProfil()
    {
        return view('auth.editprofil');
    }

    public function showProfil()
    {
        //$nama_p = $request->session()->get('email');
        $emails = Session::get('email');
        //dd($nama_p);
        $user = Penyewa::whereemail($emails)->first();
        $tuser = $user->toArray();
        // $user = DB::table('penyewas')->where('divinaumanita', $nama_pengguna)->pluck('nama_pengguna', 'nama', 'no_telepon','alamat');
        //dd($tuser);
        //$nama_pengguna = 'nama_pengguna';
        // $namap = $user->map(function($item, $user) {
        //     return $user['nama_pengguna'];
        //   });
        // dd($namap);
        $nama_pengguna = $tuser['nama_pengguna'];
        //dd($nama_pengguna);
        $namap = 'Nama pengguna: '.$nama_pengguna;
        $nama = $tuser['nama'];
        $tnama = 'Nama lengkap: '.$nama;
        $no_telepon = $tuser['no_telepon'];
        $notelp = 'Nomor telepon: '.$no_telepon;
        $alamat = $tuser['alamat'];
        //dd($alamat);
        $talamat = 'Alamat: '.$alamat;
        //return view('auth.profil')->with($tuser);
        return view('auth.profil', ['namap' => $namap, 'tnama' => $tnama, 'notelp' => $notelp, 'talamat'=> $talamat]);
        // return view('auth.profil', compact([$namap, $tnama, $notelp, $talamat]));
        //->with('menu', $menu, $gallery_test, $item_options, $category));
        // return View::make('public/items', compact('menus_child', 'gallery_test', 'item_options', 'category'))->with('menu', $menu, $gallery_test, $item_options, $category);
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'nama' => ['required', 'string', 'max:255'],
            'nama_pengguna' => ['required', 'string', 'max:20', 'unique:penyewas'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'no_telepon' => ['required', 'string', 'max:20'],
            'alamat' => ['required', 'string', 'max:255'],
        ]);
    }

    protected function updateProfil(Request $request)
    {
        $emails = Session::get('email');
        //dd($nama_p);
        //$penyewa = Penyewa::find($emails)->get();
        $penyewa = Penyewa::whereemail($emails)->first()
        // -> toArray();
        // $tuser = $penyewa-
        -> update([
        'nama' => $request['nama'],
        'nama_pengguna' => $request['nama_pengguna'],
        'email' => $request['email'],
        'no_telepon' => $request['no_telepon'],
        'alamat' => $request['alamat'],
        //$tuser->save();
    ]);
        return redirect('profil')->with('message','Profil berhasil diedit.');
    }

    protected function create(array $data)
    {
        return Penyewa::create([
            'nama' => $data['nama'],
            'nama_pengguna'=> $data['nama_pengguna'],
            'no_telepon'=> $data['no_telepon'],
            'alamat'=> $data['alamat'],
            'email' => $data['email'],
        ]);
    }
    
    public function updatePenyewaPassword()
    {

    }

}