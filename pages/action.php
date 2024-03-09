<?php
include '../condb.php';

$alert_message = ''; 

// ตรวจสอบว่ามีการส่งข้อมูลมาจากแบบฟอร์มหรือไม่
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // รับข้อมูลจากแบบฟอร์ม
    $user_id = $_SESSION['user_id'];
    $province_id = mysqli_real_escape_string($conn, $_POST['province']);
    $district_id = mysqli_real_escape_string($conn, $_POST['district']);
    $sub_district_id = mysqli_real_escape_string($conn, $_POST['sub_district']);
    $address = mysqli_real_escape_string($conn, $_POST['address']);

    // get name form provinces, districts, และ sub_districts
$provinceNameResult = $conn->query("SELECT name_th FROM provinces WHERE code = '$province_id'");
$districtNameResult = $conn->query("SELECT name_th FROM district WHERE code = '$district_id'");
$subDistrictResult = $conn->query("SELECT name_th, zip_code FROM subdistrict WHERE code = '$sub_district_id'");

// ตรวจสอบว่าข้อมูลถูกดึงมาได้หรือไม่
if ($provinceNameResult->num_rows > 0 && $districtNameResult->num_rows > 0 && $subDistrictResult->num_rows > 0) {

    $provinceName = $provinceNameResult->fetch_assoc()['name_th'];
    $districtName = $districtNameResult->fetch_assoc()['name_th'];
    $subDistrictData = $subDistrictResult->fetch_assoc();
    $subDistrictName = $subDistrictData['name_th'];
    $zipCode = $subDistrictData['zip_code'];

    // รวมข้อมูลทั้งหมดเข้าไว้ในฟิลด์ address
    $fullAddress = implode(' ', [$address, $provinceName, $districtName, $subDistrictName, $zipCode]);

    // นำข้อมูลไปบันทึกลงในตาราง orders
    $insertOrderSQL = "INSERT INTO orders (user_id, address)
                      VALUES ('$user_id', '$fullAddress')";
    $result = $conn->query($insertOrderSQL);

    // ตรวจสอบว่าบันทึกลงใน orders สำเร็จหรือไม่
    if ($result) {

        // ดึง order_id ที่เพิ่งถูกเพิ่มเข้าไป
        $lastOrderId = $conn->insert_id;

        // ตรวจสอบว่ามีสินค้าในตะกร้าหรือไม่
        if (isset($_SESSION['p_id']) && !empty($_SESSION['p_id'])) {
            // ดึงราคาสินค้าและเก็บไว้ในตัวแปรนอกลูป
            $productPrices = array();
                $totalOrderAmount = 0;

        
            foreach ($_SESSION['p_id'] as $productId => $productQuantity) {
                $selectprice = $conn->query("SELECT product_price FROM products WHERE product_id = '$productId'");


                $quantity = mysqli_real_escape_string($conn, $_POST['quantity']);
                // ตรวจสอบว่าได้ข้อมูลราคาสินค้าหรือไม่
                if ($selectprice) {
                    $productPrice = $selectprice->fetch_assoc()['product_price'];
                    $productPrices[$productId] = $productPrice;
        
                    $totalProductPrice = $quantity * $productPrice;
                    $totalOrderAmount += $totalProductPrice;
        
                    // บันทึกข้อมูลสินค้าลงในตาราง orders_items
                    $insertOrderDetailSQL = "INSERT INTO order_items (order_id, product_id, quantity, price)
                                             VALUES ('$lastOrderId', '$productId', '$quantity', '$totalProductPrice')";
                    $conn->query($insertOrderDetailSQL);
                }
            }
        }
        $conn->query("UPDATE orders SET total_amount = '$totalOrderAmount' WHERE order_id = '$lastOrderId'");
            
        // ล้างข้อมูลใน SESSION เพื่อรีเซ็ตตะกร้า
        unset($_SESSION['p_id']);
        unset($_SESSION['p_quantity']);

        // ส่งผลลัพธ์กลับไปยังหน้าที่แสดงคำสั่งซื้อ
        $alert_message = "บันทึกข้อมูลคำสั่งซื้อเรียบร้อยแล้ว";
        header("Location: order.php?alert_message=$alert_message");
        exit();
    } else {
        // บันทึกลงใน orders ไม่สำเร็จ
        $alert_message = "เกิดข้อผิดพลาดในการบันทึกข้อมูลคำสั่งซื้อ";
        exit();
    }
} else {
    // เกิดข้อผิดพลาดในการดึงข้อมูล name_th หรือ zip_code
    $alert_message = "เกิดข้อผิดพลาดในการดึงข้อมูลจังหวัด, อำเภอ, ตำบล, หรือรหัสไปรษณีย์";
}

}

if (isset($_GET['action'], $_GET['p_id'])) {
    $action = $_GET['action'];
    $p_id = $_GET['p_id'];

    if ($action === 'delete') {
        // ลบรายการที่เลือกออกจาก $_SESSION
        if (isset($_SESSION['p_id'][$p_id])) {
            // ลบรายการที่เลือกออกจาก $_SESSION
            unset($_SESSION['p_id'][$p_id]);
            unset($_SESSION['p_quantity'][$p_id]);
            
            $alert_message = 'ลบสินค้าเรียบร้อยแล้ว';
        } else {
            $alert_message = 'ไม่สามารถลบสินค้าที่เลือกได้';
        }
    }
}

header("Location: order.php?alert_message=" . urlencode($alert_message));
exit();
?>