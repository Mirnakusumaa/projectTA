<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $table = 'barangs';
    protected $guarded = [];
	public $timestamps = false;
    public $incrementing = false;

    public function kategori(){
    	return $this->hasMany('App\Kategori');
    }

    public function detail_transaksi(){
    	return $this->belongsTo('App\DetailTransaksi');
    }
}
