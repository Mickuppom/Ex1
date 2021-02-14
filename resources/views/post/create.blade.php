@extends('layout.master')

@section('content')
    <h1>Please Type information</h1>
    <form action="/post/store" method="post">
        @csrf
        Title: <input type="text" name="title" required><br><br>
        Thumbnail: <input type="file" name="thumbnail" required><br><br>
        Category: <select name="category_id" id="">
            <option value=""> </option>
        </select><br><br>
        Details: <textarea name="details" id="" cols="30" rows="10"></textarea><br><br>
        <button type="submit">SAVE</button>
    </form>
@endsection
