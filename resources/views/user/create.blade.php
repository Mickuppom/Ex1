@extends('layout.master')

@section('content')
<h1>Please Type information</h1>
<form action="/user/store" method="post">
    @csrf
    Name: <input type="text" name="name" required><br><br>
    Username: <input type="text" name="username" required><br><br>
    E-mail: <input type="text" name="email" required><br><br>
    Password: <input type="password" name="password" required><br><br>
    <button type="submit">SAVE</button>
</form>
@endsection
