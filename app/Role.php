<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table ='roles';
    
    protected $fillable = [
        'name', 'display_name', 'description',
    ];

    public $timestamps =true;

    public function permissionrole ()
    {
    	return $this->hasMany('PermissionRole::class');
    }

    public function roleuser ()
    {
    	return $this->hasMany('RoleUser::class');
}
