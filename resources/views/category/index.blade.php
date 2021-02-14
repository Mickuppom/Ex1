@extends('layout.master')

@section('content')
    <h1>News Categories</h1>
    <a href="/category/create">Add new category</a><br><br>
    <table>
        <thead>
            <tr>
                <td>NO.</td>
                <td>Name</td>
                <td>Create Date</td>
                <td>Manage</td>
            </tr>
        </thead>
        <tbody>
            @foreach($categories as $item)
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->name}}</td>
                <td>{{$item->created_at}}</td>
                <td><a href="/category/edit/{{$item->id}}"> แก้ไข</a> | <a href="/category/delete/{{$item->id}}">ลบ</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection

