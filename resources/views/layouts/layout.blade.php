<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Snugger</title>

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Comfortaa:700&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@800&display=swap" rel="stylesheet">
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.1/mdb.min.css" rel="stylesheet" />
    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.1/mdb.min.js"></script>
    <!--Splidejs (For Carousel)-->
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css">
    <!--Splidejs (For Carousel)-->

    {{-- Style --}}
    <link rel="stylesheet" href="{{Storage::url('css/style.css')}}">

    {{-- Icon --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

    {{-- Jquery --}}
    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous" async></script>

    {{-- Java Script --}}
    <script src="{{Storage::url('js/script.js')}}" async></script>

</head>

<body class="" style="background-color: #F4E04D">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top shadow-0">
        <!-- Container wrapper -->
        <div class="container-fluid">
            <!-- Toggle button -->
            <button class="navbar-toggler" type="button" data-mdb-toggle="collapse"
                data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>

            <!-- Collapsible wrapper -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Navbar brand -->
                <a class="navbar-brand mx-5 text-dark" href="{{route('home')}}" style="font-family: 'Open Sans', sans-serif">
                    Snugger
                </a>
                <form class="d-flex input-group w-25 mx-auto ms-1">
                    <div class="form-outline">
                        <input type="search" id="form1" class="form-control border border-dark" />
                        <label class="form-label" for="form1">Search</label>
                    </div>
                    <button type="button" class="btn btn-dark">
                        <i class="fas fa-search"></i>
                    </button>
                </form>
                <!-- Left links -->
                <ul class="navbar-nav">
                    <li class="nav-item me-2">
                        <a class="nav-link" href="#">Products</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link" href="{{route('about')}}">About Us</a>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    @if (!Auth::check())
                        <li class="nav-item mx-2">
                            <a class="nav-link text-black" href="/login">Login</a>
                        </li>
                        <li class="nav-item mx-2 my-auto">
                            <a class="btn btn-dark btn-rounded text-white" href="/register">Register</a>
                        </li>
                    @else
                        @if (Auth::user()->role == 'admin')
                            <li class="nav-item me-3 me-lg-0 dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                    data-mdb-toggle="dropdown" aria-expanded="false">
                                    <i class="fas fa-plus"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="/viewProducts">View Products</a></li>
                                    <li><a class="dropdown-item" href="#">Add Product</a></li>
                                    <li>
                                        <hr class="dropdown-divider" />
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                    </li>
                                </ul>
                            </li>
                        @endif
                        <a class="nav-link" href="#">
                            <i class="fas fa-receipt"></i>
                        </a>
                        <a class="nav-link" href="#">
                            <i class="fas fa-heart"></i>
                        </a>
                        <a class="nav-link" href="#">
                            <i class="fas fa-shopping-cart"></i>
                        </a>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle d-flex align-items-center" href="#"
                                id="navbarDropdownMenuLink" role="button" data-mdb-toggle="dropdown"
                                aria-expanded="false">
                                <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img (31).webp"
                                    class="rounded-circle" height="22" alt="Portrait of a Woman" loading="lazy" />
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li>
                                    <a class="dropdown-item" href="{{route('user.show')}}">My profile</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">Settings</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="/logout">Logout</a>
                                </li>
                            </ul>
                        </li>
                    @endif
                </ul>

                <!-- Left links -->
            </div>
        </div>
        <!-- Container wrapper -->
    </nav>
    <!-- Navbar -->

    @yield('content')

    <!-- Footer -->
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#332D2D" fill-opacity="1"
            d="M0,128L48,128C96,128,192,128,288,149.3C384,171,480,213,576,208C672,203,768,149,864,138.7C960,128,1056,160,1152,176C1248,192,1344,192,1392,192L1440,192L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
        </path>
    </svg>
    <footer class="text-center text-lg-start bg-dark text-white">
        <!-- Section: Social media -->
        <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
            <!-- Left -->
            <div class="me-5 d-none d-lg-block">
                <span>Get connected with us on social networks:</span>
            </div>
            <!-- Left -->

            <!-- Right -->
            <div>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-google"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-linkedin"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-github"></i>
                </a>
            </div>
            <!-- Right -->
        </section>
        <!-- Section: Social media -->

        <!-- Section: Links  -->
        <section class="">
            <div class="container text-center text-md-start mt-5">
                <!-- Grid row -->
                <div class="row mt-3">
                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                        <!-- Content -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            <i class="fas fa-tasks me-3"></i>Snugger
                        </h6>
                        <p>
                            This project is made to fullfill the requirement of Bina Nusantara Computer Science Web
                            Programming Course LF01.
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            Name
                        </h6>
                        <p>
                            <a href="#!" class="text-reset">Andrey Agassi</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Melvin Mario</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Jeremy Raymond Metekohy</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Praisel Immanuella Greithven Kambey</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Sherly Phangestu</a>
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            NIM
                        </h6>
                        <p>
                            <a href="#!" class="text-reset">2440013292</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">2440013456</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">2440104800</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">2440115445</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">2440013374</a>
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
                        <p><i class="fas fa-home me-3"></i> Bina Nusantara Alam Sutera, Alam Sutera, Kota Tangerang,
                            Banten 15143</p>
                        <p>
                            <i class="fas fa-envelope me-3"></i>
                            snugger@gmail.com
                        </p>
                        <p><i class="fas fa-phone me-3"></i> + 0813 1234 5678</p>
                        <p><i class="fas fa-print me-3"></i> + 0813 1234 5678</p>
                    </div>
                    <!-- Grid column -->
                </div>
                <!-- Grid row -->
            </div>
        </section>
        <!-- Section: Links  -->

        <!-- Copyright -->
        <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
            © 2022 Copyright:
            <a class="text-reset fw-bold">Snugger.com</a>
        </div>
        <!-- Copyright -->
    </footer>
    <!-- Footer -->
</body>

</html>
