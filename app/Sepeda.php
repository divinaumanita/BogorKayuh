<?php

namespace App;
use App\Penyewaan;
use Illuminate\Database\Eloquent\Model;

class Sepeda extends Model
{
    protected $table = 'sepedas';

    public function penyewaan(){
    	return $this->belongsTo('App\Penyewaan','id_sewa','id_penyewaan');
    }
}

