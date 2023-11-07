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
        User::updateOrCreate(
            [

                "name"=> "Hoang Nhat Dang",
                "email"=> "linhnhat@gmail.com",
                "group_id"=>"3",
                "password"=>Hash::make("123456"),
            ]
            );
    }
}
