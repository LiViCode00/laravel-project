<?php

namespace Database\Seeders;

use App\Models\Lesson;
use App\Models\Video;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VideoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $lessons = Lesson::all(); 

        foreach ($lessons as $lesson) {
            for ($i = 1; $i <= 5; $i++) {
                Video::create([
                    'lesson_id' => $lesson->id,
                    'name' => 'Video ' . $i . ' for Lesson ' . $lesson->id,
                    'url' => 'https://example.com/video-' . $i,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        }
    }
}
