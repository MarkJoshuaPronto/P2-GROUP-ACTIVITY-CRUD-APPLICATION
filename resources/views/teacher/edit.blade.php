<!-- resources/views/teacher/edit.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Edit Teacher</h1>

    <form action="{{ route('teachers.update', $teacher->id) }}" method="post">
        @csrf
        @method('PUT')
        <label for="name">Name:</label>
        <input type="text" name="name" value="{{ $teacher->name }}" required>
        <br>
        <label for="age">Age:</label>
        <input type="number" name="age" value="{{ $teacher->age }}" required>
        <br>
        <label for="address">Address:</label>
        <input type="text" name="address" value="{{ $teacher->address }}" required>
        <br>
        <label for="department">Department:</label>
        <input type="text" name="department" value="{{ $teacher->department }}" required>
        <br>
        <button type="submit">Update</button>
    </form>
    <br>
    <a href="{{ route('teachers.index') }}">Back to Teachers</a>
@endsection
