<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kelengkapan extends Model
{
    public $table = 'kelengkapan';

    public $fillable =[
    	'nip_dosen','nama_dosen',
    	'ijas1','ijas2','ijas3',
    	'ser_pen'
    ];

    public $timestamps = true;
}
