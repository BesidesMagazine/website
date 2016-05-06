<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PartnerCategory extends Model
{
     protected $table = 'partner_categories';
	 protected $fillable = ['name'];
}
