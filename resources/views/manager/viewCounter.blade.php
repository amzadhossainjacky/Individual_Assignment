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

    <a href="">back</a>
    <a href="{{route('add_counter')}}">add counter</a>
    <a href="{{route('view_counter')}}">View counter</a>
    <a href="{{route('logout')}}">Logout</a>

    <h1>Show Counters </h1>

	<table border="1">
		<tr>
			<th>counter Name</th>
			<th>Operator</th>
            <th>Email</th>
            <th>Location</th>
			<th>Action</th>
		</tr>

		@foreach($all as $bus)
		<tr>

			<td>{{$bus['name']}}</td>
			<td>{{$bus['operator']}}</td>
			<td>{{$bus['email']}}</td>
			<td>{{$bus['location']}}</td>
			<td>

                <form action="{{route('destroy_counter', $bus['id'])}}" method="get">
                    <button type="submit"> Delete</button>
                </form>

			</td>
		</tr>
		@endforeach
	</table>

</body>
</html>


