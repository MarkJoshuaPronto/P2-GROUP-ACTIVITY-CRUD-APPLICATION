<!-- resources/views/student/create.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Add a Student</h1>

    <form action="{{ route('students.store') }}" method="post">
        @csrf
        <label for="name">Name:</label>
        <input type="text" name="name" required>
        <br>
        <label for="age">Age:</label>
        <input type="number" name="age" required>
        <br>
        <label for="address">Address:</label>
        <input type="text" name="address" required>
        <br>
        <label for="course">Course:</label>
        <input type="text" name="course" required>
        <br>
        <label for="subject">Subject:</label>
        <input type="text" name="subject" required>
        <br>
        <button type="submit">Add</button>
    </form>
    <br>
    <a href="{{ route('students.index') }}">Back to Students</a>
@endsection
