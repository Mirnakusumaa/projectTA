<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetailTransaksi extends Model
{
    protected $table = 'detail_transaksis';
    // protected $guarded = [];
	public $timestamps = false;
    public $incrementing = false;

    public function transaksi(){
    	return $this->hasMany('App\Models\TransaksiPenjualan');
    }

    public function barang(){
    	return $this->belongsTo('App\Models\Barang');
    }
}
