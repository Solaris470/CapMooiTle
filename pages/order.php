<?php
 include '../condb.php';

 if (isset($_GET['p_id'], $_GET['quantity'])) {
    $p_id = mysqli_real_escape_string($conn, $_GET['p_id']);
    $p_quantity = mysqli_real_escape_string($conn, $_GET['quantity']);

    // Check if the product ID already exists in the session
    if (isset($_SESSION['p_id'][$p_id])) {
        // Product ID already exists, update the quantity
        $_SESSION['p_quantity'][$p_id] += $p_quantity;
    } else {
        // Product ID doesn't exist, add a new record
        $_SESSION['p_id'][$p_id] = $p_id;
        $_SESSION['p_quantity'][$p_id] = $p_quantity;
    }
}
// var_dump($_SESSION['p_id'],$_SESSION['p_quantity']);
?>
<!doctype html>
<html lang="en">

<head>
    <title>คำสั่งซื้อ</title>
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
        <nav class="navbar navbar-expand-xl bg-light">
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
                            <a class="nav-link active" href="order.php">คำสั่งซื้อ</a>
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
    <main class="p-5 container">
        <div class="row">
            <div class="col-xl-7 h-100">
                <div class="cart-list d-flex align-items-center mb-3">
                    <h2>รายการสินค้า</h2>
                    <?php if(isset($_GET['alert_message'])): $alert_message=$_GET['alert_message']?>
                    <div class="alert alert-info alert-dismissible fade show ms-2" role="alert">
                        <?= $alert_message?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    <?php endif;?>
                </div>
                <div class="cart-items">
                    <?php 
    if (isset($_SESSION['p_id'])) { 
        $p_id = $_SESSION['p_id'];
        $p_quantity = $_SESSION['p_quantity'];

        $sql = "SELECT * FROM products WHERE product_id IN (" . implode(',', array_keys($p_id)) . ")";
        $result = $conn->query($sql);

        if ($result && $result->num_rows > 0) {
    ?>
                    <table class="table text-center align-items-center">
                        <thead>
                            <tr>
                                <th>สินค้า</th>
                                <th>ราคาต่อชิ้น</th>
                                <th>จำนวน</th>
                                <th>ราคารวม</th>
                                <th>จัดการ</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                while ($row = $result->fetch_assoc()) { 
                    $productId = $row['product_id'];
                    ?>
                            <tr class="align-items-center">
                                <td class="cart-product d-flex align-items-center">
                                    <div class="cart-img" style="max-width: 100px; max-height: 100px;">
                                        <img src="<?= $row['product_image'] ?>" alt="<?= $row['product_name'] ?>"
                                            class="w-100 h-auto">
                                    </div>
                                    <div class="cart-product-name ms-1">
                                        <p><?= $row['product_name'] ?></p>
                                    </div>
                                </td>
                                <td><?= $row['product_price'] ?></td>
                                <td>
                                    <!-- <button class="decrease-btn" data-product-id="<?= $productId ?>">-</button> -->
                                    <span class="quantity"><?= $p_quantity[$productId] ?></span>
                                    <!-- <button class="increase-btn" data-product-id="<?= $productId ?>">+</button> -->
                                </td>
                                <td><?= ($p_quantity[$productId] * $row['product_price']) ?></td>
                                <td><a href="action.php?action=delete&p_id=<?= $row['product_id'] ?>">ลบ</a></td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                    <?php 
        } else { 
            echo 'ไม่มีสินค้าในตะกร้า';
        }
    } else { 
        echo 'ไม่มีสินค้าในตะกร้า';
    }
    ?>
                </div>


            </div>
            <div class="col-xl-5">
                <form action="process_order.php" method="post">
                    <h3 class="mb-3">ที่อยู่ในการจัดส่ง</h3>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="name" name="name" placeholder="ชื่อ-นามสกุล"
                                required>
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="name" name="name" placeholder="เบอร์โทร"
                                required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-4">
                            <select class="form-select" id="province" name="province" required>
                                <option value="" selected disabled>จังหวัด</option>
                            </select>
                        </div>

                        <div class="col-md-4">
                            <select class="form-select" id="district" name="district" required>
                                <option value="" selected disabled>อำเภอ</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <select class="form-select" id="sub_district" name="sub_district" required>
                                <option value="" selected disabled>ตำบล</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="mb-3">
                            <textarea class="form-control" name="" id="" rows="3"
                                placeholder="บ้านเลขที่, ซอย,หมู่ ,ถนน ,ตำบล/แขวง"></textarea>
                        </div>

                    </div>
                    <!-- ปุ่มยืนยันคำสั่งซื้อ -->
                    <button type="submit" class="btn btn-primary">ยืนยันคำสั่งซื้อ</button>

                </form>
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


    <script>
    document.addEventListener("DOMContentLoaded", function() {
        // ดึงข้อมูลจังหวัดเมื่อหน้าเว็บโหลด
        getProvinces();

        // เมื่อเปลี่ยนแปลงจังหวัด
        document.getElementById("province").addEventListener("change", function() {
            var provinceId = this.value;
            getDistricts(provinceId);
        });

        // เมื่อเปลี่ยนแปลงอำเภอ
        document.getElementById("district").addEventListener("change", function() {
            var districtId = this.value;
            getSubDistricts(districtId);
        });
    });

    function getProvinces() {
        // เรียกใช้ AJAX เพื่อดึงข้อมูลจังหวัด
        // ในที่นี้ใช้ Fetch API
        fetch("get_data.php?action=getProvinces")
            .then(response => response.json())
            .then(data => {
                // นำข้อมูลไปสร้าง option แล้วเพิ่มลงใน select
                var provinceSelect = document.getElementById("province");
                data.forEach(province => {
                    var option = document.createElement("option");
                    option.value = province.code;
                    option.textContent = province.name_th;
                    provinceSelect.appendChild(option);
                });
            });
    }


    function getDistricts(provinceId) {
        // เรียกใช้ AJAX เพื่อดึงข้อมูลอำเภอ
        fetch(`get_data.php?action=getDistricts&province_id=${provinceId}`)
            .then(response => response.json())
            .then(data => {
                console.log(data);
                // นำข้อมูลไปสร้าง option แล้วเพิ่มลงใน select
                var districtSelect = document.getElementById("district");
                districtSelect.innerHTML = "<option value=''>เลือกอำเภอ</option>"; // ล้าง option เดิม
                data.forEach(district => {
                    var option = document.createElement("option");
                    option.value = district.code;
                    option.textContent = district.name_th;
                    districtSelect.appendChild(option);
                });
            });

    }

    function getSubDistricts(districtId) {
        // เรียกใช้ AJAX เพื่อดึงข้อมูลตำบล
        fetch(`get_data.php?action=getSubDistricts&district_id=${districtId}`)
            .then(response => response.json())
            .then(data => {
                // นำข้อมูลไปสร้าง option แล้วเพิ่มลงใน select
                var subDistrictSelect = document.getElementById("sub_district");
                subDistrictSelect.innerHTML = "<option value=''>เลือกตำบล</option>"; // ล้าง option เดิม
                data.forEach(subDistrict => {
                    var option = document.createElement("option");
                    option.value = subDistrict.code;
                    option.textContent = subDistrict.name_th;
                    subDistrictSelect.appendChild(option);
                });
            });
    }
    </script>

    <!-- <script>
    document.addEventListener('DOMContentLoaded', function() {
        var increaseButtons = document.querySelectorAll('.increase-btn');
        var decreaseButtons = document.querySelectorAll('.decrease-btn');

        increaseButtons.forEach(function(button) {
            button.addEventListener('click', function() {
                var productId = this.getAttribute('data-product-id');
                updateQuantity(productId, 1); // เพิ่มจำนวนสินค้า
            });
        });

        decreaseButtons.forEach(function(button) {
            button.addEventListener('click', function() {
                var productId = this.getAttribute('data-product-id');
                updateQuantity(productId, -1); // ลดจำนวนสินค้า
            });
        });

        function updateQuantity(productId, amount) {
            // ตรวจสอบว่า productId มีอยู่ใน $_SESSION หรือไม่
            if (typeof p_quantity[productId] !== 'undefined') {
                // ปรับปรุงจำนวนสินค้า
                p_quantity[productId] += amount;

                // แสดงผลลัพธ์ใน HTML
                var quantityElement = document.querySelector('.quantity[data-product-id="' + productId + '"]');
                if (quantityElement) {
                    quantityElement.textContent = p_quantity[productId];
                }

                // อัปเดต $_SESSION หรือส่งข้อมูลไปยังไฟล์ PHP เพื่ออัปเดต $_SESSION
                // ตรวจสอบว่าต้องการอัปเดต $_SESSION ทันทีหรือไม่
            }
        }
    });
    </script> -->

</body>

</html>