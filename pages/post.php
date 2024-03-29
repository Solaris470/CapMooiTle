<?php
session_start();
?>
<!doctype html>
<html lang="en">

<head>
    <title>บทความ</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="เว็ปไซต์ขายแคปหมู">
    <!-- Bootstrap CSS v5.2.1 -->
    <?php include('../template/header.php')?>
    <link rel="stylesheet" href="../css/style.css">
    <!-- <link rel="stylesheet" href="css/style.css"> -->
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container">
                <a class="navbar-brand" href="../index.php">
                    <img src="../img/logo.png" class="img-fluid" width="100">
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
                            <a class="nav-link" aria-current="page" href="../index.php">หน้าแรก</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="catalog.php">รายการสินค้า</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="order.php">คำสั่งซื้อ</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                เกี่ยวกับเรา
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="about-pork.php">เกี่ยวกับแคบหมู</a></li>
                                <li><a class="dropdown-item" href="about-brand.php">เกี่ยวกับแคบหมูไอเติ้ล</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="post.php">บทความ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.php">ติดต่อเรา</a>
                        </li>
                    </ul>
                    <?php if (isset($_SESSION['user_id'])): ?>
                    <div class="nav-profile d-flex align-item-center">
                        <a href="" class="btn">
                            <?= $_SESSION['user_name'] ?>
                        </a>
                        <a href="../auth/logout.php" class="btn btn-danger">ออก</a>
                    </div>
                    <?php else: ?>
                    <div class="btn-auth">
                        <a href="../auth/login.php" class="btn btn-success">เข้าสู่ระบบ</a>
                        <a href="../auth/regis.php" class="btn btn-primary">สมัครสมาชิก</a>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </nav>
    </header>
    <main class="container">
            <h1>Comming soon...</h1>
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