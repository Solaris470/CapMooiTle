<!doctype html>
<html lang="en">

<head>
    <title>เข้าสู่ระบบเพื่อใช้งาน การซื้อขายสินค้า</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="เว็ปไซต์ขายแคปหมู">
    <!-- Bootstrap CSS v5.2.1 -->
    <?php include('../template/header.php')?>
    <link rel="stylesheet" href="../css/style.css">

    <style>
    .navbar .nav-item .nav-link:hover {
        border-bottom: 0px;
    }

    .btn-auth a {
        color: orange;
    }
    </style>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container">
                <a class="navbar-brand" href="regis.php">
                    <img src="../img/logo2.png" class="img-fluid" width="150">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <h4>สมัครสมาชิก</h4>
                        </li>
                    </ul>
                    <div class="btn-auth">
                        ต้องการความช่วยเหลือ? <a href="../pages/contact.php" type="button">ติดต่อเรา</a>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <main style="background: #f7941d;">
        <div class="container">
            <div class="row p-5">
                <div class="col-md-8">
                    <div class="banner d-flex justify-content-center h-100">
                            <img src="../img\Poster2.png" class="img-fluid w-50">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <h3>สมัครสมาชิก</h3>
                            <form action="new_user.php" method="post">
                                <div class="mb-3">
                                    <input type="text" name="c_name" placeholder="ชื่อ - นามสกุล" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <input type="number" name="c_tel" placeholder="เบอร์โทรศัพท์" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <input type="email" name="c_mail" placeholder="Email" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <input type="text" name="c_user" placeholder="ชื่อผู้ใช้" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <input type="password" name="c_password" placeholder="รหัสผ่าน" class="form-control"
                                        min="10">
                                    <p class="form-text text-muted" id="passalr" style="display: none;">
                                        รหัสผ่านต้องมีอย่างน้อย 8 ตัวอักษร</p>

                                </div>
                                <div class="row justify-content-center align-items-center g-2">
                                    <button type="submit" class="btn btn-ouline"
                                        style="background:#f7941d">สมัครสมาชิก</button>
                                    <hr class="mt-3">
                                    <p class="text-muted">มีบัญชีอยู่แล้วใช่หรือไม่ <a href="login.php"
                                            style="color:orange">เข้าสู่ระบบ</a></p>
                                </div>
                            </form>
                            <?php
                                if (isset($_GET['error'])) {
                                    $error_message = htmlspecialchars($_GET['error']);
                                    echo '<div class="alert alert-danger">' .$error_message.'</div>';
                                }
                                ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer class="container">
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