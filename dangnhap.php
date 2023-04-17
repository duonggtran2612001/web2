<!-- 0 => index (khach hang); !=0 => quanly  -->
<style>
    body {
	font-family: Arial, sans-serif;
	background-color: #f1f1f1;
}

.login-box {
	background-color: #fff;
	border-radius: 5px;
	box-shadow: 0px 0px 5px #aaa;
	padding: 20px;
	margin: 50px auto;
	max-width: 500px;
}

a {
  font-weight: normal;
  text-decoration: none;
  color: inherit;
}


h2 {
	text-align: center;
	margin-bottom: 20px;
}

label {
	display: block;
	margin-bottom: 5px;
}

input[type=text], input[type=password] {
	width: 100%;
	padding: 10px;
	border-radius: 3px;
	border: 1px solid #ccc;
	margin-bottom: 20px;
}

button[type=submit] {
	background-color: #4CAF50;
	color: #fff;
	padding: 10px 20px;
	border-radius: 3px;
	border: none;
	cursor: pointer;
}

button[type=submit]:hover {
	background-color: #45a049;
}

</style>
<!DOCTYPE html>
<html>
<head>
	<title>Đăng nhập</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> -->
	<div class="login-box">
		<h2>Đăng nhập</h2>
		<form method="POST" action="dangnhap.php">
			<label>Tên đăng nhập</label>
			<input type="text" name="tendangnhap" placeholder="Nhập tên đăng nhập">
			<label>Mật khẩu</label>
			<input type="password" name="matkhau" placeholder="Nhập mật khẩu">
			<button  type="submit" id="dn">Đăng nhập</button>
		</form>
	</div>
	<?php
		include('xulydangnhap2.php');
		if(isset($_POST['tendangnhap']) && isset($_POST['matkhau'])){
			$login = new xylydangnhap2();
			$login->checkLogin();
			if(!isset($_POST['tendangnhap']) && !isset($_POST['matkhau'])){
			exit;
			}
		}
	?>
</body>
</html>