<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'users';
    // protected $guarded = [];
    public $timestamps = false;
    public $incrementing = false;
    // protected $fillable = [
    //     'name', 'email', 'password',
    // ];

    public function pengeluaran(){
        return $this->belongsTo('App\Models\Pengeluaran');
    }

    public function transaksi_penjualan(){
        return $this->belongsTo('App\Models\TransaksiPenjualan');
    }

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
