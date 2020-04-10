<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BUS TICKET RESERVATION SYSTEM</title>

    <style>
        .reg{
            text-align: right;
            margin-right: 200px;
            margin-top: 100px;
            margin-bottom: 20px;
        }
        .reg a{
            display: inline-block;
            text-decoration: none;
            font-size: 18px;
            background-color: #3fb761;
            padding: 10px;
            color: #fff;
            border-radius: 5px;
        }

        form{
            text-align: center;
        }

        .btn{
            background-color: coral;
            padding: 6px 8px;
            outline: none;
            border: 2px solid coral;
            border-radius: 2px;
            font-weight: 700;
        }

    </style>
</head>
<body>

    <div class="reg">
        <a href="">Registration</a>
    </div>
    <form action="{{route('login')}}" method="post">

        {{csrf_field()}}
        <h3>Login</h3>
        {{-- <p>{{session('msg')}}</p> --}}
        <label for="email">Email</label><br>
        <input type="email" name="email"><br>
        <label for="password">Password</label><br>
        <input type="password" name="password"><br><br>

        <button type="submit" class="btn">Submit</button>
    </form>
</body>
</html>
