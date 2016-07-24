<?php

namespace app;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class Administrator extends Model implements Authenticatable
{
    use \Illuminate\Auth\Authenticatable;
    protected $table = 'administrator';
    protected $hidden = ['name', 'password', 'remember_token'];
    public $timestamps = false;
}
