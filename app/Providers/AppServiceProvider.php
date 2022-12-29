<?php

namespace App\Providers;

use App\Models\Classroom;
use App\Models\Course;
use App\Models\Student;
use App\Models\Teacher;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Paginator::useBootstrapFive();
        Model::preventLazyLoading(!app()->isProduction());

        View::composer('app.nav', function ($view){
           $courses = Course::orderBy('price')
               ->get();

           $teachers = Teacher::orderBy('first_name')
               ->get();

           $classrooms = Classroom::orderBy('name')
               ->get();

           $view->with([
               'courses' => $courses,
               'teachers' => $teachers,
               'classrooms' => $classrooms,
           ]);
        });
    }
}
