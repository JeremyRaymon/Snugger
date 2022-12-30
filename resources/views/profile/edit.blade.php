@extends('layouts.layout')
@section('content')
    <div class="container-fluid p-0 mt-5">
        <section>
            <div class="container py-5">
                <div class="row">
                    <div class="col">
                        <nav aria-label="breadcrumb" class="bg-light rounded-3 p-3 mb-4">
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item"><a class="text-dark" href="{{ route('home') }}">Home</a></li>
                                <li class="breadcrumb-item"><a class="text-dark" href="{{ route('user.show') }}">Profile</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Edit Profile</li>
                            </ol>
                        </nav>
                    </div>
                </div>

                <form action="{{ route('user.update', auth()->user()->id) }}" method="post">
                    @csrf
                    @method('PATCH')
                    <div class="row">
                        <div class="col-xl-4">
                            <!-- Profile picture card-->
                            <div class="card mb-4 mb-xl-0">
                                <div class="card-header text-white bg-dark">Profile Picture</div>
                                <div class="card-body text-center">
                                    <!-- Profile picture image-->
                                    <img class="img-account-profile rounded-circle mb-2"
                                        src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(31).webp"
                                        style="width: 150px;" alt="">
                                    <!-- Profile picture help block-->
                                    {{-- <div class="small font-italic text-muted mb-4">JPG or PNG no larger than 5 MB</div> --}}
                                    <!-- Profile picture upload button-->
                                    {{-- <button class="btn btn-primary" type="button">Upload new image</button> --}}
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-8">
                            <!-- Account details card-->
                            <div class="card mb-4">
                                <div class="card-header text-white bg-dark">Account Details</div>
                                <div class="card-body">
                                    <!-- Form Row-->
                                    <div class="row gx-3 mb-3">
                                        <!-- Form Group (first name)-->
                                        <div class="col-md-6">
                                            <label class="small mb-1" for="firstName">First name</label>
                                            <input class="form-control" name="firstName" id="firstName" type="text"
                                                placeholder="Enter your first name"
                                                value="{{ old('firstName', auth()->user()->firstName) }}">
                                            @error('firstName')
                                                <p class="text text-danger mb-0">{{ $message }}</p>
                                            @enderror
                                        </div>
                                        <!-- Form Group (last name)-->
                                        <div class="col-md-6">
                                            <label class="small mb-1" for="lastName">Last name</label>
                                            <input class="form-control" name="lastName" id="lastName" type="text"
                                                placeholder="Enter your last name"
                                                value="{{ old('lastName', auth()->user()->lastName) }}">
                                            @error('lastName')
                                                <p class="text text-danger mb-0">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <!-- Form Row        -->
                                    <div class="row gx-3 mb-3">
                                        <!-- Form Group (location)-->
                                        <div class="col-md-12">
                                            <label class="small mb-1" for="address">Address</label>
                                            <input class="form-control" name="address" id="address" type="text"
                                                placeholder="Enter your address"
                                                value="{{ old('address', auth()->user()->address) }}">
                                            @error('address')
                                                <p class="text text-danger mb-0">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <!-- Form Group (email address)-->
                                    <div class="mb-3">
                                        <label class="small mb-1" for="email">Email address</label>
                                        <input class="form-control" name="email" id="email" type="email"
                                            placeholder="Enter your email address"
                                            value="{{ old('email', auth()->user()->email) }}">
                                        @error('email')
                                            <p class="text text-danger mb-0">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <!-- Form Row-->
                                    <div class="row gx-3 mb-3">
                                        <!-- Form Group (phone number)-->
                                        <div class="col-md-12">
                                            <label class="small mb-1" for="phone">Phone number</label>
                                            <input class="form-control" name="phone" id="phone" type="tel"
                                                placeholder="Enter your phone number"
                                                value="{{ old('phone', auth()->user()->phone) }}">
                                            @error('phone')
                                                <p class="text text-danger mb-0">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card mb-4">
                                <!-- Save changes button-->
                                <button class="btn btn-dark" type="submit">Save changes</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </section>
    </div>
@endsection
