<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rps extends Model
{
    public $table = 'rps';

    public $fillable =[
    	'matakuliah','dosen_pengampu',
    	'nama_jurusan','prodi',
    	'file_rps','tahun'
    ];

    public $timestamps = true;
}
