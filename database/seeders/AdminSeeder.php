<?php

namespace Database\Seeders;

use App\Models\Admin;
use GuzzleHttp\Psr7\Request;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $admins = [
            [
                "name" => "Nhat Linh Admin",
                "email" => "admin@gmail.com",
                "password" => Hash::make("123456"),
            ],
            [
                "name" => "Admin",
                "email" => "admin01@gmail.com",
                "password" => Hash::make("123456"),
            ]
        ];
        foreach ($admins as $admin) {
            Admin::updateOrCreate($admin);
        }
    }
}
