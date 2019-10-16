<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserInfoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('userinfo')->insert([
        	'user_id' =>1,
        	'fullname' => 'Nguyễn Đức Anh',
        	'address' => '81 Đông Thiên - Hoàng Mai - Hà Nội'
        ]);
    }
}
