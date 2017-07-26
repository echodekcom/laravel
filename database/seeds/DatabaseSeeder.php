<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $user = new \App\User();
        $user->name = 'Ibnu Bastamam';
        $user->email = 'faiz@gmail.com';
        $user->password = Hash::make('111');
        $user->save();
    }
}
