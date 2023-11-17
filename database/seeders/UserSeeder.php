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

                "name" => "Hoang Nhat Dang",
                "email" => "linhnhat@gmail.com",
                "group_id" => "3",
                "password" => Hash::make("123456"),
                 
            ],
            [

                "name" => "Nhat Linh",
                "email" => "linhnhat01@gmail.com",
                "group_id" => "1",
                "password" => Hash::make("123456"),
            ],
            [

                "name" => "Nhat Nhat",
                "email" => "linhnhat02@gmail.com",
                "group_id" => "2",
                "password" => Hash::make("123456"),
            ],
            [

                "name" => "Nhat Vy",
                "email" => "linhnhat03@gmail.com",
                "group_id" => "1",
                "password" => Hash::make("123456"),
            ],
            [

                "name" => "Phu Quoc",
                "email" => "linhnhat04@gmail.com",
                "group_id" => "3",
                "password" => Hash::make("123456"),
            ],
        ];

        foreach ($users as $user) {
            User::updateOrCreate($user);
        }
    }
}