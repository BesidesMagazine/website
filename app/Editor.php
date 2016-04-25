<?php

namespace App;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class Editor extends Model implements Authenticatable
{
	use \Illuminate\Auth\Authenticatable;
	

    protected $fillable = [
        'name', 'email', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function articles(){
    	return $this->hasMany('App\Article');
    }

}
