<?php

namespace App\Http\Controllers;

use App\Sepeda;
use App\Penyewa;
use App\Penyewaan;
use App\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SepedaController extends Controller
{
    public function index()
    {
        //$sepeda = Sepeda::with('penyewa')
        $sepeda = DB::table('sepedas')->orderBy('no_sepeda', 'desc')->get();
    	return view('sepeda',['sepedas' => $sepeda]);
    }

    public function create()
    {
    //
    }

    public function store(Request $request)
    {
        DB::table('sepedas')->insert([
            'no_sepeda' => $request->no_sepeda,
            'jenissepeda' => $request->jenis,
            'jumlahsepeda' => '1',
        ]);
        return redirect('http://localhost/divinProject/multi-auth/public/sepeda');
    }

    public function delete($b)
    {
        DB::table('sepedas')->where('no_sepeda',$b)->delete();
	    return redirect('http://localhost/divinProject/multi-auth/public/sepeda');
    }

    public function edit($b)
    {
        //
    }

    public function update(Request $request)

    {
         //
    }

    public function destroy($id)
    {
        //
    }
}
