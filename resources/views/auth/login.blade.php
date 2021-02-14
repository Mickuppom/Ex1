@extends('layout.master')

@section('content')
    <h1>Please Type information</h1>
    <form action="/auth/doLogin" method="post">
        @if($errors->any())
            @foreach($errors->all() as $item)
                {{$item}}
            @endforeach
        @endif
        @csrf
        <br>
        E-mail:<input type="email" name="email" required><br><br>
        Password:<input type="password" name="password" required><br><br>
        <button type="submit">SAVE</button>
    </form>
@endsection
