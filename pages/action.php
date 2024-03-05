<?php
session_start();

$alert_message = ''; 

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
