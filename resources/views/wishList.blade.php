@extends('layouts.layout')
@section('content')
<div class="container-fluid p-0">
    <div class="row m-5 p-5 d-flex align-items-center">
        <h2 class="text-center mb-5">Wish List</h2>
        @foreach ($wishItems as $item)
            <section class="col-3">
                <div class="card m-3 mx-auto rounded">
                    <form action="/removeWishProduct/{{$item->id}}" method="post">
                        @csrf
                        <button type="submit" class="btn btn-danger btn-floating wish-icon" style="opacity: 100%">
                            <i class="bi bi-heart-fill"></i>
                        </button>
                    </form>
                    <img src="{{asset('images/'.$item->img)}}" class="img-fluid card-img-top"/>
                    <div class="card-body">
                        <hr>
                        <p class="card-subtitle">{{$item->category}}</p>
                        <h5 class="card-title">{{$item->name}}</h5>
                        <p class="card-text">Rp. {{$item->price}},00</p>
                        
                        {{-- Add to Cart button --}}
                        {{-- <a class="btn btn-dark btn-rounded text-white w-100" href="/">Add to cart <i class="bi bi-cart-plus-fill"></i></a> --}}
                    </div>
                
                </div>
            </section>
        @endforeach
    </div>

    <div class="row justify-content-center ms-1 me-1 page-pagination">
        <a href="{{$wishItems->previousPageUrl()}}" class="text-dark btn-floating">
            <button type="button" class="btn btn-outline-dark btn-floating">
                <i class="bi bi-arrow-left fs-6"></i>
            </button>
        </a>
        @for ($i = 1; $i <= $wishItems->lastPage(); $i++)
            @if ($i == $wishItems->currentPage())
            <a href="{{$wishItems->url($i)}}" style="color:white; opacity:100%" class="btn-floating">
                <button type="button" class="btn btn-dark btn-floating" >
                        {{$i}}
                </button>
            </a>
            @else
            <a href="{{$wishItems->url($i)}}" style="color:white" class="btn-floating">
                <button type="button" class="btn btn-dark btn-floating">
                        {{$i}}
                </button>
            </a>
            @endif
        @endfor
        <a href="{{$wishItems->nextPageUrl()}}" class="text-dark btn-floating">
            <button type="button" class="btn btn-outline-dark btn-floating">
                    <i class="bi bi-arrow-right fs-6"></i>
            </button>
        </a>
    </div>
</div>
@endsection

