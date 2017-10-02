<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    //
    protected $table ='permissions';
    
    protected $fillable = [
        'name', 'display_name', 'description',
    ];

    public $timestamps =true;

    public function permissionrole ()
    {
    	return $this->hasMany('PermissionRole::class');
    }
}
