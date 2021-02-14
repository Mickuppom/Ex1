@extends('layout.master')

@section('content')
    <h1>Please Type information</h1>
    <form action="/category/update/{{$category->id}}" method="post">
        @csrf
        <input type="text" name="name" value="{{$category->name}}" required>
        <button type="submit">SAVE</button>
    </form>
@endsection
