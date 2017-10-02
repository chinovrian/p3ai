<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Serdos extends Model
{
    //
    public $table = 'serdos';

    public $fillable =[
    	'nip_dosen','nama_dosen',
    	'nama_asessor1','nama_asessor2','passw',
    	'jurusan_id','tahun_sertifikasi',
    	'smt_sertifikasi'
    ];

    public $timestamps = true;

    public function dosen(){
    	return $this-> belongsTo(Dosen::class);
    }

    public function getAsessor($id)
    {
        return Asessor::where('id',$id)->first()->nama_asessor;
    }

    public function getAsessorLap($id)
    {
        return Asessor::where('id',$id)->value('nama_asessor');
    }
}
