<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bus Ticket Reservation system</title>
</head>
<body>
    <h2>{{session('uname')}} </h2>
    <a href="{{route('add_counter')}}">add counter</a>
    <a href="{{route('view_counter')}}">View counter</a>
    <a href="{{route('logout')}}">Logout</a>

</body>
</html>
