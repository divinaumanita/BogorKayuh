<?php

namespace App\Http\Controllers;

use App\Penyewaan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Admin;
use App\Penyewa;
use App\Sepeda;

class AdminController extends Controller
{
  public function index()
   {
   // $konfirmasi = PenyewaanDB::with('penyewa')->get();
        $penyewaans = Penyewaan::with('penyewa')->where('status','=','Belum Kembali')
            ->select('id_penyewaan', 'waktu_mulai','durasi','bayar','status')
            ->get();
        //$ndata = Penyewaan::with('penyewa')->first()->toArray();
        return view ('admin',['penyewaans' => $penyewaans]);
    // $penyewaans = DB::table('penyewaans')
    //    ->select('id_penyewaan', 'waktu_mulai','durasi','bayar','status')
    //    ->get();
    //    return view ('admin',['penyewaans' => $penyewaans]);
   }

    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return Response
     */
    //public function show($id)
    
        //return view('user.profile', ['user' => User::findOrFail($id)]);
    

    public function riwayat()
    {
        $riwayat = Penyewaan::with('penyewa')->where('status','=','lunas')->orwhere('status','=','Dibatalkan')
            ->select('id_penyewaan', 'waktu_mulai','durasi','bayar','status','emailn')
            ->get();
        //$ndata = Penyewaan::with('penyewa')->first()->toArray();
        // return view ('admin',['penyewaans' => $penyewaans]);

        // $riwayat = DB::table('penyewaans')->where('status','=','lunas')
        //     ->select('username', 'id_penyewaan', 'waktu_mulai','durasi','bayar','status')
        //     ->get();        
        return view('riwayatadmin', compact('riwayat'));
    }

    public function delete($b)
    {   
        DB::table('penyewaans')->where('id_penyewaan',$p)->delete();
        return view ('admin');
        
    }

    public function store($p)
    {
        // $emails = Session::get('email');
        // //dd($nama_p);
        // $user = Penyewa::whereid_penyewaan($p)->first();
        // $tuser = $user->toArray();
        // $ndata = Penyewaan::with('penyewa')->first()
        $query= DB:: table('penyewaans')->whereid_penyewaan($p)->first()->update(['status' => 'Lunas']);
        // $query= DB::table('penyewaans')->where('id_penyewaan',$p)->update(['status' => 'Lunas']);
         //->select('username','id_penyewaan','waktu_mulai','durasi','bayar','status');
       // $baru = $query->insert(['username', 'id_penyewaan','waktu_mulai','durasi','bayar','status']);
    return view ('admin');
    
    }

    // $emails = Session::get('email');
    //     //dd($nama_p);
    //     $user = Penyewa::whereemail($emails)->first();
    //     $tuser = $user->toArray();
    //     $ndata = Penyewaan::with('penyewa')->first()
    //     -> update([
    //         'status' => 'Dibatalkan'
    //         //$tuser->save();
    //     ]);
    //     return view('home')->with('message','Penyewaan dibatalkan.');
    //         // return redirect('profil')->with('message','Profil berhasil diedit.');
}

