<!DOCTYPE html>
<html>
<head>
	<title>Đăng nhập</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="register.css">
</head>
<body>
	<main>
		<section class="register">
            <h1>Đăng kí</h1>
            <form>
                <label for="name">Họ tên:</label>
                <input type="text" id="name" name="name" required>
        
                <label for="phone">Số điện thoại:</label>
                <input type="tel" id="phone" name="phone" pattern="[0-9]{10}" required>
        
                <label for="address">Địa chỉ:</label>
                <input type="text" id="address" name="address" required>
        
                <label for="password">Mật khẩu:</label>
                <input type="password" id="password" name="password" minlength="6" required>

                <label for="confirm-password">Nhập lại mật khẩu</label>
				<input type="password" id="confirm-password" name="confirm-password" required>

                <input type="submit" value="Đăng kí">
            </form>
            <p>Đã có tài khoản? <a href="login.html">Đăng nhập ngay</a></p>
        </section>
</body>
</html>
