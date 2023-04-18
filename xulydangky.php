<?php
    include('dataprovider.php');
    $name=$_POST['name'];
    $useraccount=$_POST['useraccount'];
    $password=$_POST['password'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $status = '';
    $tmp = new dataprovider(); 
    $conn=$tmp->executeQuery("select * from khachhang where MaKH ='$useraccount' or Email='$email'");
    if (mysqli_num_rows($conn) > 0){
      $status='tontai';
    } else {
      $conn = $tmp->insert_update_delete("insert into taikhoan(tendangnhap,password,manhomquyen,tinhtrang,ngaytaotk) values('$useraccount','$password','3','1','2023-04-20');");
      $conn = $tmp->insert_update_delete("insert into khachhang(MaKH,TenKH,Dienthoai,Email) values('$useraccount','$name','$phone','$email');");
      $status='thanhcong';
    }
    echo $status;
?>