<!-- resources/views/student/show.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Student Details</h1>

    <p><strong>Name:</strong> {{ $student->name }}</p>
    <p><strong>Age:</strong> {{ $student->age }}</p>
    <p><strong>Address:</strong> {{ $student->address }}</p>
    <p><strong>Course:</strong> {{ $student->course }}</p>
    <p><strong>Subject:</strong> {{ $student->subject }}</p>
    <br>
    <a href="{{ route('students.index') }}">Back to Students</a>
@endsection
