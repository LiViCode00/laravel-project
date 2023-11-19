<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $users = [
            [

                "name" => "user",
                "email" => "user@gmail.com",
                "group_id" => "3",
                "password" => Hash::make("123456"),
                 
            ],
            [

                "name" => "user 02",
                "email" => "user02@gmail.com",
                "group_id" => "1",
                "password" => Hash::make("123456"),
            ],
            [

                "name" => "user 03",
                "email" => "user03@gmail.com",
                "group_id" => "2",
                "password" => Hash::make("123456"),
            ],
            [

                "name" => "user 04",
                "email" => "user04@gmail.com",
                "group_id" => "1",
                "password" => Hash::make("123456"),
            ],
            [

                "name" => "user 05",
                "email" => "user05@gmail.com",
                "group_id" => "3",
                "password" => Hash::make("123456"),
            ],
        ];

        foreach ($users as $user) {
            User::updateOrCreate($user);
        }
    }
}
