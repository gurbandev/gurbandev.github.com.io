<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Registration>
 */
class RegistrationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $course = DB::table('courses')->inRandomOrder()->first();
        $classroom = DB::table('classrooms')->inRandomOrder()->first();
        $teacher = DB::table('teachers')->inRandomOrder()->first();
        $student = DB::table('students')->inRandomOrder()->first();
        return [
            'course_id' => $course->id,
            'classroom_id' => $classroom->id,
            'teacher_id' => $teacher->id,
            'student_id' => $student->id,
        ];
    }
}
