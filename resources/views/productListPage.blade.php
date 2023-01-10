@extends('layouts.layout')
@section('content')
<div class="container-fluid p-0">
    <div class="row m-5 p-5 d-flex align-items-center">
        <h2 class="text-center mb-5">Product List</h2>

        @foreach ($products as $product)
            @php
                $flag = false;    
            @endphp
            <section class="col-3">
                <div class="card m-3 mx-auto rounded">
                    @foreach ($wishItems as $item)
                        @if ($item->productId == $product->id)
                            <form action="/removeWishProduct/{{$product->id}}" method="post">
                                @csrf
                                <button type="submit" class="btn btn-danger btn-floating wish-icon" style="opacity: 100%">
                                    <i class="bi bi-heart-fill"></i>
                                </button>
                            </form>
                            @php
                            $flag = true;
                            @endphp
                            @break
                        @endif
                    @endforeach
                    
                    @if ($flag == false)
                    <form action="/addWishProduct/{{$product->id}}" method="post">
                        @csrf
                        <button type="submit" class="btn btn-danger btn-floating wish-icon">
                            <i class="bi bi-heart-fill"></i>
                        </button>
                    </form>
                    @endif

                    <img src="{{asset('images/' . $product->img)}}" class="img-fluid card-img-top"/>
                    <div class="card-body">
                    <hr>
                        <p class="card-subtitle">{{$product->category}}</p>
                        <h5 class="card-title">{{$product->name}}</h5>
                        <p class="card-text">Rp. {{$product->price}},00</p>
                    </div>
                </div>
            </section>

        @endforeach
       
    </div>

    <div class="row justify-content-center ms-1 me-1 page-pagination">
        <a href="{{$products->previousPageUrl()}}" class="text-dark btn-floating">
            <button type="button" class="btn btn-outline-dark btn-floating">
                <i class="bi bi-arrow-left fs-6"></i>
            </button>
        </a>
        @for ($i = 1; $i <= $products->lastPage(); $i++)
            @if ($i == $products->currentPage())
            <a href="{{$products->url($i)}}" style="color:white; opacity:100%" class="btn-floating">
                <button type="button" class="btn btn-dark btn-floating" >
                        {{$i}}
                </button>
            </a>
            @else
            <a href="{{$products->url($i)}}" style="color:white" class="btn-floating">
                <button type="button" class="btn btn-dark btn-floating">
                        {{$i}}
                </button>
            </a>
            @endif
        @endfor
        <a href="{{$products->nextPageUrl()}}" class="text-dark btn-floating">
            <button type="button" class="btn btn-outline-dark btn-floating">
                    <i class="bi bi-arrow-right fs-6"></i>
            </button>
        </a>
    </div>
</div>
@endsection

