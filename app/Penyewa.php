<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Auth\Penyewa as Authenticatable;

class Penyewa extends Authenticatable
{
    use Notifiable;

    protected $guard = 'penyewa';

    protected $fillable = [
        'nama', 'nama_pengguna', 'no_telepon', 'alamat', 'email', 'kata_sandi',
    ];

    protected $primaryKey = 'email';
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'kata_sandi', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function penyewaan() {
        $this->hasMany('\App\Penyewaan');
    }
}