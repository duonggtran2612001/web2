<!DOCTYPE html>
<html>
<head>
	<title>Đăng nhập</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="login.css">
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
</head>
<body>
	<main>
		<section class="login">
			<h1>Đăng nhập</h1>
			<form method="POST">
				<label for="email">Email</label>
				<input type="text" id="tendangnhap" name="tendangnhap" required>
				<label for="password">Mật khẩu</label>
				<input type="password" id="password" name="password" required>
				<input type="submit" id="btnLogin" value="Đăng nhập">
			</form>
			<script>
				$(document).ready(function() {
				$('#btnLogin').click(function() { // Khi người dùng nhấn nút đăng nhập
				var tendangnhap = $('#tendangnhap').val(); // Lấy giá trị tên đăng nhập từ input có id là "tendangnhap"
				var password = $('#password').val(); // Lấy giá trị mật khẩu từ input có id là "password"

				$.ajax({
				type: 'POST',
				url: '../Controller/xulydangnhap.php',
				data: {
				tendangnhap: tendangnhap,
				password: password
				},
				success: function(result) {
				if (result == 'success') {
					window.location.href = '../ViewAdmin/web_admin.php';
				} else if (result == 'successKH') {
					window.location.href = '../ViewUser/index.php';
				} else if (result == 'blocked') {
					alert('Your account is blocked!');
				} else {
					alert('Invalid username or password!');
				}
				}
				});
				});
				});
			</script>
			<p>Chưa có tài khoản? <a href="index.php?act=DK">Đăng ký ngay</a></p>
		</section>
	</main>
		
</body>
</html>
