<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tahun extends Model
{
  public $table = 'tahun';

    public $fillable =[
    	'tahun'
    ];

    public $timestamps = false;
}
