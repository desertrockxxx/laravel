<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    
    public function post(){
        
        return $this->hasOne('App\Post');
        
    }
    
    
    // 11-65 many to many relations
    public function roles(){
        return $this->belongsToMany('App\Role', 'user_roles', 'user_id', 'role_id');
        // 66 Querying intermediate table
        
        // To customize table name and columns the formate below
        
        // return $this->belongsToMany('App\Role', 'user_roles', 'user_id', 'role_id');
    }
    
    public function photos() {
        
        return $this->morphMany('App\Photo', 'imageable');
        
    }
    
    
}
