@extends('layout.master')

@section('content')
    <h1>Please Type information</h1>
    <form action="/category/store" method="post">
        @csrf
        <input type="text" name="name" required>
        <button type="submit">SAVE</button>
    </form>
@endsection
