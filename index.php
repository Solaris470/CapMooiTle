<!doctype html>
<html lang="en">

<head>
    <title>Home</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />

    <style>
        .dropdown-toggle::after {
            display: none;
        }

        .text-decoration-none {
            text-decoration: none !important;
        }

        /* Font Awesome Icons have variable width. Added fixed width to fix that.*/
        .icon-width {
            width: 2rem;
        }
    </style>
</head>

<body>
    <header>

        <nav class="navbar navbar-expand-lg navbar-light shadow-sm bg-light fixed-top">
            <div class="container">
                <a class="navbar-brand d-flex align-items-center" href="#">
                    <img src="img/logo.png" class="img-fluid" width="70" height="70">
                    <span class="ml-3 font-weight-bold"> CapMooiTle</span>
                </a>
                <button class="navbar-toggler navbar-toggler-right border-0" type="button" data-toggle="collapse"
                    data-target="#navbar4">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbar4">
                    <ul class="navbar-nav mr-auto pl-lg-4">
                        <li class="nav-item px-lg-2 active"> <a class="nav-link" href="#"> <span
                                    class="d-inline-block d-lg-none icon-width"><i
                                        class="fas fa-home"></i></span>Home</a> </li>
                        <li class="nav-item px-lg-2"> <a class="nav-link" href="#"><span
                                    class="d-inline-block d-lg-none icon-width"><i
                                        class="fas fa-spa"></i></span>Services</a> </li>
                        <li class="nav-item px-lg-2"> <a class="nav-link" href="#"><span
                                    class="d-inline-block d-lg-none icon-width"><i
                                        class="far fa-user"></i></i></span>About</a> </li>

                        <li class="nav-item px-lg-2 dropdown d-menu">
                            <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false"><span
                                    class="d-inline-block d-lg-none icon-width"><i
                                        class="far fa-caret-square-down"></i></span>Dropdown
                                <svg id="arrow" xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="6 9 12 15 18 9"></polyline>
                                </svg>
                            </a>
                            <div class="dropdown-menu shadow-sm sm-menu" aria-labelledby="dropdown01">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </li>

                        <li class="nav-item px-lg-2"> <a class="nav-link" href="#"><span
                                    class="d-inline-block d-lg-none icon-width"><i
                                        class="far fa-envelope"></i></span>Contact</a> </li>
                    </ul>
                    <ul class="navbar-nav ml-auto mt-3 mt-lg-0">
                        <li class="nav-item"> <a class="nav-link" href="#">
                                <i class="fab fa-twitter"></i><span class="d-lg-none ml-3">Twitter</span>
                            </a> </li>
                        <li class="nav-item"> <a class="nav-link" href="#">
                                <i class="fab fa-facebook"></i><span class="d-lg-none ml-3">Facebook</span>
                            </a> </li>
                        <li class="nav-item"> <a class="nav-link" href="#">
                                <i class="fab fa-instagram"></i><span class="d-lg-none ml-3">Instagram</span>
                            </a> </li>
                        <li class="nav-item"> <a class="nav-link" href="#">
                                <i class="fab fa-linkedin"></i><span class="d-lg-none ml-3">Linkedin</span>
                            </a> </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner" style="height: 1000px;">
                <div class="carousel-item active">
                    <div class="container py-5">
                        <div class="row py-5">
                            <div class="mx-auto col-lg-10">
                                <h1 class="display-4 mb-4 ">This is a beautiful Bootstrap 4 Navbar with Social Media
                                    Icons </h1>
                                <p class="lead mb-5">There is nothing more rare, nor more beautiful, than a woman being
                                    unapologetically herself; comfortable in her perfect imperfection. To me, that is
                                    the true essence of beauty. </p> <a href="#"
                                    class="btn btn-lg btn-outline-light mx-1">Take me there</a>
                            </div>
                        </div>
                    </div>
                    <img src="img/b1.jpg" class="d-block w-100 img-fluid">
                </div>
                <div class="carousel-item">
                    <div class="container py-5">
                        <div class="row py-5">
                            <div class="mx-auto col-lg-10">
                                <h1 class="display-4 mb-4 ">This is a beautiful Bootstrap 4 Navbar with Social Media
                                    Icons </h1>
                                <p class="lead mb-5">There is nothing more rare, nor more beautiful, than a woman being
                                    unapologetically herself; comfortable in her perfect imperfection. To me, that is
                                    the true essence of beauty. </p> <a href="#"
                                    class="btn btn-lg btn-outline-light mx-1">Take me there</a>
                            </div>
                        </div>
                    </div>
                    <img src="img/b2.jpg" class="w-100 img-fluid">
                </div>
                <div class="carousel-item">
                    <div class="container py-5">
                        <div class="row py-5">
                            <div class="mx-auto col-lg-10">
                                <h1 class="display-4 mb-4 ">This is a beautiful Bootstrap 4 Navbar with Social Media
                                    Icons </h1>
                                <p class="lead mb-5">There is nothing more rare, nor more beautiful, than a woman being
                                    unapologetically herself; comfortable in her perfect imperfection. To me, that is
                                    the true essence of beauty. </p> <a href="#"
                                    class="btn btn-lg btn-outline-light mx-1">Take me there</a>
                            </div>
                        </div>
                    </div>
                    <img src="img/b3.jpg" class="d-block w-100 img-fluid">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </main>
    <footer>
        <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
        crossorigin="anonymous"></script>
    <script>
        $(document).ready(function () {
            if ($(window).width() > 991) {
                $('.navbar-light .d-menu').hover(function () {
                    $(this).find('.sm-menu').first().stop(true, true).slideDown(150);
                }, function () {
                    $(this).find('.sm-menu').first().stop(true, true).delay(120).slideUp(100);
                });
            }
        });
    </script>
</body>

</html>