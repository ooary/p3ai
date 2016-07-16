<?php

use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->truncate();
        App\User::create(['name'=>'admin',
        				  'email'=>'adminp3ai@polsri.ac.id',
        				  'password'=>bcrypt('rahasia')]);
    }
}
