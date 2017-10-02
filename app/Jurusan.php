<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jurusan extends Model
{
    //
    public $table = 'jurusan';

    public $fillable =[
    	'nama_jurusan'
    ];

    public $timestamps = true;

   
    public function serdos(){
    	return $this-> hashMany(Serdos::class);
    }

}
