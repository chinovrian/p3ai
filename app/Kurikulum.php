<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kurikulum extends Model
{
   public $table = 'kurikulum';


    public $fillable =[
    	'judul_kurikulum','nama_jurusan','prodi',
    	'file_kurikulum','tahun'
        
    ];

    public $timestamps = true;
