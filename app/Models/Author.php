<?php

namespace app\Models;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $fillable = [
        'name', 'introduction', 'image_url',
    ];


    public function articles(){
    	return $this->hasMany('App\Models\Article', 'author_name', 'name');
    }

}
