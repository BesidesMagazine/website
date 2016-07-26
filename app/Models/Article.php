<?php

namespace app\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = [
        'title', 'content', 'editor_id', 'category_id',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function editor()
    {
        return $this->belongsTo('App\Editor');
    }
    /*
    public function category(){
    	return $this->belongsTo('app\Models\Category');
    }
    */
    /*
    public function author(){
        return $this->belongsTo('app\Models\Author');
    }
    */
}
