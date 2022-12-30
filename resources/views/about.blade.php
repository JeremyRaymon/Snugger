@extends('layouts.layout')
@section('content')
<style>
    .about-container {
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .about-container span {
        position: absolute;
        font-size: 54px;
        opacity: 1;
        text-align: center;
        vertical-align: middle;
    }
    .about-container .text-about {
        color: rgba(88, 119, 146, 1);
        font-family: 'Poppins';
        font-weight: 600;
        transform: rotate(-90deg);
    }
    .about-container .text-snugger {
        color: #F4E04D;
        position: absolute;
        font-family: 'Comfortaa';
        font-weight: 700;
        transform: rotate(-90deg);
    }
    .about-container .text-heading {
        color: #587792;
        font-family: 'Comfortaa';
        font-weight: 700;
        font-size: 30px;
    }
    .about-container .text-team {
        color: #F2ED6F;
        font-family: 'Poppins';
        font-weight: 500;
        font-size: 45px;
    }
    .comfortaa {
        font-family: 'Comfortaa' !important;
        margin-bottom: unset;
    }
    .about-container .text-subtitle {
        font-weight: 400;
        font-size: 25px;
        line-height: 37.5px;
    }
    .about-container .text-story {
        color: #587792;
        font-family: 'Poppins';
        font-weight: 400;
        font-size: 25px;
        line-height: 37.5px;
        word-wrap: break-word;
        max-width: 600px;
    }
    .about-container .text-snugger-story {
        color: #587792;
        font-family: 'Poppins';
        font-weight: 500;
        font-size: 45px;
        display: inline-flex;
    }
    .about-container .text-snugger2 {
        color: #587792;
        position: absolute;
        font-family: 'Comfortaa';
        font-weight: 700;
        font-size: 48px;
    }
    .about-container .text-snugger-vm {
        color: #F4E04D;
        position: absolute;
        font-family: 'Poppins';
        font-weight: 600;
        font-size: 45px;
        transform: rotate(-90deg);
        line-height: 45px;
    }
</style>
<div class="container-fluid p-0 mt-5">
    <div class="row">
        <div class="col-12 col-lg-3 about-container" style="background: #F4E04D; height: 779px;">
            <span class="text-about">ABOUT US</span>
        </div>
        <div class="col-12 col-lg-6 about-container" style="background: #CEE397">
            <span class="text-heading">All you need to know about snugger!</span>
        </div>
        <div class="col-12 col-lg-3 about-container" style="background: #587792">
            <span class="text-snugger">snugger</span>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-lg-5 about-container" style="background: #587792; height: 779px;">
            <span class="text-team"><p class="comfortaa">snugger's</span> Team <br> <p class="text-subtitle">Take a look at who are behind this company</p></span>
        </div>
        <div class="col-12 col-lg-7">

        </div>
    </div>
    <div class="row">
        <div class="col-1" style="background: #F4E04D; height: 779px;">

        </div>
        <div class="col-6 about-container" style="background: white;">
            <span class="text-story">Snugger is an authentic online marketplace for sneakers in Indonesia which was established in 2022. Snugger strives to create a safe and efficient marketplace for buyers to buy their dream sneakers without worrying about the originality. Snugger provides a valid authentication process to ensure the item is 100% authentic as expected by the consumer.</span>
        </div>
        <div class="col-12 col-lg-5 about-container" style="background: #CEE397">
            <span class="text-snugger-story"><p class="comfortaa">snugger's</p>&nbsp;Story</span>
        </div>
    </div>
    <div class="row">
        <div class="col-3 about-container" style="background: #587792; height: 779px;">
            <span class="text-snugger-vm"><p class="comfortaa">snugger's</p><br>Vision and Mission</span>
        </div>
        <div class="col-9 about-container" style="background: #FFFFFF">

        </div>
    </div>
    <div class="row">
        <div class="col-12 about-container" style="background: #F4E04D; height: 779px;">
            <span class="text-snugger2">snugger</span>
        </div>
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
