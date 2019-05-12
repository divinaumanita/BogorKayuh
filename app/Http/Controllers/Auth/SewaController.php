<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\User;
use App\Admin;
use App\Penyewa;
use App\Penyewaan;
use Illuminate\Database\Eloquent\Collection;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;
//use Illuminate\Validation\Validator;
//::validateTime;
use View;

class SewaController extends Controller
{   

    public function showPenyewaanForm()
    {
        return view('penyewa');
    }

    public function bams()
    {
        return view('bams');
    }
    // public function postView()
    // {
    //     return Redirect::route('view2', ['name' => Input::get('name')])
    // }

    public function show()
    {
        $emails = Session::get('email');
        //dd($emails);
        $user = Penyewa::whereemail($emails)->first();
        //dd($user);
        $tuser = $user->toArray();
        //dd($tuser);
        // $penyewaan = Penyewaan->findOrFail(1);
        // $userName = $penyewaan->email;
        $ndata = Penyewaan::with('penyewa')->first()->toArray();
        // $ntdata = $ndata->toArray();
        // $ntdatas = array_collapse($ndata);
        //dd($ndata);
        $id_penyewaan = $ndata['id_penyewaan'];
        //dd($id_penyewaan);
        //$id_penyewaan = DB::table('penyewas')->where('nama_pengguna', 'divinaumanita' )->value('id_penyewaan');
        // $value = session('key');
        $waktu_maks = $ndata['waktu_maks'];
        $waktu_now = $ndata['waktu_now'];
        //$waktu_maks = DB::table('penyewas')->where('nama_pengguna', 'divinaumanita' )->value('waktu_maks');
        // $value = session('key');
        $durasi = $ndata['durasi'];
        $bayar = $ndata['bayar'];
        //$durasi = DB::table('penyewas')->where('nama_pengguna', 'divinaumanita' )->value('durasi');
        // $value = session('key');
        $twaktu = 'Waktu maksimal pengembalian: '.$waktu_maks;
        $mbayar = 'Kode Pembayaran: '.$id_penyewaan;
        // dd($mbayar);
        $mbiaya = 'Total biaya penyewaan: Rp. '.$bayar;
        $waktumaksim = strtotime($waktu_maks);
        //$waktumaksimu = Carbon::parse($this->waktumaksim);
        //new \DateTime($waktumaksi)->timezone('Asia/Jakarta');
        //dd($waktumaksim);
        $sekarang = Carbon::now(new \DateTimeZone('Asia/Jakarta'))->format('G:i:s');
        $sekarangu = strtotime($sekarang);
        //$sekarangu = Carbon::parse($this->sekarang);
        //dd($sekarang);
        $tanggal = Carbon::now(new \DateTimeZone('Asia/Jakarta'))->format('d-m-Y');
        $selisihs = date('G:i:s', ($waktumaksim-$sekarangu));
        $tanggals = date($tanggal);
        $timeLeft = date($tanggals.' '.$selisihs);
        $timeLefts = Carbon::parse($timeLeft);
        $timeLefts->diffForHumans();
        // dd($timeLefts);
        //->where('waktu_maks', '>', Carbon::now(new \DateTimeZone('Asia/Jakarta')))->first()->waktu_maks->toDateTimeString(); //limit(2)->get();
        //$waktumaksim = new \DateTime($waktumaksi);
        //$nowww = new \DateTime(Carbon::now()->toDateTimeString());
        $time = [
            // 'tahuns'   => $timeLeft->format('%y'), 
            // 'bulans'  => $timeLeft->format('%m'), 
            // 'haris'    => $timeLeft->format('%d'),
            'jams' => $timeLefts->format('G'),
            'menits' => $timeLefts->format('i'),
            'detiks' => $timeLefts->format('s'),
        ];
        $times = implode(':', $time);
        // $timess = 'Waktu tersisa adalah '.$times;
        //$times = array_collapse($time);
        //dd($timess);
        return view('sewa.notifikasisewa', ['mbayar'=> $mbayar, 'mbiaya' => $mbiaya, 'twaktu' => $twaktu, 'times' => $times]); 
        //'sisa'=>$sisa]);
    }

