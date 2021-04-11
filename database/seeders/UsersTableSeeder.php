<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
        	[
        		'name'=>'田中太郎',
        		'email'=>'tanaka.taro@test.com',
        		'password'=>Hash::make('Password12'),
        	],
        	[
        	    'name'=>'佐藤花子',
        		'email'=>'sato.hanako@test.com',
        		'password'=>Hash::make('Password12'),
        	],
         	[
            	'name' => Str::random(10),
            	'email' => Str::random(10).'@gmail.com',
        		'password'=>Hash::make('Password12'),
        	],       	
        ]);
    }
}
