<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(
        	[
            	[
            		'name'=>'naruto',
            		'email'=>'naruto@gmail.com',
            		'password'=> bcrypt('12345678'),
           		],
           		[
            		'name'=>'sasuke',
            		'email'=>'sasuke@gmail.com',
            		'password'=> bcrypt('12345678'),
           		],
        	]
    	);
    }
}
