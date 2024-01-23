<!-- resources/views/student/index.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Students</h1>

    <br>
    <a href="{{ route('homepage') }}">Back to Homepage</a>
    <br>
    <a href="{{ route('teachers.index') }}">Go to Teachers</a>
    <br>
    <a href="{{ route('students.create') }}">Add a Student</a>

    <table border="1">
        <tr>
            <th>Name</th>
            <th>Age</th>
            <th>Address</th>
            <th>Course</th>
            <th>Subject</th>
            <th>Actions</th>
        </tr>
        @foreach ($students as $student)
            <tr>
                <td>{{ $student->name }}</td>
                <td>{{ $student->age }}</td>
                <td>{{ $student->address }}</td>
                <td>{{ $student->course }}</td>
                <td>{{ $student->subject }}</td>
                <td>
                    <a href="{{ route('students.show', $student->id) }}">Show</a>
                    <a href="{{ route('students.edit', $student->id) }}">Edit</a>
                    <form action="{{ route('students.destroy', $student->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
