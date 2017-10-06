<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
class Dosen extends Model
{
    //
    public $table = 'dosen';


    public $fillable =[
    	'no_sertifikat','user_id','nip_dosen','nama_dosen',
        'nama_pt','alamat_pt',
    	'jurusan_id','prodi_id','jab_fungsional',
        'gol','tempat_lahir','tanggal_lahir',
        'pend_s1','pend_s2','pend_s3',
        'jenis','bdg_ilmu',
        'alamat_dosen','email','telepon','foto'
    ];

    public $timestamps = true;
    

    public function asessor(){
        return $this-> belongsTo(Asessor::class);
    }
     public function serdos(){
        return $this-> hashMany(Serdos::class);
    }
}
