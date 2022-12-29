@extends('layouts.app')
@section('title')
    Registration
@endsection
@section('content')
    @foreach($registrations as $registration)
        {{$registration}}
    @endforeach
@endsection
