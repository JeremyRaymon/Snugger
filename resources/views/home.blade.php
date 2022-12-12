@extends('layouts.layout')
@section('content')
<div class="container-fluid p-0">
    <div class="row m-5 d-flex align-items-center justify-content-center flex-column text-center vh-100">
        <svg style="position: absolute" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
            <path fill="#332D2D" d="M44.5,-17.2C50.9,5.2,44.6,29,26.5,43.8C8.4,58.7,-21.5,64.8,-38.8,52.4C-56.1,40.1,-60.7,9.4,-52.2,-15.9C-43.6,-41.3,-21.8,-61.4,-1.4,-61C19.1,-60.5,38.2,-39.6,44.5,-17.2Z" transform="translate(105 100)" />
        </svg>
        <div class="text-white" style="z-index: 1">
            <h1 class="display-1 " style="font-size: 144px;font-family: 'Open Sans', sans-serif;" >Snugger</h1>
            <h5 class="" style="font-family: 'Source Sans Pro', sans-serif;">Footwears Designed For The Average, The Unaverage, And The Very Unaverage. <br/> Find The Shoes That Suit Your Taste</h5>
        </div>
    </div>
    <div class="row m-5 d-flex align-items-center vh-100">
        <div class="col px-5 m-5 d-flex align-items-center justify-content-center flex-column">
            <svg style="position: absolute" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                <path fill="#332D2D" d="M39,-22.3C52.9,1.7,68.4,25.1,62.1,39.5C55.9,53.9,27.9,59.3,0.6,59C-26.7,58.6,-53.3,52.4,-66.1,34.2C-79,16,-77.9,-14.2,-64.6,-37.8C-51.3,-61.4,-25.6,-78.4,-6.6,-74.6C12.5,-70.8,25,-46.2,39,-22.3Z" transform="translate(100 100)" />
            </svg>
            <div style="z-index: 1" class="text-light px-5">
                <h1 class="mx-auto">NIKE COURT SUEDE</h1>
                <p class="me-5 pe-5">Honouring its history rooted in tennis culture, the NikeCourt Legacy Suede brings you a classic, easy-to-wear design. Crafted from luscious suede and featuring heritage details like the Swoosh licence plate on the back.</p>
                <button type="button" class="btn btn-white w-100">Detail</button>
            </div>
        </div>
        <div class="col text-center p-0">
            <img class="" style="border-radius: 32px;" height="600px" src="{{asset('images/highlightShoe4.jpg')}}" alt="Image not found">
        </div>
    </div>

    <div class="row m-0 d-flex align-items-center vh-100" style="position: relative">
        <svg class="p-0" style="position: absolute" viewBox="0 0 200 200" height="150%" xmlns="http://www.w3.org/2000/svg">
            <path fill="#332D2D" d="M57.6,-17.2C65.2,4.8,55.4,33.8,33.3,51.2C11.2,68.5,-23.3,74,-44,59.3C-64.8,44.5,-71.8,9.5,-62.1,-15.3C-52.5,-40,-26.2,-54.4,-0.6,-54.2C25,-54,49.9,-39.1,57.6,-17.2Z" transform="translate(200 90)" />
        </svg>
        <div class="col text-center mx-5">
            <img class="" style="border-radius: 32px;" height="500px" src="{{asset('images/highlightShoe.jpg')}}" alt="Image not found">
        </div>
        <div class="col px-5 m-5 d-flex align-items-center justify-content-center flex-column">
            <div style="z-index: 1" class="text-light">
                <h1 class="mx-auto">NIKE COURT SUEDE</h1>
                <p>Honouring its history rooted in tennis culture, the NikeCourt Legacy Suede brings you a classic, easy-to-wear design. Crafted from luscious suede and featuring heritage details like the Swoosh licence plate on the back.</p>
                <button type="button" class="btn btn-white w-100">Detail</button>
            </div>
        </div>

    </div>

    <div class="row m-5 p-5 d-flex align-items-center vh-100" style="position: relative">
        <section class="splide" aria-labelledby="carousel-heading" data-splide='{"type":"loop","perPage":3, "focus":0, "gap":"32px", "padding":"24px"}'>
            <h2 class="text-center mb-5" id="carousel-heading">Our Latest Product</h2>
            <div class="splide__arrows"></div>
            <div class="splide__track m-4">
                  <ul class="splide__list mx-auto">
                    @for ($i=0;$i<5; $i++)
                    <li class="splide__slide">
                        <div class="card m-3 mx-auto rounded">
                            <img src="{{asset('images/shoe.png')}}" class="img-fluid card-img-top"/>
                            <div class="card-body">
                            <hr>
                                <p class="card-subtitle">Category</p>
                                <h5 class="card-title">Shoe Name</h5>
                                <p class="card-text">Rp. 123.456.000,00</p>
                            </div>
                        </div>
                      </li>
                    @endfor
                  </ul>
            </div>
          </section>
    </div>
</div>
<script>
    new Splide( '.splide', {
        type   : 'loop',
        perPage: 3,
        perMove: 1,
    } ).mount();
</script>
@endsection
