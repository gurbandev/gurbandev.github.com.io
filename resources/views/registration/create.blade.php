@extends('layouts.app')
@section('title')
    Registration craete
@endsection
@section('content')
    <div class="row justify-content-center">
        <div class="border rounded col-6 mt-5 pb-5 border-dark">
            <h1 class="text-center mt-5">Registration create</h1>
            <div class="container-xl mt-5">
                <div class="row justify-content-center">
                    <div class="col-6 row justify-content-center">
                        <form action="{{route('registrations.store')}}" method="post">
                            @csrf
                            <div class="mb-3">
                                <label for="classroom" class="form-label fw-semibold">
                                    Classroom<span class="text-danger">*</span>
                                </label>
                                <select class="form-select @error('classroom') is-invalid @enderror" name="classroom" id="classroom" required autofocus>
                                    @foreach($classrooms as $classroom)
                                        <option value="{{$classroom->id}}">{{$classroom->name}}</option>
                                    @endforeach
                                </select>
                                @error('classroom')
                                <div class="alert alert-danger mt-2">{{$message}}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="cours" class="form-label fw-semibold">
                                    Courses<span class="text-danger">*</span>
                                </label>
                                <select class="form-select @error('cours') is-invalid @enderror" name="cours" id="cours" required autofocus>
                                    @foreach($courses as $course)
                                        <option value="{{$course->id}}">{{$course->name}}</option>
                                    @endforeach
                                </select>
                                @error('cours')
                                <div class="alert alert-danger mt-2">{{$message}}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="student" class="form-label fw-semibold">
                                    Students<span class="text-danger">*</span>
                                </label>
                                <select class="form-select @error('student') is-invalid @enderror" name="student" id="student" required autofocus>
                                    @foreach($students as $student)
                                        <option value="{{$student->id}}">{{$student->first_name}}-{{$student->last_name}}</option>
                                    @endforeach
                                </select>
                                @error('student')
                                <div class="alert alert-danger mt-2">{{$message}}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="teacher" class="form-label fw-semibold">
                                    Teachers<span class="text-danger">*</span>
                                </label>
                                <select class="form-select @error('teacher') is-invalid @enderror" name="teacher" id="teacher" required autofocus>
                                    @foreach($teachers as $teacher)
                                        <option value="{{$teacher->id}}">{{$teacher->first_name}}-{{$teacher->last_name}}</option>
                                    @endforeach
                                </select>
                                @error('teacher')
                                <div class="alert alert-danger mt-2">{{$message}}</div>
                                @enderror
                            </div>

                            <div class="row justify-content-center">
                                <button type="submit" class="btn btn-success col-6 ">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
