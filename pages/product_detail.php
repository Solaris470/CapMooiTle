<!doctype html>
<html lang="en">

<head>
    <title>รายการสินค้า</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="เว็ปไซต์ขายแคปหมู ">
    <!-- Bootstrap CSS v5.2.1 -->
    <?php include('../template/header.php')?>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/catalog.css">
    <!-- <link rel="stylesheet" href="css/style.css"> -->
    <style>
        .social-img{
            width: 25px;
            height: 25px;
        }
        .social-img:hover{
            cursor: pointer;
        }
    </style>
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
                            <a class="nav-link active" href="catalog.php">รายการสินค้า</a>
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
                            <a class="nav-link" href="contact.php">ติดต่อเรา</a>
                        </li>
                    </ul>
                    <div class="btn-auth">
                        <a href="../auth/login.php" class="btn btn-success">เข้าสู่ระบบ</a>
                        <a href="../auth/regis.php" class="btn btn-primary">สมัครสมาชิก</a>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <main class="container">
        <?php
        include("../condb.php");
        $product_id = $_GET['id'];
        $sql = "SELECT  products.product_id,
                        product_price,product_bestsell, 
                        products.product_name, 
                        COALESCE(AVG(reviews.rating), 0) AS average_rating,
                        product_quantity,
                        product_image,
                        product_detail
                FROM products
                LEFT JOIN reviews ON products.product_id = reviews.product_id
                WHERE products.product_id = $product_id
                GROUP BY products.product_id, products.product_name;";
        $result = $conn->query($sql);
        if($result->num_rows > 0){
            while($rows = $result->fetch_assoc()){
            $product_quantity = $rows['product_quantity'];
    ?>
        <nav aria-label="breadcrumb" style="--bs-breadcrumb-divider: '>';margin: 10px;">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="../index.php">หน้าหลัก</a></li>
                <li class="breadcrumb-item"><a href="catalog.php">รายการสินค้า</a></li>
                <li class="breadcrumb-item active" aria-current="page"><?= $rows['product_name']?></li>
            </ol>
        </nav>
        <div class="row">
            <div class="col-md-4">
                <img src="<?= $rows['product_image'];?>" alt="<?= $rows['product_name']?>" class="w-100 h-100">
            </div>
            <div class="col-md-8">
                <div class="mt-3 d-flex justify-content-between">
                    <h2><?= $rows['product_name']?></h2>
                    <p class="">
                        แชร์ :  
                        <img src="../img/facebook-icon.png" alt="" class="social-img">
                        <img src="../img/messenger-icon.png" alt="" class="social-img">
                        <img src="../img/ig-icon.png" alt="" class="social-img">
                        <img src="../img/tik-tok-icon.png" alt="" class="social-img">
                        <img src="../img/Twitter_new_X_logo.png" alt="" class="social-img">
                    </p>
                </div>
                <h3 style="color:orange;">฿<?= $rows['product_price']?></h3>
                <p class="mt-3">Bundle Deals : <span>ซื้อ 4 ถุงราคาเพียง 20 บาท</span></p>
                <div class="d-flex align-items-center mt-4 ">
                    <button id="decrementBtn" class="btn btn-outline-primary">-</button>
                    <input id="quantityInput" name="p_quantityInput" type="text" class="form-control mx-2 w-25 text-center" value="1" readonly>
                    <button id="incrementBtn" class="btn btn-outline-primary">+</button>
                    <p class="m-2"> สินค้าคงเหลือ <?= $product_quantity ?> ชิ้น</p>
                </div>
                <!-- <a href="#" id="addToCartBtn" class="btn btn-success mt-3">เพิ่มสินค้าลงในตะกร้า</a> -->
                <button class="btn btn-success mt-3" onclick="sendOrderItem()">เพิ่มสินค้าลงในตะกร้า</button>
            </div>
        </div>
        <?php
                        }
                    }else {
                        echo $sql;
                        // echo $product_id;
                    }
            ?>
    </main>
    <!-- <footer class="container">
        <p class="float-end"><a href="#">Back to top</a></p>
        <p>&copy; 2017–2021 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
    </footer> -->
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const quantityInput = document.getElementById("quantityInput");
        const decrementBtn = document.getElementById("decrementBtn");
        const incrementBtn = document.getElementById("incrementBtn");

        // ปุ่มลดจำนวน
        decrementBtn.addEventListener("click", function () {
            let quantity = parseInt(quantityInput.value);
            if (quantity > 1) {
                quantity--;
                quantityInput.value = quantity;
            }
        });

        // ปุ่มเพิ่มจำนวน
        incrementBtn.addEventListener("click", function () {
            let quantity = parseInt(quantityInput.value);
            quantity++;
            quantityInput.value = quantity;
        });

    });
</script>

<script>
    function sendOrderItem() {
        // ดึงค่าจาก input และอื่น ๆ
        var p_id = <?= $product_id ?>;
        var quantity = $("#quantityInput").val();

        // ส่งข้อมูลไปที่หน้า order.php โดยใช้เมธอด GET
        var url = "order.php?p_id=" + p_id + "&quantity=" + quantity; // แก้ไข URL ตามที่ต้องการ
        window.location.href = url;
    }
</script>

</body>

</html>