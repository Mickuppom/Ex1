@extends('layout.master')

@section('content')
    <h1>Please Type information</h1>
    <form action="/auth/doLogin" method="post">
        @csrf
        E-mail:<input type="email" name="email" required><br><br>
        Password:<input type="password" name="password" required><br><br>
        <button type="submit">SAVE</button>
    </form>
@endsection
