<!-- resources/views/homepage.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
</head>
<body>
    <h1>Welcome to the Homepage</h1>

    <a href="{{ route('teachers.index') }}">Go to Teachers</a>
    <br>
    <a href="{{ route('students.index') }}">Go to Students</a>
</body>
</html>
