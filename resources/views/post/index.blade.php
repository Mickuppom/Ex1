@extends('layout.master')

@section('content')
    <h1>News Post</h1>
    <a href="/post/create">Add new post</a><br><br>
    <table>
        <thead>
            <tr>
                <td>NO.</td>
                <td>Title</td>
                <td>Thumbnail</td>
                <td>User</td>
                <td>Category</td>
                <td>Create Date</td>
                <td>Manage</td>
            </tr>
        </thead>
        <tbody>
            @foreach($posts as $item)
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->title}}</td>
                <td>{{$item->thumbnail}}</td>
                <td>{{$item->user_id}}</td>
                <td>{{$item->category_id}}</td>
                <td>{{$item->created_at}}</td>
                <td><a href="/post/edit/{{$item->id}}"> แก้ไข</a> | <a href="/post/delete/{{$item->id}}">ลบ</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection

