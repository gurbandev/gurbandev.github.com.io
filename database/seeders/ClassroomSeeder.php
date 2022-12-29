<?php

namespace Database\Seeders;

use App\Models\Classroom;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClassroomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $objs = [
            'A1',
            'A2',
            'B1',
            'B2',
            'C1',
            'C2',
            'D4',
            'D5',
        ];
        foreach ($objs as $obj){
             Classroom::create([
                 'name' => $obj,
             ]);
        }
    }
}
