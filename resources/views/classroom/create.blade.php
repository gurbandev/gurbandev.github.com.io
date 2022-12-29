@extends('layouts.app')
@section('title')
    Classroom create
@endsection
@section('content')
    <div class="container-xl py-3">
        <div class="row justify-content-center">
            <div class="col-10 col-sm-8 col-md-6 col-lg-4">
                <div class="fs-4 fw-semibold text-center mb-3">
                    Classroom create
                </div>
                <form class="text-center mt-5" action="{{route('classrooms.store')}}" method="post">
                    @csrf

                    <div class="row mt-4">
                        <label class="form-label fw-semibold col" for="name">
                            <span class="fs-2">Name</span>
                        </label>
                        <input class=" mx-2 form-control @error('name') is-invalid @enderror col" type="text" name="name" id="name" value="{{old('name')}}" required autofocus>
                        @error('name')
                        <div class="alert alert-danger mt-2">{{$message}}</div>
                        @enderror
                        <button class="btn btn-secondary col" type="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection