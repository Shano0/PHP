<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $classname }}</title>
</head>
<body>
    <div style="text-align: center">
        <h1>{{ $classname }}</h1>
        <br>
        @foreach ($students as $student)
        <p>{{ $student }}</p>
        @endforeach
    </div>
</body>
</html>