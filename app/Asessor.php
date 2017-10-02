<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Asessor extends Model
{
     public $table = 'asessor';

    public $fillable =[
    	'nip_asessor','nama_asessor',
    	'jurusan_id','alamat_asessor',
    	'email_asessor','telepon','foto','tahun'
    ];

    public $timestamps = true;

      public function dosen(){
        return $this-> hashMany(Dosen::class);
    }
    public function serdos(){
        return $this-> belongTo('App\Serdos');
    }
}
