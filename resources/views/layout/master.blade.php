<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FUCKING WEB</title>
</head>
<body>
    <a href="/">HOME</a> | <a href="about">ABOUT</a> | <a href="contact">CONTACT</a>
    <br> Hello,@If(auth()->check()) {{auth()->user()->name}} <a href="/auth/logout">LOGOUT</a> @else someone @endif
    @yield("content")
    <hr>
    &copy; 2021 xMiCx
</body>
</html>
