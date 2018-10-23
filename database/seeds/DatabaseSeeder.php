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
        $admin = \App\User::whereLogin('admin')->get();
        if(!$admin->count()){
            \App\User::create([
                'name'=>'Администратор',
                'login'=>'admin',
                'password'=>\Illuminate\Support\Facades\Hash::make('admin'),
                'post'=>'Администратор',
            ]);
        }
    }
}
