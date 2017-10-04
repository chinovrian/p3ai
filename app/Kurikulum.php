<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kurikulum extends Model
{
   public $table = 'kurikulum';


    public $fillable =[
    	'smt','matakuliah','judul_kurikulum',
    	'sks','nama_jurusan','prodi',
    	'tahun','file_kurikulum','rps'
        
    ];


    public $timestamps = false;
}
