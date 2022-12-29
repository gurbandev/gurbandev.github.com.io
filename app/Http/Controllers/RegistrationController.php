<?php

namespace App\Http\Controllers;

use App\Models\Classroom;
use App\Models\Course;
use App\Models\Registration;
use App\Models\Student;
use App\Models\Teacher;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
//    public function index(Request $request){
//        $request->validate([
//            'classroom_id' => 'nullable|intiger|min:1',
//            'course_id' => 'nullable|intiger|min:1',
//            'student_id' => 'nullable|intiger|min:1',
//            'teacher_id' => 'nullable|intiger|min:1',
//        ]);
//        $classroomId = $request->has('classroom_id') ? $request->classroom_id : null;
//        $courseId = $request->has('course_id') ? $request->course_id : null;
//        $studentId = $request->has('student_id') ? $request->student_id : null;
//        $teacherId = $request->has('teacher_id') ? $request->teacher_id : null;
//
//        $registrations = Registration::when($classroomId, function ($query, $classroomId){
//            $query->where('classroom_id', $classroomId);
//        })
//            ->when($courseId, function ($query, $courseId){
//                $query->where('course_id', $courseId);
//            })
//            ->when($studentId, function ($query, $studentId){
//                $query->where('student_id', $studentId);
//            })
//            ->when($teacherId, function ($query, $teacherId){
//                $query->where('teacher_id', $teacherId);
//            })
//            ->with(['classroom', 'course', 'student', 'teacher'])
//            ->orderBy('id', 'desc')
//            ->simplePaginate(50);
//
//        $registrations = $registrations->appends([
//            'classroom_id' => $classroomId,
//            'course_id' => $courseId,
//            'student_id' => $studentId,
//            'teacher_id' => $teacherId,
//        ]);
//
//        $classrooms = Classroom::orderBy('name')
//            ->get();
//        $courses = Course::orderBy('name')
//            ->get();
//        $students = Student::orderBy('first_name')
//            ->get();
//        $teachers = Teacher::orderBy('first_name')
//            ->get();
//
//        return view('student.index')
//            ->with([
//                'classrooms' => $classrooms,
//                'courses' => $courses,
//                'students' => $students,
//                'teachers' => $teachers,
//                'classroom_id' => $classroomId,
//                'course_id' => $courseId,
//                'student_id' => $studentId,
//                'teacher_id' => $teacherId,
//                'registrations' => $registrations,
//            ]);
//    }

    public function index(){
        $registrations = Registration::orderBy('id', 'desc')
            ->get();
        return view('registration.show')
            ->with([
                'registrations' => $registrations,
            ]);
    }

    public function create(){
        $classrooms = Classroom::orderBy('name')
            ->get();
        $courses = Course::orderBy('name')
            ->get();
        $teachers = Teacher::orderBy('id', 'desc')
            ->get();
        $students = Student::orderBy('id', 'desc')
            ->get();

        return view('registration.create')
            ->with([
                'classrooms' => $classrooms,
                'courses' => $courses,
                'teachers' => $teachers,
                'students' => $students,
            ]);
    }

    public function store(Request $request){
        $request->validate([
            'classroom' => 'required|integer|min:1',
            'course' => 'required|integer|min:1',
            'student' => 'required|integer|min:1',
            'teacher' => 'required|integer|min:1',
        ]);

        $obj = new Registration();
        $obj->classroom_id = $request->classroom;
        $obj->course_id = $request->course;
        $obj->teacher_id = $request->teacher;
        $obj->student_id = $request->student;
        $obj->save();

        return redirect(route('home'));
    }

    public function show($id){
        $registration = Registration::where('id', $id)
            ->get();
        return view('registration.show')
            ->with([
                'registration' => $registration
            ]);
    }
}
