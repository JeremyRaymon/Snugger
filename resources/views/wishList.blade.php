@extends('layouts.layout')
@section('content')
<div class="container-fluid p-0">
    <div class="row m-5 p-5 d-flex align-items-center">
        <h2 class="text-center mb-5">Wish List (9)</h2>
        @for ($i=0;$i<9; $i++)
        <section class="col-3">
            <div class="card m-3 mx-auto rounded">
                <button type="button" class="btn btn-danger btn-floating wish-icon" style="opacity: 100%">
                    <i class="bi bi-heart-fill"></i>
                </button>
                <img src="{{asset('images/shoe.png')}}" class="img-fluid card-img-top"/>
                <div class="card-body">
                    <hr>
                    <p class="card-subtitle">Category</p>
                    <h5 class="card-title">Shoe Name</h5>
                    <p class="card-text">Rp. 123.456.000,00</p>
                    <a class="btn btn-dark btn-rounded text-white w-100" href="/">Add to cart <i class="bi bi-cart-plus-fill"></i></a>
                </div>
            
            </div>
        </section>
        @endfor
    </div>

    <div class="row justify-content-center ms-1 me-1 page-pagination">
        <button type="button" class="btn btn-outline-dark btn-floating">
            <a href="" class="text-dark">
                <i class="bi bi-arrow-left fs-6"></i>
            </a>
        </button>
        <button type="button" class="btn btn-dark btn-floating" style="opacity: 100%">
            <a href="" style="color:white">
                1
            </a>
        </button>
        <button type="button" class="btn btn-dark btn-floating">
            <a href="" style="color:white">
                2
            </a>
        </button>
        <button type="button" class="btn btn-dark btn-floating">
            <a href="" style="color:white">
                3
            </a>
        </button>
        <button type="button" class="btn btn-dark btn-floating">
            <a href="" style="color:white">
                ...
            </a>
        </button>
        <button type="button" class="btn btn-outline-dark btn-floating">
            <a href="" class="text-dark">
                <i class="bi bi-arrow-right fs-6"></i>
            </a>
        </button>
    </div>
</div>
@endsection

