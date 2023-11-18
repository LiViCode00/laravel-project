<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\Admin;
use App\Models\User;

class AdminSeeder extends Seeder
{
    public function run()
    {
        $admins = [
            [
                "name" => "Nhat Linh Admin",
                "email" => "admin@gmail.com",
                'password'=>"123456",
                "group_id" => 1
            ],
            [
                "name" => "Admin",
                "email" => "admin01@gmail.com",
                'password'=>"123456",
                "group_id" => 1
            ]
        ];
        
        foreach ($admins as $adminData) {
            $adminData['password'] = Hash::make($adminData['password']);
            $user = User::updateOrCreate([
                'email' => $adminData['email']
            ], $adminData);

            Admin::updateOrCreate(
                ['user_id' => $user->id],
                [
                    'name' => $user->name,
                    'email' => $user->email,
                    'password' => $user->password,
                    'user_id' => $user->id
                ]
            );
        }
    }
}
