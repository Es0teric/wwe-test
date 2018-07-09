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
        
        DB::table('users')->insert([
        	'email' => 'leo@wwe-test.dev',
        	'password' => 'leo123',
        	'first_name' => 'Leo',
        	'last_name' => 'F',
        	'username' => 'Es0teric',
        	'last_login' => date('Y-m-d h:i:s')
        ]);

    }
}
