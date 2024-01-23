<!-- resources/views/teacher/index.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Teachers</h1>

    <br>
    <a href="{{ route('homepage') }}">Back to Homepage</a>
    <br>
    <a href="{{ route('students.index') }}">Go to Students</a>
    <br>
    <a href="{{ route('teachers.create') }}">Add a Teacher</a>

    <table border="1">
        <tr>
            <th>Name</th>
            <th>Age</th>
            <th>Address</th>
            <th>Department</th>
            <th>Actions</th>
        </tr>
        @foreach ($teachers as $teacher)
            <tr>
                <td>{{ $teacher->name }}</td>
                <td>{{ $teacher->age }}</td>
                <td>{{ $teacher->address }}</td>
                <td>{{ $teacher->department }}</td>
                <td>
                    <a href="{{ route('teachers.show', $teacher->id) }}">Show</a>
                    <a href="{{ route('teachers.edit', $teacher->id) }}">Edit</a>
                    <form action="{{ route('teachers.destroy', $teacher->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
