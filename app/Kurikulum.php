<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kurikulum extends Model
{
   public $table = 'kurikulum';


    public $fillable =[
    	'kd','smt','matakuliah','judul_kurikulum',
    	'sks','jam','nama_jurusan','prodi',
    	'tahun','rps'
        
    ];


    public $timestamps = false;
}
