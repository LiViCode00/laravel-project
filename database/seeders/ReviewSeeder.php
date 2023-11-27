<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Lesson;
use App\Models\Review;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = User::all(); // Assuming you have a User model

        // Let's assume you have lessons and you want to associate reviews with lessons
        $lessons = Lesson::all(); // Assuming you have a Lesson model

        foreach ($lessons as $lesson) {
            for ($i = 1; $i <= 5; $i++) {
                $user = $users->random(); // Get a random user for the review

                Review::updateOrCreate([
                    'comment' => 'This is a review for Lesson ' . $lesson->id,
                    'stars' => rand(1, 5),
                    'user_id' => $user->id,
                    'lesson_id' => $lesson->id,
                ]);
            }
        }
    }
}
