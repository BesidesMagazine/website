<?php

namespace app\Models;

use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
    protected $fillable = [
        'name', 'introduction', 'logo_url', 'connect',
    ];
}
