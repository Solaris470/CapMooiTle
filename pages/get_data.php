<?php
include("../condb.php");

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    if (isset($_GET['action']) && $_GET['action'] == 'getProvinces') {
        // ดึงข้อมูลจังหวัด
        $provinces = getProvinces();
        echo json_encode($provinces);
    } elseif (isset($_GET['action']) && $_GET['action'] == 'getDistricts') {
        // ดึงข้อมูลอำเภอ
        if (isset($_GET['province_id'])) {
            $province_id = $_GET['province_id'];
            $districts = getDistricts($province_id);
            echo json_encode($districts);
        }
    } elseif (isset($_GET['action']) && $_GET['action'] == 'getSubDistricts') {
        // ดึงข้อมูลตำบล
        if (isset($_GET['district_id'])) {
            $district_id = $_GET['district_id'];
            $sub_districts = getSubDistricts($district_id);
            echo json_encode($sub_districts);
        }
    }
}

function getProvinces() {
    global $conn;
    $sql = "SELECT * FROM provinces";
    $result = $conn->query($sql);

    $provinces = array();

    while($row = $result->fetch_assoc()) {
        $provinces[] = $row;
    }

    return $provinces;
}

function getDistricts($province_id) {
    global $conn;
    $sql = "SELECT * FROM district WHERE province_code = $province_id";
    $result = $conn->query($sql);
    $districts = array();

    while($row = $result->fetch_assoc()) {
        $districts[] = $row;
    }

    return $districts;
}

function getSubDistricts($district_id) {
    global $conn;
    $sql = "SELECT * FROM subdistrict WHERE district_code = $district_id";
    $result = $conn->query($sql);

    $sub_districts = array();

    while($row = $result->fetch_assoc()) {
        $sub_districts[] = $row;
    }

    return $sub_districts;
}
?>
