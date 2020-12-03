<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Students</title>
</head>
<body style="display: flex; justify-content:center">
    <div style="display: flex; flex-direction: column; align-items: center;">
        <h1>Students</h1>
        <table>
            <tr>
                <th> # </th>
                <th> Name </th>
                <th> Email </th>
                <th> Option </th>
            </tr>
            @foreach ($users as $user)
            <tr>
                <td> {{ ++$loop->index }} </td>
                <td> {{ $user->name }} </td>
                <td> {{ $user->email }} </td>
                <td> 
                    <a class="button" href="{{ route('singlestudent',[$user->id]) }}">Show</a>    
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</body>
</html>