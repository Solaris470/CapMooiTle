<?php
include ('../condb.php');

$c_name = $_POST['c_name'];
$c_tel = $_POST['c_tel'];
$c_email = $_POST['c_mail'];
$c_user = $_POST['c_user'];
$c_password = $_POST['c_password'];
$hashed_password = password_hash($c_password, PASSWORD_DEFAULT);

// $checkQuery = "SELECT * FROM users WHERE c_email = '$c_email' OR c_username = '$c_user'";
// $result = $conn->$checkQuery;
// $row = $result->fetch_assoc();

// if ($row['count'] > 0) {
//     $error_message = "อีเมลหรือชื่อผู้ใช้ซ้ำกับในระบบ";
//     header('Location: regis.php?error=' . urlencode($error_message));
//     exit();
// } else {
    // No duplicate found, proceed with the insertion
    $sql = "INSERT INTO users (c_name, c_tel, c_email,c_username, c_password) VALUES ('$c_name', '$c_tel', '$c_email', '$c_user', '$hashed_password')";

    if ($conn->query($sql)) {
        //Get User id
        $query = "SELECT c_id, c_username,c_password FROM users WHERE c_username = '$c_user'";
        $result = $conn->query($query);
        $row = $result->fetch_assoc();
        
        $_SESSION['user_id'] = $row['c_id'];
        $_SESSION['user_name'] = $row['c_username'];

        header('Location: ../index.php');
    } else {
        $error_message = "ชื่อผู้ใช้หรืออีเมลซ้ำ หากมีปัญหากรุณาติดต่อผู้ดูแลระบบ";
        header('Location: regis.php?error=' . urlencode($error_message));
        exit();
    }
// }
$conn->close();
?>