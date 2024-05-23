<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserTableSeender extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $users = [
            ["name"=>"Veak", "email"=>"Veak@.come", "password"=>"123423"],
            ["name"=>"Veaks", "email"=>"Veaks1@.come", "password"=>"423"],

        ];
        foreach ($users as $user) {
            User::create($user);
        }
    }
}
