<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Product;

class Category extends Model
{
    public function products()
    {
        return $this->hasMany('App\Product');
    }
}
