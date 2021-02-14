@extends('layout.master')

@section('content')
    <h1>News Categories</h1>

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
                <td>แก้ไข | ลบ</td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
