<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    use HasFactory;

     protected $guarded = [
         'id',
     ];



    public function course()
    {
        return $this->belongsTo(Course::class);
    }


    public function classroom()
    {
        return $this->belongsTo(Classroom::class);
    }


    public function teacher()
    {
        return $this->belongsTo(Teacher::class);
    }


    public function student()
    {
        return $this->belongsTo(Student::class);
    }
}