    public function cancel()
    {
        $emails = Session::get('email');
        //dd($nama_p);
        $user = Penyewa::whereemail($emails)->first();
        $tuser = $user->toArray();
        $ndata = Penyewaan::with('penyewa')->first()
        //$ntdata = $ndata->toArray()
        // //dd($ntdata);
        // $ntdatas = array_collapse($ntdata);
        // $tuser = $user->toArray();
        // // $penyewaan = Penyewaan->findOrFail(1);
        // // $userName = $penyewaan->email;
        // $batal = Penyewaan::with('penyewa')->delete();
        // // dd($batal);
        // //category::where('name', $name)->delete();
        // return view('penyewa');

        // protected function updateProfil(Request $request)
        // {
        //     $emails = Session::get('email');
        //     //dd($nama_p);
        //     //$penyewa = Penyewa::find($emails)->get();
        //     $penyewa = Penyewa::whereemail($emails)->first()
            // -> toArray();
            // $tuser = $penyewa-
        -> update([
            'status' => 'Dibatalkan'
            //$tuser->save();
        ]);
        return view('home')->with('message','Penyewaan dibatalkan.');
            // return redirect('profil')->with('message','Profil berhasil diedit.');

    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'id_penyewaan' => ['required', 'string', 'max:191', 'unique:penyewaans'],
            'durasi' => ['required', 'integer', 'between:1,9'],
            'waktu_mulai' => ['required'],
            //'date_format:H:i:s'
            'waktu_maks' => ['required'],
            'waktu_now' => ['required'],
            'jumlah' => ['required', 'integer', 'between:1,3'],
            'jenis' => ['required', 'string', 'max:255'],
            'bayar' => ['required','integer'],
            'status' => ['required','string'],
        ]);
    }

    public function createPenyewaan(Request $request)
    {
        $characters = 'abcdefghijklmnopqrstuvwxyz';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i =0; $i < 3; $i++) {
            $randomString .= $characters[rand(0, $charactersLength-1)];
        }
        $ldate = date('Y-m-d H:i:s');
        $id_penyewaan = ($randomString.strtotime($ldate));
        $durasi = $request['durasi'];
        $waktu_mulai= $request['waktu_mulai'];
        $waktum = (date($waktu_mulai));
        //dd($waktum);
        $status = 'Belum kembali';
        $waktu_maks = date('G:i:s', (strtotime($waktum)+($durasi*3600)));
        //dd($waktu_maks);
        $waktu_now = Carbon::now(new \DateTimeZone('Asia/Jakarta'));
        $waktuma = strtotime($waktu_maks);
        $waktuno = strtotime($waktu_now);
        $selisih = $waktuma - $waktuno;
        //dd($selisih);
        $denda = 0;
        if ($waktu_now > $waktu_mulai) {
            if ($selisih <= 3600) {
                $denda = 5000;
                }
            elseif (3600 < $selisih and $selisih < 7200) {
                $denda = 10000;
                }
            else {
                $denda = 15000;
                }
        }
        $jumlah = $request['jumlah'];
        $bayar = ((($durasi*15000)+$denda)*$jumlah);
        //$this->validator($request->all())->validate();
        $penyewaan = Penyewaan::create([
            'id_penyewaan' => $id_penyewaan,
            'durasi' => $request['durasi'],
            'waktu_mulai'=> $request['waktu_mulai'],
            'waktu_maks'=> $waktu_maks,
            'jumlah'=> $request['jumlah'],
            'jenis' => $request['jenis'],
            'waktu_now' => $waktu_now,
            'bayar' => $bayar,
            'status' => $status,
        ]);
        //dd($penyewaan);
        //Redirect::to
        return redirect()->route('notifikasisewa');
        //return view('sewa/notifikasisewa');
    }

    protected function create(array $data)
    {
        return Penyewaan::create([
            'id_penyewaan' => $data['id_penyewaan'],
            'waktu_maks'=> $data['waktu_maks'],
            'waktu_mulai'=> $data['waktu_mulai'],
            'waktu_now'=> $data['waktu_now'],
            'jumlah' => $data['jumlah'],
            'durasi' => $data['durasi'],
            'jenis' => $data['jenis'],
            'bayar' => $data['bayar'],
            'status' => $data['status'],
        ]);
    }

    public function riwayat()
    {
        $emails = Session::get('email');
        //dd($nama_p);
        $user = Penyewa::whereemail($emails)->first();
        $tuser = $user->toArray();
        // $penyewaan = Penyewaan->findOrFail(1);
        // $userName = $penyewaan->email;
        // dd($batal);
        //category::where('name', $name)->delete();
        $riw = Penyewaan::with('penyewa')->get();
        $riway = $riw->toArray();
        //dd($ntdata);
        $riwayats = array_collapse($riway);
        // foreach($riwayats as $key => $value){
        //     echo $key . ": " . $value;
        //    };
        //dd($ntdatas);
        // return view('sewa.riwayat', ['riwayats'=> $riwayats]);

        // $emails = Session::get('email');
        // //dd($nama_p);
        // $user = Penyewa::whereemail($emails)->first();
        // $tuser = $user->toArray();
        $created_at = $riwayats['created_at'];
        //dd($nama_pengguna);
        $tanggal = 'Tanggal penyewaan: '.$created_at;
        $jenis = $riwayats['jenis'];
        $jeniss = ' '.$jenis;
        $jumlah = $riwayats['jumlah'];
        $jumlahs = 'Jumlah sepeda: '.$jumlah;
        $bayar = $riwayats['bayar'];
        //dd($alamat);
        $bayars = 'Biaya penyewaan: '.$bayar;
        $status = $riwayats['status'];
        $statuss = ' '.$status;
        //return view('auth.profil')->with($tuser);
        return view('sewa.riwayat', ['tanggal' => $tanggal, 'jeniss' => $jeniss, 'jumlahs' => $jumlahs, 'bayars'=> $bayars, 'statuss'=> $statuss]);

    }

}