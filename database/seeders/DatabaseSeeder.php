<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Registration;
use App\Models\Student;
use App\Models\Teacher;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
           ClassroomSeeder::class,
            CourseSeeder::class,
        ]);
        Teacher::factory()->count(20)->create();
        Student::factory()->count(300)->create();
//        Registration::factory()->count(1000)->create();
    }
}
