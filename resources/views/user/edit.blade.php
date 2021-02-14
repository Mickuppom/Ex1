@extends('layout.master')

@section('content')
    <h1>Please Type information</h1>
    <form action="/user/update/{{$user->id}}" method="post">
        @csrf
        Name: <input type="text" name="name" value="{{$user->name}}" required>
        Username: <input type="text" name="username" value="{{$user->username}}" required>
        E-mail: <input type="text" name="email" value="{{$user->email}}" required>
        Password: <input type="password" name="password" value="{{$user->password}}">
        <button type="submit">SAVE</button>
    </form>
@endsection
