<?php
    include("dataprovider.php");
class xylydangnhap2 {
    private $tendangnhap;
    private $pass;
    private $tmp;
    private $conn;
    private $errorDisplayed = false; // Khởi tạo biến flag

    function __construct() {
        $this->tendangnhap = $_POST['tendangnhap'];
        $this->pass = $_POST['password'];
        $this->tmp = new dataprovider();
        $this->conn = $this->tmp->executeQuery("SELECT * FROM taikhoan WHERE tendangnhap='".$this->tendangnhap."' AND password='".$this->pass."'");
    }

    function checkLogin() {
        if (mysqli_num_rows($this->conn)>0) {
            while ($row = mysqli_fetch_array($this->conn)) {
                if ($row['tinhtrang']==0) {
                    echo "<script>alert('Your account is blocked!!!!!!!')</script>";
                } else {
                    if ($row['manhomquyen']==0) {
                        ob_start();
                        header("Location: index.php");
                        ob_end_flush();
                        exit; 
                    } else if ($row['manhomquyen']>=1) {
                        ob_start();
                        header("Location: quanly.php"); //quanly.php chua co
                        ob_end_flush();
                        exit; 
                    }
                    unset($_POST['tendangnhap']);
                    unset($_POST['matkhau']);
                }
            }
        } else {
            if (!$this->errorDisplayed) { // Kiểm tra nếu thông báo lỗi chưa được hiển thị
                echo "<script>alert('Tai khoan khong ton tai!!!!!!!')</script>";
                $this->errorDisplayed = true; // Đặt biến flag để thông báo lỗi đã được hiển thị
            }
        }
    }
}
?>
