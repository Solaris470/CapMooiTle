<?php
session_start();
// if (!isset($_SESSION['user_id'])) {
//     header("Location: auth/login.php");
//     exit();
// }
?>
<!doctype html>
<html lang="en">

<head>
    <title>Home</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="เว็ปไซต์ขายแคปหมู">
    <!-- Bootstrap CSS v5.2.1 -->
    <?php include('template/header.php')?>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container">
                <a class="navbar-brand" href="index.php">
                    <img src="img/logo.png" class="img-fluid" width="100">
                    CapMooiTle
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php">หน้าแรก</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="pages\catalog.php">รายการสินค้า</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="pages\order.php">คำสั่งซื้อ</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                เกี่ยวกับเรา
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="pages\about-pork.php">เกี่ยวกับแคบหมู</a></li>
                                <li><a class="dropdown-item" href="pages\about-brand.php">เกี่ยวกับแคบหมูไอเติ้ล</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="pages\post.php">บทความ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="pages\contact.php">ติดต่อเรา</a>
                        </li>
                    </ul>
                    <?php if (isset($_SESSION['user_id'])): ?>
                    <div class="nav-profile d-flex align-item-center">
                        <a href="" class="btn">
                            <?= $_SESSION['user_name'] ?>
                        </a>
                        <a href="auth/logout.php" class="btn btn-danger">ออก</a>
                    </div>
                    <?php else: ?>
                    <div class="btn-auth">
                        <a href="auth/login.php" class="btn btn-success">เข้าสู่ระบบ</a>
                        <a href="auth/regis.php" class="btn btn-primary">สมัครสมาชิก</a>
                    </div>
                    <?php endif; ?>


                </div>
            </div>
        </nav>
    </header>
    <main>
        <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner" style="height:700px">
                <div class="carousel-item active">
                    <img src="img\b1.jpg" class="w-100">

                    <div class="container">
                        <div class="carousel-caption text-start">
                            <h1>Example headline.</h1>
                            <p>Some representative placeholder content for the first slide of the carousel.</p>
                            <p><a class="btn btn-lg btn-primary" href="#">Sign up today</a></p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img\b2.jpg" class="w-100">

                    <div class="container">
                        <div class="carousel-caption">
                            <h1>Another example headline.</h1>
                            <p>Some representative placeholder content for the second slide of the carousel.</p>
                            <p><a class="btn btn-lg btn-primary" href="#">Learn more</a></p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img\b3.jpg" class="w-100">

                    <div class="container">
                        <div class="carousel-caption text-end">
                            <h1>One more for good measure.</h1>
                            <p>Some representative placeholder content for the third slide of this carousel.</p>
                            <p><a class="btn btn-lg btn-primary" href="#">Browse gallery</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <div class="container marketing mt-5">
            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-7">
                    <h2 class="featurette-heading">แคบหมูของมีดีอย่างไร? <span class="text-muted"></span></h2>
                    <ul class="list-group">
                        <li class="list-group-item">1.สารอาหารที่สำคัญอย่างโปรตีนและไขมันอยู่มาก</li>
                        <li class="list-group-item">2.คาร์โบไฮเดรตต่ำ</li>
                        <li class="list-group-item">3.มีไขมันดี</li>
                        <li class="list-group-item">4.วิตามิน B12 ซึ่งสามารถมีประโยชน์ต่อร่างกาย</li>
                    </ul>
                </div>
                <div class="col-md-5">
                    <img src="img\box1.jpg" width="500" height="500" class="img-fluid">
                </div>
            </div>

            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-7 order-md-2">
                    <h2 class="featurette-heading">ทำไมถึงต้องเป็นแคปหมูไอเติ้ล</h2>
                    <ul class="list-group">
                        <li class="list-group-item">1.สารอาหารที่สำคัญอย่างโปรตีนและไขมันอยู่มาก</li>
                        <li class="list-group-item">2.คาร์โบไฮเดรตต่ำ</li>
                        <li class="list-group-item">3.มีไขมันดี</li>
                        <li class="list-group-item">4.วิตามิน B12 ซึ่งสามารถมีประโยชน์ต่อร่างกาย</li>
                    </ul>
                </div>
                <div class="col-md-5 order-md-1">
                    <img src="img/box2.jpg" width="500" height="500" class="img-fluid">

                </div>
            </div>

            <hr class="featurette-divider">

            <!-- /END THE FEATURETTES -->

        </div><!-- /.container -->


        <!-- FOOTER -->

    </main>
    <footer class="container">
        <p class="float-end"><a href="#">Back to top</a></p>
        <p>&copy; 2017–2021 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>
</body>

</html>