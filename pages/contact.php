<!doctype html>
<html lang="en">

<head>
    <title>Home</title>
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
                    <div class="btn-auth">
                        <a href="auth/login.php" class="btn btn-success">เข้าสู่ระบบ</a>
                        <a href="auth/regis.php" class="btn btn-primary">สมัครสมาชิก</a>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <main>
    <div class="container">
        <div>
            <h1>ที่อยู่ของวิทยาเขต</h1>
        </div>
        <div class="pf-20">
            <p style="margin-left: 70px;">58 ถนนวิภาวดีรังสิต แขวงรัชดาภิเษก เขตดินแดง กรุงเทพมหานคร 10400<br>
            สนใจรายละเอียดสามารถสอบถามได้ที่ 026922360-4<br>
            02277-3660 , 02277-3661 , 02277-3694 , 02277-2985 แฟกซ์ 02277-3693</p>
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