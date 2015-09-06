<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {	
    	$profile = array('Manager', 'Developer', 'Business');

        DB::table('users')->insert([
        	'name' => 'User-'.str_random(2),
        	'lastname' => 'Links Innovation',
        	'email' => str_random(5).'@gmail.com',
        	'password' => bcrypt('111111'),
        	'birthday' => date('Y-m-d H:m:s', strtotime('1982-01-27 00:30:00')),
        	'sex'=> rand(1, 2),
        	'created_at'=>new DateTime,
        	'updated_at'=> new DateTime,
        	'profile'=>$profile[rand(0, 2)],
        	'message'=>str_random(100)
        ]);
    }
}
