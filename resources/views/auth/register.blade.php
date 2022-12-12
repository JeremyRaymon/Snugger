@extends('layouts.auth')
@section('title', 'Login')
@section('main')
    <section class="bg-dark">
        <div class="container-fluid p-0" style="overflow-x: hidden;">
            <svg class="position-absolute" id="visual" width="100vw" height="100vh" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"><defs><linearGradient id="grad1_0" x1="43.8%" y1="0%" x2="100%" y2="100%"><stop offset="14.444444444444446%" stop-color="#001220" stop-opacity="1"></stop><stop offset="85.55555555555554%" stop-color="#001220" stop-opacity="1"></stop></linearGradient></defs><defs><linearGradient id="grad2_0" x1="0%" y1="0%" x2="56.3%" y2="100%"><stop offset="14.444444444444446%" stop-color="#001220" stop-opacity="1"></stop><stop offset="85.55555555555554%" stop-color="#001220" stop-opacity="1"></stop></linearGradient></defs><g transform="translate(1920, 0)"><path d="M0 972C-140.2 971 -280.3 969.9 -372 898C-463.6 826.1 -506.8 683.2 -588.3 588.3C-669.9 493.4 -789.8 446.3 -860.1 356.3C-930.5 266.2 -951.2 133.1 -972 0L0 0Z" fill="#715DF2"></path></g><g transform="translate(0, 1080)"><path d="M0 -972C130.3 -962.9 260.6 -953.9 372 -898C483.3 -842.2 575.6 -739.5 635.7 -635.7C695.7 -531.9 723.5 -426.8 774.2 -320.7C824.9 -214.5 898.4 -107.3 972 0L0 0Z" fill="#715DF2"></path></g></svg>
            <div class="row d-flex align-items-center justify-content-center vh-100">
                <div class="col">
                    <div class="card m-5 my-3 p-5 py-3">
                        <form enctype="multipart/form-data" action="/register" method="post">
                            @csrf
                            <div class="card-body">
                                <h3 class="card-title text-center mb-5">Sign Up</h3>
                                <!-- 2 column grid layout with text inputs for the first and last names -->
                                <div class="row">
                                    <div class="col-md-6 mb-4">
                                    <div class="form-outline">
                                        <input type="text" id="firstName" class="form-control" name="firstName"/>
                                        <label class="form-label" for="firstName">First name</label>
                                        <hr class="mt-2">
                                    </div>
                                    </div>
                                    <div class="col-md-6 mb-4">
                                    <div class="form-outline">
                                        <input type="text" id="lastName" class="form-control" name="lastName"/>
                                        <label class="form-label" for="lastName">Last name</label>
                                        <hr class="mt-2">
                                    </div>
                                    </div>
                                </div>
                                <!-- Email input -->
                                <div class="form-outline mb-4">
                                    <input type="email" id="email" class="form-control" name="email"/>
                                    <label class="form-label" for="email">Email address</label>
                                    <hr>
                                </div>
                                <!-- Password input -->
                                <div class="row">
                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline mb-4">
                                            <input type="password" id="password" class="form-control" name="password"/>
                                            <label class="form-label" for="password">Password</label>
                                            <hr>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline mb-4">
                                            <input type="password" id="confirm_password" class="form-control" name="confirm_password"/>
                                            <label class="form-label" for="confirm_password">Confirm Password</label>
                                            <hr>
                                        </div>
                                    </div>
                                </div>


                                <!-- Email input -->
                                <div class="form-outline mb-4">
                                    <input type="text" id="address" class="form-control" name="address"/>
                                    <label class="form-label" for="address">Address</label>
                                    <hr>
                                </div>
                                <!-- Email input -->
                                <div class="form-outline mb-4">
                                    <input type="tel" id="phone" class="form-control" name="phone"/>
                                    <label class="form-label" for="phone">Phone Number</label>
                                    <hr>
                                </div>
                                <input class="btn btn-primary btn-block" type="submit" value="Sign In">

                                <p class="mt-3">Already have an account? <a href="/login" class="text-primary">Sign In Now.</a></p>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col m-5 text-center text-white" style="z-index: 1">
                    <h1 class="display-1" style="font-size: 120px;font-family: 'Open Sans', sans-serif">Snugger</h1>
                    <p>A Curation of Footwears That Are Chosen To Fits Your Needs and Likes. Find The Best Shoes That Suit Your Particular Tastes Easily. Register Now To Start Your Journey.</p>
                </div>
            </div>
        </div>
    </section>
@endsection
