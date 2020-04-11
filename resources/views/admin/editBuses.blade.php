<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <a href="{{route('admin_home')}}">Home</a>
    <form action="{{route('bus_edit',['id' => $find->id])}}" method="post" style="text-align: center; padding-top: 150px;">

          {{csrf_field()}}

        <h3>Edit Bus </h3>
        @foreach($errors->all() as $err)
		{{$err}} <br>
        @endforeach

        <label for="name">Bus Name</label><br>
        <input type="text" name="name" value="{{$find->name}}"><br>
        <label for="operator">Operator</label><br>
        <input type="text" name="operator" value="{{$find->operator}}"><br>
        <label for="">Seat Row</label><br>
        <input type="number" name="seat_row" value="{{$find->seat_row}}"><br>
        <label for="">Seat Column</label><br>
        <input type="number" name="seat_column" value="{{$find->seat_column}}"><br>
        <label for="location">Location</label><br>
        <input type="text" name="location" value="{{$find->location}}"><br>

        <button type="submit">Submit</button>
    </form>
</body>
</html>
