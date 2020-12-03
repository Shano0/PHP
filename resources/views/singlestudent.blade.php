<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student Page</title>
</head>
<body>
    <div style="text-align: center">
        <h3>{{ $student->name }}</h3>
        <br>
        <p><b>Classes</b></p>
        @foreach ($classes as $class)
        <p>{{ $class->classname }} <a href="{{ route('deletefromclass',[$student->id, $class->id]) }}"> Remove from this class</a></p>
        @endforeach

        <br>

        <p><b>Add To Class</b></p>
        <form method="POST" action="{{ route('addtoclass') }}">
            @csrf
            <input type="hidden" name="studentid" value="{{ $student->id }}">
            <select name="classid" id="classid">
                @foreach ($allclasses as $class)
                <option value="{{ $class->id }}">
                            {{ $class->classname }}
                    </option>
                @endforeach
            </select>
            <button type="submit"> Add </button>
        </form>
    </div>
</body>
</html>