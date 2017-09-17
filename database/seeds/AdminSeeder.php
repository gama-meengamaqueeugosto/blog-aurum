<?php

use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' 		=> 'Hacker #meengamaqueeugosto',
            'email' 	=> 'alexandroffeijo@gmail.com',
            'password' 	=> bcrypt('feijo2017floripa'),
            'admin' 	=> true,
        ]);
    }
}
