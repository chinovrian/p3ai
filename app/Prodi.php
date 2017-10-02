<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prodi extends Model
{
    //
    
    public $table = 'prodi';

    public $fillable =[
    	'nama_prodi'
    ];

    public $timestamps = true;
}
