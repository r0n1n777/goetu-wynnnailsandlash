<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="keywords" content="">

        <title>Welcome to Wynn Nails and Lash | Gilbert, AZ 85233 United States</title>

        <link rel="icon" href="resources/favicon.ico">

        <link rel="stylesheet" href="public/css/app.css">        
    </head>

    <body>
        <nav class="navbar navbar-dark navbar-expand-xl shadow bg-primary sticky-top navigation-clean">
            <div class="container">
                <a class="navbar-brand text-dark fw-bold m-0 rounded bg-transparent" href="/" style="background-image: url('resources/img/header-bg.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat;">
                    <h3 class="mb-0 p-2 py-4 fw-bold text-light">WYNN NAILS & LASH</h3>
                </a>

                <div class="d-flex justify-content-center align-items-center">
                    <a class="d-block d-md-block d-xl-none btn btn-secondary btn-lg shadow fw-bold text-white" href="https://salons.go3reservation.com/wynn-nails-and-lash" target="_blank">
                        <i class="bi bi-box-arrow-up-right"></i>&nbsp;BOOK ONLINE
                    </a>
                    &nbsp;&nbsp;
                    <button data-bs-toggle="collapse" class="navbar-toggler border border-white" data-bs-target="#navcol-1"><span class="sr-only"></span><span class="navbar-toggler-icon"></span></button>
                </div>

                <div class="collapse navbar-collapse" id="navcol-1">
                    <ul class="nav navbar-nav mx-auto">
                        <li class="nav-item"><a class="nav-link fw-bold text-light" href="#home">Home</a></li>
                        <li class="nav-item dropdown"><a class="dropdown-toggle nav-link fw-bold text-white" data-bs-toggle="dropdown" aria-expanded="false" href="#">Services&nbsp;</a>
                            <div class="dropdown-menu" role="menu">
                                @foreach ($services as $service => $data)
                                <a class="dropdown-item" href="#{{$data[0]}}">{{ $service }}</a>
                                @endforeach
                            </div>
                        </li>
                        <li class="nav-item"><a class="nav-link fw-bold text-white" href="#gallery">Gallery</a></li>
                        <li class="nav-item"><a class="nav-link fw-bold text-white" href="#contact">Contact us</a></li>
                    </ul>
                </div>

                <a class="d-none d-xl-block btn btn-secondary btn-lg shadow fw-bold text-white" href="https://salons.go3reservation.com/wynn-nails-and-lash" target="_blank">
                    <i class="bi bi-box-arrow-up-right"></i>&nbsp;BOOK ONLINE
                </a>
            </div>
        </nav>
        
        @yield('content')

        <footer>
            <div class="row">
                <div class="col d-flex flex-column justify-content-center align-items-center">
                    <img src="resources/img/header-bg.jpg" class="rounded-circle shadow mb-2">
                    <h3 class="mb-0 text-center">
                        WYNN<span class="mb-0 p-2 text-primary text-center">NAILS & LASH</span>
                    </h3>
                    <div class="my-3 text-center">
                        <span class="text-muted">Business Hours:</span><br>
                        <i class="bi bi-clock"></i>
                        Mondays-Fridays: 9:30 AM - 7:00 PM <br>
                        <i class="bi bi-clock"></i>
                        Saturdays: 9:30 AM - 6:00 PM <br>
                        <i class="bi bi-clock"></i>
                        Sundays: 10:00 AM - 5:00 PM
                    </div>
                </div>
                <div class="col d-flex flex-column justify-content-center align-items-center">
                    <div class="mb-3 text-center">
                        <span class="text-muted">Business Address:</span><br>
                        <i class="bi bi-map"></i>
                        1073 East Baseline Road <br>
                        STE 104 Gilbert, AZ 85233
                    </div>
                    <div class="mb-3 text-center">
                        <span class="text-muted">Business Contact Number:</span><br>
                        <i class="bi bi-telephone"></i>
                        <strong>(480) 558 5101</strong>
                    </div>
                    <div class="mb-3 text-center">
                        <span class="text-muted">Business Email:</span><br>
                        <i class="bi bi-envelope"></i>
                        <a class="text-decoration-none text-white" href="mailto:contact@wynnnailsandlash.com">
                            contact@wynnnailsandlash.com
                        </a>
                    </div>
                </div>

                <div class="clearfix"></div>

                <div class="col text-center mt-5">
                    <span class="h4 p-5 mb-5">
                        Follow us on Social Media
                    </span>
                    <div>
                        <a href="#" class="text-decoration-none p-2">
                            <i class="bi bi-facebook fs-1"></i>
                        </a>

                        <a href="#" class="text-decoration-none p-2">
                            <i class="bi bi-twitter fs-1"></i>
                        </a>

                        <a href="#" class="text-decoration-none p-2">
                            <i class="bi bi-linkedin fs-1"></i>
                        </a>

                        <a href="#" class="text-decoration-none p-2">
                            <i class="bi bi-github fs-1"></i>
                        </a>
                    </div>
                </div>
            </div>
        </footer>

        <script type="text/javascript" src="public/js/app.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
        <script src="public/js/fancybox.js"></script>
        <script>
            $(document).ready(function() {
                $('.images').fancybox();
            });
        </script>
    </body>
</html>
