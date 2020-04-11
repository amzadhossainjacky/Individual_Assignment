<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <a href="{{route('admin_home')}}">Home</a>
    <form action="{{route('add_manager')}}" method="post" style="text-align: center; padding-top: 150px;">

          {{csrf_field()}}

        <h3>New Bus Manager Entry</h3>
        @foreach($errors->all() as $err)
		{{$err}} <br>
        @endforeach

        <label for="uname">User Name</label><br>
        <input type="text" name="name" value="{{old('name')}}"><br>
        <label for="email">Email</label><br>
        <input type="text" name="email" value="{{old('email')}}"><br>
        <label for="password">Password</label><br>
        <input type="password" name="password" value="{{old('password')}}"><br>
        <label for="company">Company</label><br>
        <input type="text" name="company" value="{{old('company')}}"><br>

        <button type="submit">Submit</button>
    </form>
</body>
</html>
