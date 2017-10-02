<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bkd extends Model
{
    public $table = 'bkddosen';

    public $fillable =[
    	'nip_dosen',
    	'nama_dosen',
    	'keterangan',
    	'tahun',
    	'smt'

    ];

    public $timestamps = true;
}
