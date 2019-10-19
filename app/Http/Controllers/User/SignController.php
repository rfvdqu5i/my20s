<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SignController extends Controller
{
    public function login (Request $request) {
    	$email = $request->email;
    	$password = $request->password;
    }
}
