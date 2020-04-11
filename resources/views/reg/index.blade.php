<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="{{route('register')}}" method="post" style="text-align: center; padding-top: 150px;">

          {{csrf_field()}}

        <h3>User Registration</h3>
        @foreach($errors->all() as $err)
		{{$err}} <br>
        @endforeach

        <label for="uname">User Name</label><br>
        <input type="text" name="name" id=""><br>
        <label for="email">Email</label><br>
        <input type="text" name="email"><br>
        <label for="password">Password</label><br>
        <input type="password" name="password"><br>
        <label for="company">Company</label><br>
        <input type="text" name="company" id=""><br>

        <button type="submit">Submit</button>
    </form>
</body>
</html>
