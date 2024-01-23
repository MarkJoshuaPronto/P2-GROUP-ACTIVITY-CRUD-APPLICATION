<!-- resources/views/teacher/show.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Teacher Details</h1>

    <p><strong>Name:</strong> {{ $teacher->name }}</p>
    <p><strong>Age:</strong> {{ $teacher->age }}</p>
    <p><strong>Address:</strong> {{ $teacher->address }}</p>
    <p><strong>Department:</strong> {{ $teacher->department }}</p>
    <br>
    <a href="{{ route('teachers.index') }}">Back to Teachers</a>
@endsection
