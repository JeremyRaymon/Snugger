@extends('layouts.auth')
@section('title', 'Login')
@section('main')
    <section class="" style="background-color: #F4E04D">
        <div class="container-fluid p-0" style="overflow-x: hidden;">
            <svg class="position-absolute" id="visual" width="100vw" height="100vh" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1">
                <defs><linearGradient id="grad1_0" x1="43.8%" y1="0%" x2="100%" y2="100%"><stop offset="14.444444444444446%" stop-color="#ffffff" stop-opacity="1"></stop><stop offset="85.55555555555554%" stop-color="#ffffff" stop-opacity="1"></stop></linearGradient></defs><defs><linearGradient id="grad2_0" x1="0%" y1="0%" x2="56.3%" y2="100%"><stop offset="14.444444444444446%" stop-color="#ffffff" stop-opacity="1"></stop><stop offset="85.55555555555554%" stop-color="#ffffff" stop-opacity="1"></stop></linearGradient></defs><g transform="translate(1920, 0)"><path class="blob1" d="M0 972C-128.7 949.7 -257.4 927.4 -360.1 869.4C-462.8 811.3 -539.6 717.4 -633.6 633.6C-727.5 549.7 -838.7 475.9 -898 372C-957.3 268 -964.6 134 -972 0L0 0Z" fill="#001122"></path></g><g transform="translate(0, 1080)"><path class="blob2" d="M0 -972C133.7 -964.2 267.4 -956.4 372 -898C476.6 -839.6 552.1 -730.6 637.1 -637.1C722.1 -543.6 816.6 -465.6 874 -362C931.4 -258.4 951.7 -129.2 972 0L0 0Z" fill="#001122"></path></g>
            </svg>
            <div class="row d-flex align-items-center justify-content-center vh-100">
                <div class="col m-5 text-center text-white" style="z-index: 1">
                    <h1 class="mb-3 animatedText" style="font-size: 144px;font-family: 'Open Sans', sans-serif;">
                        Snugger
                    </h1>
                    <h5 style="font-family: 'Source Sans Pro', sans-serif;">
                        Life isn't Perfect But Your Sneakers Can Be.
                        Through Our Curated Catalogues of Personalized Products,
                        Find Footwears That Are Perfect For You Now.
                    </h5>
                </div>
                <div class="col px-5">
                    <div class="card m-5 p-5">
                        <form action="/login" method="post">
                            @csrf
                            <div class="card-body">
                                <h3 class="card-title text-center">Sign In</h3>
                                <!-- Email input -->
                                <div class="form-outline mb-4">
                                    <input type="email" id="email" class="form-control" name="email"/>
                                    <label class="form-label" for="email">Email address</label>
                                    <hr>
                                </div>

                                <!-- Password input -->
                                <div class="form-outline mb-4">
                                    <input type="password" id="password" class="form-control" name="password"/>
                                    <label class="form-label" for="password">Password</label>
                                    <hr>
                                </div>
                                <!-- Checkbox -->
                                <div class="form-check mb-4">
                                    <input class="form-check-input me-2" type="checkbox" value="" id="remember" checked />
                                    <label class="form-check-label" for="remember">
                                    Remember Me
                                    </label>
                                </div>
                                <input class="btn btn-primary btn-block" type="submit" value="Sign In">

                                <p class="mt-3">Don't Have an account? <a href="/register" class="text-primary">Sign Up Now.</a></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
