<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <a href="{{route('admin_home')}}">Home</a>
    <form action="{{route('add_buses')}}" method="post" style="text-align: center; padding-top: 150px;">

          {{csrf_field()}}

        <h3>New Bus Entry</h3>
        @foreach($errors->all() as $err)
		{{$err}} <br>
        @endforeach

        <label for="name">Bus Name</label><br>
        <input type="text" name="name" value="{{old('name')}}"><br>
        <label for="operator">Operator</label><br>
        <input type="text" name="operator" value="{{old('operator')}}"><br>
        <label for="">Seat Row</label><br>
        <input type="number" name="seat_row" value="{{old('seat_row')}}"><br>
        <label for="">Seat Column</label><br>
        <input type="number" name="seat_column" value="{{old('seat_column')}}"><br>
        <label for="location">Location</label><br>
        <input type="text" name="location" value="{{old('location')}}"><br>

        <button type="submit">Submit</button>
    </form>
</body>
</html>
