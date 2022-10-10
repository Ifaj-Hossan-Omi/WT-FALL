<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
</head>

<body>
    <ul>
        <li><a href="login">Login</a></li>
        <li><a href="register">Register</a></li>
        <li><a href="home">Home</a></li>
    </ul>
    @yield('content')
</body>

</html>