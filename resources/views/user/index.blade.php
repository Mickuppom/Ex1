@extends('layout.master')

@section('content')
    <h1>User</h1>
    <a href="/user/create">Add new user</a><br><br>
    <table>
        <thead>
            <tr>
                <td>NO.</td>
                <td>Name</td>
                <td>UserName</td>
                <td>Create Date</td>
                <td>Manage</td>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
            <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->username}}</td>
                <td>{{$user->created_at}}</td>
                <td><a href="/user/edit/{{$user->id}}"> แก้ไข</a> | <a href="/user/delete/{{$user->id}}">ลบ</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
