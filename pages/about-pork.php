<?php
session_start();
?>
<!doctype html>
<html lang="en">

<head>
    <title>เกี่ยวกับแคบหมู</title>
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
                            <a class="nav-link dropdown-toggle active" href="#" role="button" data-bs-toggle="dropdown"
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
    <main>
    <div class="container">
        <div style="text-align: center;">
            <h1 style="margin: 20px;">เกี่ยวกับแคบหมู</h1>
            <img src="../img/b2.jpg" alt="" style="width: 50%; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.5); border-radius: 4px;">
        </div>

        <div class="container" style="width: 80%; padding: 20px;">
            <p><strong>แคบหมู</strong>
            ปรากฏในอาหารของทุกภูมิภาคที่บริโภคสุกร มักเป็นผลิตผลของการทำน้ำมันหมู และบางทีก็เป็นวิธีทำให้หนังสุกรที่หนาและแข็งนั้นรับประทานสะดวกขึ้น ในวัฒนธรรมโบราณหลายรูปแบบ น้ำมันสำหรับปรุงอาหารนั้นได้มาก็แต่โดยอาศัยไขมันสัตว์ นอกจากนี้ แคบหมูยังเคยใช้เป็นอาหารควบคุมน้ำหนัก จนกระทั่งมีการปฏิวัติอุตสาหกรรม น้ำมันพืชจึงค่อยแพร่หลายขึ้น
            แคบหมูแบบอุ่นด้วยเตาไมโครเวฟก็มีขาย มีลักษณะทำนองเดียวกับข้าวโพดคั่วที่อุ่นด้วยเตาไมโครเวฟ และจะบริโภคเสียในขณะที่ยังอุ่นอยู่นั้นก็ได้ ส่วนแคบหมูหมักมักแช่เย็นและรับประทานกันเย็น ๆ แต่แคบหมูหมักนี้ต่างจากแคบหมูทอดตรงที่มีความมันและเค็มเป็นอันมาก คล้ายคลึงกับฟัวกรา (foie gras)</p>
            <p><strong>ประเด็นสุขภาพ</strong>
            แคบหมูมีคาร์โบไฮเดรตต่ำ จึงใช้เป็นของคบเคี้ยวทางเลือกตามการควบคุมน้ำหนักแบบแอตกินส์ (Atkins diet) ทว่า แคบหมูมีไขมันและโซเดียมสูง ไขมันในแคบหมูนั้นทัดเทียมกับในมันฝรั่งทอด ขณะที่โซเดียมในแคบหมูซึ่งบริโภคแต่ละครั้งนั้นมีปริมาณมากกว่าที่ได้จากการบริโภคมันฝรั่งทอดครั้งหนึ่ง ๆ ถึงราวห้าเท่า นิตยสาร เมนส์เฮลธ์ (Men's Health) ประเมินว่า การบริโภคแคบหมูครั้งละยี่สิบแปดกรัม (หนึ่งออนซ์) จะได้โปรตีนมากกว่าการบริโภคมันฝรั่งทอดถุงหนึ่งราวเก้าเท่า และในแคบหมูชนิดไขมันต่ำ มีไขมันน้อยกว่ามันฝรั่งทอดชนิดไขมันสูง แต่ในขณะที่ 97% ของไขมันในมันฝรั่งทอดเป็นไขมันไม่อิ่มตัว มีเพียงร้อยละ 43 ของไขมันแคบหมูนั้นไม่อิ่มตัว ส่วนใหญ่เป็นกรดโอเลอิก (oleic acid) อันเป็นไขมันที่เป็นผลดีต่อสุขภาพชนิดเดียวกับที่พบในน้ำมันมะกอก ขณะที่อีกร้อยละสิบสามของไขมันแคบหมูนั้นเป็นกรดสตีแอริก (stearic acid) อันเป็นไขมันอิ่มตัวที่เชื่อกันว่าไม่เพิ่มระดับคอเลสเทอรอล แต่ทั้งนี้เมื่อนับปริมาณไขมันอิ่มตัวในแคบหมู ก็มีถึง 53% ซึ่งยังนับว่าเป็นอาหารไขมันสูงอยู่ดี</p>
        </div>
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