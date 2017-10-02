<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cek extends Model
{
    public $table = 'cek';

    public $fillable =[
    	'nip_dosen',
    	'nama_dosen',
    	'nama_asessor1',
    	'nama_asessor2',
    	'sk_mengajar',
    	'rps',
    	'absen',
    	'nilai',
    	'bp_penelitian',
    	'bd_penelitian',
    	'bp_penunjang',
    	'bd_penunjang',
    	'bp_pengabdian',
    	'bd_pengabdian',
    ];

    public $timestamps = true;
}
