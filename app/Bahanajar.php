<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bahanajar extends Model
{
     public $table = 'bahanajar';

    public $fillable =[
    	'judul_bahanajar','dosen_ketua',
    	'dosen_angggota1','dosen_anggota2',
    	'dosen_anggota3','dosen_anggota4',
    	'dosen_anggota5','dosen_anggota6',
    	'dosen_anggota3','dosen_anggota4',
    	'dosen_anggota9',
    	'nama_jurusan','prodi','tahun'
    ];

    public $timestamps = true;
}
