@extends('layouts.layout')
@section('content')
    <div class="container-fluid p-0 mt-5">
        <section>
            <div class="container py-5">
                <div class="row d-flex justify-content-center">
                    <div class="col-6">
                        <nav aria-label="breadcrumb" class="bg-light rounded-3 p-3 mb-4">
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item"><a class="text-dark" href="{{ route('home') }}">Home</a></li>
                                <li class="breadcrumb-item"><a class="text-dark" href="{{ route('user.show') }}">Profile</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Change Password</li>
                            </ol>
                        </nav>
                    </div>
                </div>

                <form action="{{ route('user.password.update', auth()->user()->id) }}" method="post">
                    @csrf
                    @method('PATCH')
                    <div class="row d-flex justify-content-center">
                        <div class="col-6">
                            <div class="card mb-4">
                                <div class="card-header text-white bg-dark">Change Password</div>
                                <div class="card-body">
                                    <!-- Form Row-->
                                    <div class="row gx-3 mb-3">
                                        <!-- Form Group (password)-->
                                        <div class="col-md-12">
                                            <label class="small mb-1" for="password">New password</label>
                                            <input class="form-control" name="password" id="password" type="password"
                                                placeholder="Enter your new password">
                                            @error('password')
                                                <p class="text text-danger mb-0">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <!-- Form Row-->
                                    <div class="row gx-3 mb-3">
                                        <!-- Form Group (password confirmation)-->
                                        <div class="col-md-12">
                                            <label class="small mb-1" for="password_confirmation">Password
                                                confirmation</label>
                                            <input class="form-control" name="password_confirmation"
                                                id="password_confirmation" type="password"
                                                placeholder="Enter your password confirmation">
                                            @error('password_confirmation')
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
