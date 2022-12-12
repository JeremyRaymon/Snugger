<head>
    <style>
        table {border-collapse:collapse; table-layout:fixed;}
        table td {word-wrap:break-word;}
    </style>
</head>
@extends('layout')
@section('title', 'Home')
@section('content')
<h1>Manage Item</h1>
<table class="table m-2">
    <thead>
        <tr>
            <th scope="col" width="100">Item ID</th>
            <th scope="col" width="120">Item Image</th>
            <th scope="col">Item Name</th>
            <th scope="col">Item Description</th>
            <th scope="col" width="100">Item Price</th>
            <th scope="col" width="100">Item Category</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($products as $p)
        <tr>
            <td>{{ $p->id }}</td>
            <td>
                <img width="96px" height="96px" src="{{ Storage::url('images/' . $p->img . '.png') }}" alt="Image Not Found">
            </td>
            <td>{{ $p->name }}</td>
            <td>{{ $p->desc }}</td>
            <td>{{ $p->price }}</td>
            <td>{{ $p->category }}</td>
            <td class="d-flex">
                <a class="btn btn-outline-primary mb-auto mx-1" href="/updateItemPage/{{ $p->id }}">Update</a>
                <form action="/deleteItem/{{ $p->id }}" method="POST">
                    {{ method_field('DELETE') }}
                    @csrf
                    <!--<input type="hidden" name="id" value="id">-->
                    <input class="btn btn-outline-primary" type="submit" name="delete" value="delete">
                </form>
            </td>

        </tr>
        @endforeach
    </tbody>
</table>
@endsection
