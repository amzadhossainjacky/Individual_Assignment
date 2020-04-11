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

    <h1>All User </h1>&nbsp
    <a href="">back</a>

    <a href="{{route('logout')}}">Logout</a>

	<table border="1">
		<tr>
			<th>ID</th>
			<th>NAME</th>
            <th>Email</th>
            <th>Company</th>
			<th>Action</th>
		</tr>

		@foreach($all as $user)
		<tr>

			<td>{{$user['id']}}</td>
			<td>{{$user['name']}}</td>
			<td>{{$user['email']}}</td>
			<td>{{$user['company']}}</td>
			<td>
                {{-- <form action="{{route('destroy', $user['id'])}}" method="get">
                    <button type="submit"> Delete</button>
                </form> --}}
                {{-- <a href="{{route('ind', $user['id'])}}">Details</a> --}}

                {{-- <a href="{{route('home.edit', $user['userId'])}}">Edit</a>

				<a href="{{route('home.delete', $user['userId'])}}">Delete</a>
				<a href="{{route('home.show', $user['userId'])}}">Details</a> --}}
			</td>
		</tr>
		@endforeach
	</table>

</body>
</html>


