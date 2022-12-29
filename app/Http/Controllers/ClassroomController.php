<?php

namespace App\Http\Controllers;

use App\Models\Classroom;
use Illuminate\Http\Request;

class ClassroomController extends Controller
{
    public function show($id){
        $classroom = Classroom::where('id', $id)
            ->firstOrFail();

        return view('classroom.show')
            ->with([
                'classroom' => $classroom,
            ]);
    }

    public function create(){
        return view('classroom.create');
    }

    public function store(Request $request){
        $request->validate([
           'name' => 'required|string|max:255',
        ]);

        $classroom = new Classroom();
        $classroom->name = $request->name;
        $classroom->save();

        return redirect(route('home'));
    }
}
