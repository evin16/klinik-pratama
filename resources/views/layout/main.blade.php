<!doctype html>
<html lang="en">

<head>
    <title>@yield('title')</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="../img/logoonly.png">
    <link rel="stylesheet" type="text/css" href="../css/indexTest.css">
    <!-- Bootstrap CSS -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <!-- font awesome cdn -->
	<!-- font awesome cdn -->
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/c8e4d183c2.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
</head>

<body>
    <div id="stickynav">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar" href="#">
                    <img style="margin-left:10pt" src="../img/logo-nav.png" alt="" width="70%" height="25">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{ url('/') }}">Home</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="{{ url('/product') }}" id="navbarDropdownMenuLink"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Products
                   
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Services
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="{{ url('/about') }}">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"

                                href="https://api.whatsapp.com/send?phone=628977887994&text=Saya%20ingin%20melakukan%20reservasi%20di%20Klinik%20Pratama!"
                                target="_blank">
                                Contact
                            </a>
                        </li>
                    </ul>
                </div>
                @guest
                    <form class="d-flex button-set">
                        <button class="btn mr-2 login-btn btn-bulat login"
                            style="border-radius: 50pt; width:90px; height:40px" type="submit"><a
                                href="/login">Login</a></button>
                        <button class="btn btn-outline-dark btn-bulat register"
                            style="border:1px solid black; border-radius: 50pt; width:90px; height:40px" type="submit"><a
                                href="/register">Register</a></button>
                    </form>
                @else
                    <form id="logout-form" class="d-flex button-set" action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button class="btn btn-outline-dark btn-bulat register"
                            style="border:1px solid black; border-radius: 50pt; width:90px; height:40px" type="submit">
                            Logout
                        </button>
                    </form>
                @endguest
            </div>
        </nav>
    </div>

    <!--Content---------------->
    @yield('container')
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- jQuery -->
    <script src="js/jquery-3.4.1.min.js"></script>

    <!-- Popper -->
    <script src="js/popper.min.js"></script>

    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
