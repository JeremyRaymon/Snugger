@extends('layouts.layout')
@section('content')
<div class="container">
    <div class="row m-5 mb-0 pb-0 p-5 d-flex align-items-center">
        <h2 class="text-center mb-5" id="carousel-heading">View Product</h2>
        <table class="table table-bordered border-dark">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Category</th>
                    <th scope="col">Description</th>
                    <th scope="col">Product Image</th>
                    <th scope="col">Update</th>
                    <th scope="col">Delete</th>
                </tr>
            </thead>
            <tbody style="">
                @foreach ($products as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->name}}</td>
                        <td>{{$item->price}}</td>
                        <td>{{$item->category}}</td>
                        <td>{{$item->desc}}</td>
                        <td><img width="200px" height="200px" src="{{asset('/public/images/' . $item->img . '.png')}}" alt="Image not found"></td>
                        <td>
                            <form action="/updateProduct" method="get">
                                @csrf
                                <input type="submit" value="Update" class="btn btn-dark">
                            </form>
                        </td>
                        <td>
                            <form action="/deleteProduct/{{$item->id}}" method="post">
                                @csrf
                                <input type="submit" value="Delete" class="btn btn-dark">
                            </form>
                        </td>
                    </tr>  
                @endforeach
            </tbody>
        </table>
    </div>
</div>

{{-- <div>
    <a href="{{$products->previousPageUrl()}}">&laquo;</a>
    @for ($i = 1; $i <= $products->lastPage(); $i++)
        @if ($i == $products->currentPage())
            <b><a href="{{$products->url($i)}}">{{$i}}</a></b>
        @else
            <a href="{{$products->url($i)}}">{{$i}}</a>
        @endif
        
    @endfor
    <a href="{{$products->nextPageUrl()}}">&raquo;</a>
</div> --}}

{{-- <div class="container">
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Price</th>
                <th>Category</th>
                <th>Description</th>
                <th>Product Image</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody style="">
            @foreach ($products as $item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->name}}</td>
                    <td>{{$item->price}}</td>
                    <td>{{$item->category}}</td>
                    <td>{{$item->desc}}</td>
                    <td><img src="" alt=""></td>
                    <td></td>
                </tr>  
            @endforeach
        </tbody>
    </table>
<div> --}}

@endsection