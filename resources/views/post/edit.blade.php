@extends('layout.master')

@section('content')
    <h1>Please Type information</h1>
    <form action="/post/update/{{$post->id}}" method="post">
        @csrf
        Title: <input type="text" name="title" value="{{$post->title}}" required><br><br>
        Thumbnail: <input type="text" name="thumbnail" value="{{$post->thumbnail}}" required><br><br>
        User_ID: <input type="text" name="user_id" value="{{$post->user_id}}" required><br><br>
        Category: <input type="text" name="category_id" value="{{$post->category_id}}" required><br><br>
        Details: <input type="text" name="details" value="{{$post->details}}" required><br><br>
        <button type="submit">SAVE</button>
    </form>
@endsection
