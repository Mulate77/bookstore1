<?php

namespace Database\Seeders;

use App\Models\Lesson;
use App\Models\Registration;
use App\Models\Student;
use App\Models\Teacher;


// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $this->call([
                CourseSeeder::class,
                LocationSeeder::class,
                SeasonSeeder::class,
            ]);
        Lesson::factory(30)->create();
        Student::factory(100)->create();
        Registration::factory(200)->create();

        Teacher::factory(10)->create();

    }
}
