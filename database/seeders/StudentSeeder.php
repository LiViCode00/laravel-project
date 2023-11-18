<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\Student;
use App\Models\User;

class StudentSeeder extends Seeder
{
    public function run()
    {
        $students = [
            [
                "name" => "Hoang Nhat Dang",
                "email" => "linhnhat@gmail.com",
                "group_id" => "3",
                "password" => "123456",
            ],
            [
                "name" => "Nhat Nhat",
                "email" => "linhnhat02@gmail.com",
                "group_id" => "3",
                "password" => "123456",
            ],
            [
                "name" => "Nhat Vy",
                "email" => "linhnhat03@gmail.com",
                "group_id" => "3",
                "password" => "123456",
            ],
        ];

        foreach ($students as $studentData) {
            $studentData['password'] = Hash::make($studentData['password']);

            $user = User::updateOrCreate([
                'email' => $studentData['email']
            ], $studentData);

            Student::updateOrCreate(
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

