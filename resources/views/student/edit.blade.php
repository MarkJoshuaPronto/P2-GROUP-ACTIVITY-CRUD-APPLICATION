<!-- resources/views/student/edit.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Edit Student</h1>

    <form action="{{ route('students.update', $student->id) }}" method="post">
        @csrf
        @method('PUT')
        <label for="name">Name:</label>
        <input type="text" name="name" value="{{ $student->name }}" required>
        <br>
        <label for="age">Age:</label>
        <input type="number" name="age" value="{{ $student->age }}" required>
        <br>
        <label for="address">Address:</label>
        <input type="text" name="address" value="{{ $student->address }}" required>
        <br>
        <label for="course">Course:</label>
        <input type="text" name="course" value="{{ $student->course }}" required>
        <br>
        <label for="subject">Subject:</label>
        <input type="text" name="subject" value="{{ $student->subject }}" required>
        <br>
        <button type="submit">Update</button>
    </form>
    <br>
    <a href="{{ route('students.index') }}">Back to Students</a>
@endsection
