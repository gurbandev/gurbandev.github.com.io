<?php

use App\Http\Controllers\ClassroomController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Models\Registration;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//Route::get('', [RegistrationController::class, 'index']);

Route::get('', [RegistrationController::class, 'index'])->name('home');

Route::controller(RegistrationController::class)
    ->prefix('/registrations')
    ->name('registrations.')
    ->group(function(){
    Route::get('/create', 'create')->name('create');
    Route::post('', 'store')->name('store');
});

Route::controller(StudentController::class)
    ->prefix('/students')
    ->name('students.')
    ->group(function (){
        Route::get('/{id}', 'show')->name('show')->where('id', '[0-9]+');
        Route::get('/create', 'create')->name('crate');
        Route::post('', 'store')->name('store');
    });

Route::controller(ClassroomController::class)
    ->prefix('/classrooms')
    ->name('classrooms.')
    ->group(function (){
       Route::get('/{id}', 'show')->name('show')->where('id', '[0-9]+');
       Route::get('/create', 'create')->name('create');
       Route::post('', 'store')->name('store');
    });

Route::controller(TeacherController::class)
    ->prefix('/teachers')
    ->name('teachers.')
    ->group(function (){
        Route::get('/{id}', 'show')->name('show')->where('id', '[0-9]+');
        Route::get('/create', 'create')->name('create');
        Route::post('', 'store')->name('store');
    });

Route::controller(CourseController::class)
    ->prefix('/courses')
    ->name('courses.')
    ->group(function (){
        Route::get('/{id}', 'show')->name('show')->where('id', '[0-9]+');
        Route::get('/create', 'create')->name('create');
        Route::post('', 'store')->name('store');
    });


