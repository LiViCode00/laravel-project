<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\Teacher;
use App\Models\User;

class TeacherSeeder extends Seeder
{
    public function run()
    {
        $teachers = [
            [
                "name" => "teacher 01",
                "email" => "t1@gmail.com",
                "password" => "123456",
                "group_id" => 2
            ],
            [
                "name" => "teacher 02",
                "email" => "t2@gmail.com",
                "password" => "123456",
                "group_id" => 2
            ]
        ];

        foreach ($teachers as $teacherData) {
            $teacherData['password'] = Hash::make($teacherData['password']);

            $user = User::updateOrCreate([
                'email' => $teacherData['email']
            ], $teacherData);

            Teacher::updateOrCreate(
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
