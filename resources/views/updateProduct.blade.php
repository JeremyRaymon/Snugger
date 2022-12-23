@extends('layouts.layout')
@section('content')
<div class="container">
    <div class="row m-5 mb-0 pb-0 p-5 d-flex align-items-center">
        <div class="update-movie">
            <form action="/updateProduct" enctype="multipart/form-data" method="post">
                @csrf
                <input type="text" name="id_update" placeholder="Input Movie ID">
                <br><label for="insertImage">Insert Image : </label>
                <input type="file" name="image" id="insertImage">
                <br><input type="text" name="title" placeholder="Input Movie Title">
                <br><input type="text" name="description" placeholder="Input Description">
                <br><input type="text" name="genre" placeholder="Input Movie Genre">
                <br><input type="submit" value="Update">
            </form>
        </div>
    </div>
</div>