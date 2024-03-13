<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>

<body>
    <h3>Login Page</h3>

    <form action="{{route('admin.authenticate')}}" method="post" @csrf >
        <div>
            <label for="email">Email</label>
            <input id="email" name="email" type="email" placeholder="Enter Email">
        </div>
        <div>
            <label for="password">Password</label>
            <input id="password" name="password" type="password" placeholder="Enter Password">
        </div>
        <div>
            <button type="submit">Login</button>
        </div>
    </form>
</body>

</html>
