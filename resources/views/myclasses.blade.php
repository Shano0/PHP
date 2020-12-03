<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Classes</title>
</head>
<body>
    <div style="text-align: center">
        <h1>My Classes</h1>
        @foreach ($classes as $class)
        <p>{{ $class }}</p>
        @endforeach
    </div>
</body>
</html>