<!-- resources/views/teacher/create.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Add a Teacher</h1>

    <form action="{{ route('teachers.store') }}" method="post">
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
        <label for="department">Department:</label>
        <input type="text" name="department" required>
        <br>
        <button type="submit">Add</button>
    </form>
    <br>
    <a href="{{ route('teachers.index') }}">Back to Teachers</a>
@endsection
