<?php

namespace App\Forms;

use Kris\LaravelFormBuilder\Form;
use App\Models\Barang;

class TambahBarang extends Form
{
    public function buildForm()
    {
        $barang = (new Barang);
        $this
    	->add('id_barang','number',[
    		'rules'=>'required',
    		// 'default_value'=>date('Y')
    	])
    	->add('nama_barang','text',[
    		'rules'=>'required'
    	])
    	->add('jumlah_stok', 'text', [
                'rules'=>'required',
                // 'choices' => $karyawan->pluck("nama", "id")->toArray(),
                // 'attr'=>['id'=>'karyawan_id'],
                // 'empty_value' => '- Pilih Karyawan -',
                // 'label' => 'Karyawan'
            ])
        ->add('submit', 'submit', ['label' => 'Save','attr'=>['class'=>'btn-success btn btn-flat btn-block']]);
    }
}
