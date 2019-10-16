<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;
use App\User;

class Product extends Model
{
    public function category()
    {
    	return $this->belongsTo('App\Category');
    }
    public function user()
    {
    	return $this->belongsTo('App\User');
    }
}
