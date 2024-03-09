<?php
session_start();
?>
<!doctype html>
<html lang="en">

<head>
    <title>ติดต่อเรา</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="เว็ปไซต์ขายแคปหมู">
    <!-- Bootstrap CSS v5.2.1 -->
    <?php include('../template/header.php')?>
    <link rel="stylesheet" href="../css/style.css">
    <!-- <link rel="stylesheet" href="css/style.css"> -->
</head>
<style>
 .pf-20{
    padding-left: 20px;
 }
    .lb{
    list-style: none;
    position: relative;
    padding-left: 38px;
 }
 .content{
    display: grid;
    grid-template-columns: 600px 1fr;
    margin-top: 10px;
 }
 .content-right{
    text-align: center;
    }
</style>
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
                            <a class="nav-link" href="post.php">บทความ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="contact.php">ติดต่อเรา</a>
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
    <main>
    <div class="container">
        <div class="content pf-20">
            <div class="content-left">
            <h1 style="margin-top:15px  ;">ที่อยู่ของวิทยาเขต</h1>
            <p style="margin-left: 70px;">58 ถนนวิภาวดีรังสิต แขวงรัชดาภิเษก เขตดินแดง กรุงเทพมหานคร 10400<br>
            สนใจรายละเอียดสามารถสอบถามได้ที่ 026922360-4<br>
            02277-3660 , 02277-3661 , 02277-3694 , 02277-2985 แฟกซ์ 02277-3693</p>
            <h1>อีกช่องทางการติดต่อ</h1>
                <ul>
                    <li class="lb"><i class="bi bi-envelope"></i> : patipat.cha@rmutto.ac.th</li>
                    <li class="lb"><i class="bi bi-envelope"></i> : atit.son@rmutto.ac.th</li>
                    <li class="lb"><i class="bi bi-envelope"></i> : wachirawit.cho@rmutto.ac.th</li>
                </ul>
            </div>
            <div class="content-right">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3875.0129240290644!2d100.55410937519335!3d13.778094086616544!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30e29e9e0e7323af%3A0x8ed6fabd07a8b603!2z4Lih4Lir4Liy4Lin4Li04LiX4Lii4Liy4Lil4Lix4Lii4LmA4LiX4LiE4LmC4LiZ4LmC4Lil4Lii4Li14Lij4Liy4LiK4Lih4LiH4LiE4Lil4LiV4Liw4Lin4Lix4LiZ4Lit4Lit4LiBIOC4p-C4tOC4l-C4ouC4suC5gOC4guC4leC4iOC4seC4geC4o-C4nuC4h-C4qeC4oOC4ueC4p-C4meC4suC4o-C4lg!5e0!3m2!1sth!2sth!4v1709729442442!5m2!1sth!2sth" width="400" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div> 
        </div>  
        <hr>
        <div>
            <h1>รถประจำทางที่ผ่านวิทยาเขต</h1>
        </div>
        <div class="pf-20">
            <div class="row">
                <div class="col-md-4">
                    <ul>
                        <li class="lb"><i class="bi bi-bus-front-fill"></i> รถประจำทางสาย 24</li>
                        <li class="lb"><i class="bi bi-bus-front-fill"></i> รถประจำทางสาย 69</li>
                        <li class="lb"><i class="bi bi-bus-front-fill"></i> รถประจำทางสาย 107</li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul>
                        <li class="lb"><i class="bi bi-bus-front-fill"></i> รถประจำทางสาย 129</li>
                        <li class="lb"><i class="bi bi-bus-front-fill"></i> รถประจำทางสาย 138</li>
                        <li class="lb"><i class="bi bi-bus-front-fill"></i> รถประจำทางสาย 187</li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul>
                        <li class="lb"><i class="bi bi-bus-front-fill"></i> รถประจำทางสาย 92</li>
                        <li class="lb"><i class="bi bi-bus-front-fill"></i> รถประจำทางสาย 504</li>
                        <li class="lb"><i class="bi bi-bus-front-fill"></i> รถประจำทางสาย 555</li>
                    </ul>
                </div>
            </div>
        </div>
        <hr>
    </div>
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