<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;

class DashboardController extends Controller
{
    public function index() {
    	$count_users = User::get()->count();
    	return view('admin.dashboard', ['count_users' => $count_users]);
    }
}
