<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengeluaran extends Model
{
    protected $table = 'pengeluarans';
    // protected $guarded = [];
	public $timestamps = false;
    public $incrementing = false;

    public function user(){
    	return $this->hasMany('App\Models\User');
    }
}
