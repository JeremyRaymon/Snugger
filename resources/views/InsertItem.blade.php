@extends('layouts.layout')
@section('content')
<div class="container d-flex justify-content-center bg-light">
    <div class="container-fluid p-0">
        <div class="row m-5 p-5 d-flex align-items-center">
            <h2 class="text-center mb-5" id="carousel-heading">Add Product</h2>
            <div class="insert-movie bg-primary">
                <form action="/upload-file" enctype="multipart/form-data" method="post">
                    @csrf
                    <label for="insertImage" >Upload  Image: </label>
                    <input type="file" name="image" id="insertImage">
                    <br><input type="text" name="description" placeholder="Input Description" class="mt-2 mb-2">
                    <br><input type="submit" value="Insert" class="mt-2 ms-3 mb-5">
                </form>
            </div>
        </div>    
    </div>    
</div>

@endsection