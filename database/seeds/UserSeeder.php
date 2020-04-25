<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new \App\Models\User();
        $user->name = 'admin';
        $user->email = 'admin@example.com';
        $user->password = Hash::make('12345678');
        $user->save();
    }
}
