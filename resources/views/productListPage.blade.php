@extends('layouts.layout')
@section('content')
<div class="container-fluid p-0">
    <div class="row m-5 p-5 d-flex align-items-center">
        <h2 class="text-center mb-5" id="carousel-heading">Our Products</h2>
        @for ($i=0;$i<10; $i++)
        <section class="col-4" aria-labelledby="carousel-heading">
            <div class="card m-3 mx-auto rounded">
                <img src="{{asset('images/shoe.png')}}" class="img-fluid card-img-top"/>
                <div class="card-body">
                <hr>
                    <p class="card-subtitle">Category</p>
                    <h5 class="card-title">Shoe Name</h5>
                    <p class="card-text">Rp. 123.456.000,00</p>
                </div>
            </div>
        </section>
        @endfor
    </div>
</div>
@endsection

