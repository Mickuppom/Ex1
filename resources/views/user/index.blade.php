@extends('layout.master')

@section('content')
    <h1>News Categories</h1>

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
                <td>แก้ไข | ลบ</td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
