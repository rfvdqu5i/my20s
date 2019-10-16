<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
class UserInfo extends Model
{	
	protected $table = 'userinfo';
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
