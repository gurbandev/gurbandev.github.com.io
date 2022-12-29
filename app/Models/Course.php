<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    public $timestamps = false;

    protected $guarded =[
        'id',
    ];

    public function registration(){
        return $this->hasMany(Registration::class);
    }
}
