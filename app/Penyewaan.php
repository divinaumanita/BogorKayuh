<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Auth\Penyewaan as Authenticatable;

class Penyewaan extends Authenticatable
{
    use Notifiable; 

    protected $fillable = [
        'id_penyewaan', 'waktu_maks', 'waktu_mulai', 'jenis', 'durasi', 'jumlah', 'waktu_now' , 'denda', 'bayar','status', 'username', 
    ];

    protected $primaryKey = 'id_penyewaan';

    public function penyewa()
    {
        return $this->belongsTo('App\Penyewa');
    }
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    // protected $hidden = [
    //     'kata_sandi', 'remember_token',
    // ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
      */
    // protected $casts = [
    //     'email_verified_at' => 'datetime',
    //];
}