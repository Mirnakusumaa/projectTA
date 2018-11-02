<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TransaksiPenjualan extends Model
{
    protected $table = 'transaksi_penjualans';
    // protected $guarded = [];
	public $timestamps = false;
    public $incrementing = false;

    public function user(){
    	return $this->hasMany('App\Models\User');
    }

    public function detail_transaksi(){
    	return $this->belongsTo('App\Models\DetailTransaksi');
    }
}
