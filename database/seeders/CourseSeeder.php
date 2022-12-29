<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $objs = [
            ['name' => 'Beginner', 'price' => 1400],
            ['name' => 'Elementary', 'price' => 1400],
            ['name' => 'Pre-intermediate', 'price' => 1600],
            ['name' => 'Intermediate', 'price' => 1600],
            ['name' => 'Upper-intermediate', 'price' => 1800],
            ['name' => 'Advanced', 'price' => 1800],
            ['name' => 'Web design', 'price' => 1950],
            ['name' => 'Web programming', 'price' => 1950],
        ];
        foreach ($objs as $obj){
            Course::create([
                'name' => $obj['name'],
                'price' => $obj['price'],
            ]);
        }
    }
}
