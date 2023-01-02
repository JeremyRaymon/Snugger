@extends('layouts.layout')
@section('content')
<div class="container-fluid p-0">
    <div class="row m-5 p-5 d-flex align-items-center">
        <h2>Shopping Cart</h2>
        <h6 class="mb-4" style="font-weight: 400">3 item(s)</h6>
        <section class="row">

            {{-- Product List --}}
            <div class="col">
                @for ($i=0;$i<3; $i++)
                    <div class="card mb-3 rounded product-card">
                        <div class="row">
                            <div class="col">
                                <img src="{{asset('images/shoe.png')}}" class="img-fluid card-img-top"/>
                            </div>
                            <div class="col">
                                <div class="card-body">
                                    <p class="card-subtitle">Category</p>
                                    <h5 class="card-title">Shoe Name</h5>
                                    <p class="card-text m-0">Size : 20</p>
                                    <p class="card-text">Price : Rp. 123.456.000,00</p>
                                    {{-- Product's Quantity --}}
                                    {{-- <form action="" method="post"> --}}
                                        <div class="input-group w-50">
                                            <button class="input-group-text text-center decrement-qty">-</button>
                                            <input type="text" name="product-quantity" class="form-control text-center input-qty" value="1" readonly>
                                            <button class="input-group-text text-center increment-qty">+</button>
                                        </div>
                                    {{-- </form> --}}
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                @endfor
            </div>

            {{-- Transaction Details Card --}}
            <div class="col card transaction-card">
                <div class="card-body">
                    <a class="btn btn-rounded w-100 mb-3 checkout-btn fs-6" href="">Checkout <i class="bi bi-cart-fill"></i></a>
                    <h4 class="card-title text-white mb-3">Transaction Detail</h4>
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <p class="card-text">Product</p>
                                    <p class="card-text">Sub Total</p>
                                    <p class="card-text">Tax</p>
                                    <p class="card-text">Shipping</p>
                                </div>
                                <div class="col">
                                    <p class="card-text">3 item(s)</p>
                                    <p class="card-text">Rp. 123.456.000,00</p>
                                    <p class="card-text">Rp. 12.345.600,00</p>
                                    <p class="card-text">FREE</p>
                                </div>
                            </div>
                            <div class="row mt-3 pt-3 border-top">
                                <div class="col">
                                    <h5 class="card-text fw-bold">Total</h5>
                                </div>
                                <div class="col">
                                    <h5 class="card-text fw-bold">Rp. 135.801.600,00</h5>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Search Promo Code --}}
                    <div class="card mt-3">
                        <div class="card-body">
                            <form action="" method="post" class="input-group">
                                <input type="search" name="promo-code" class="form-control border border-dark" placeholder="Enter promo code..."/>
                                <button type="button" class="btn btn-dark">
                                    <i class="bi bi-ticket-fill"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>  
            </div>
            
        </section>
    </div>
</div>

@endsection