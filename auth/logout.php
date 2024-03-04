<?php
session_start(); // เริ่ม session (หากยังไม่ได้ทำ)

// ล้าง session ทั้งหมด
session_unset();
session_destroy();

// Redirect ไปยังหน้าหลักหรือหน้า Login
header("Location: login.php"); // แก้เป็น URL ที่ต้องการให้ redirect
exit();
?>
