<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <h2>{{session('uname')}} </h2>

    <h1>Show Buses </h1>&nbsp
    <a href="">back</a>

    <a href="{{route('add_manager')}}">Add Manager</a>
    <a href="{{route('view_buses')}}">Show Buses</a>
    <a href="{{route('add_buses')}}">Add Buses</a>
    <a href="{{route('logout')}}">Logout</a>

	<table border="1">
		<tr>
			<th>Bus Name</th>
			<th>Operator</th>
            <th>Seat Row</th>
            <th>Seat Column</th>
            <th>Location</th>
			<th>Action</th>
		</tr>

		@foreach($all as $bus)
		<tr>

			<td>{{$bus['name']}}</td>
			<td>{{$bus['operator']}}</td>
			<td>{{$bus['seat_row']}}</td>
			<td>{{$bus['seat_column']}}</td>
			<td>{{$bus['location']}}</td>
			<td>

                <a href="{{route('bus_edit', $bus['id'])}}">Edit</a>

			</td>
		</tr>
		@endforeach
	</table>

</body>
</html>


