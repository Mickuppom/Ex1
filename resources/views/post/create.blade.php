@extends('layout.master')

@section('content')
    <h1>Please Type information</h1>
    <form action="/post/store" method="post">
        @csrf
        Title: <input type="text" name="title" required><br><br>
        Thumbnail: <input type="text" name="thumbnail" required><br><br>
        User_ID: <input type="text" name="user_id" required><br><br>
        Category: <input type="text" name="category_id" required><br><br>
        Details: <input type="text" name="details" required><br><br>
        <button type="submit">SAVE</button>
    </form>
@endsection
