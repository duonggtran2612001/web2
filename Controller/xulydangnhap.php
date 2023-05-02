<?php
    session_start();
    include("../Model/dataprovider.php");
    $tendangnhap = $_POST['tendangnhap'];
    $password = $_POST['password'];
    $tmp = new dataprovider();
    $conn = $tmp->executeQuery("SELECT * FROM taikhoan WHERE tendangnhap='".$tendangnhap."' AND password='".$password."'");
    if (mysqli_num_rows($conn) > 0) {
        $row = mysqli_fetch_array($conn);
        if ($row['tinhtrang'] == 0) {
            // Tài khoản bị khóa
            echo 'blocked';
        } else{
            if ($row['manhomquyen']>0) {
            // Đăng nhập thành công admin
            $_SESSION['user'] = $row['tendangnhap'];
            $_SESSION['matk'] = $row['matk'];
            echo 'success';
            }  else {
            // Đăng nhập thành công khách hàng
            $_SESSION['user'] = $row['tendangnhap'];
            $_SESSION['role'] = 'customer';
            echo 'successKH';
            }
        } 
    } else {
        // Đăng nhập thất bại
        echo 'error';
    }
?>
