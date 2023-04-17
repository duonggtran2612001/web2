<!DOCTYPE html>
<html>
<head>
	<title>Đăng nhập</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="register.css">
</head>
<body>
	<header>
		<div class="logo">
			<a href="index.html">Sáp Store</a>
		</div>
		<nav>
			<ul>
				<li><a href="index.php">Trang chủ</a></li>
				<li><a href="#">Sản phẩm</a></li>
				<li><a href="contact.php">Liên hệ</a></li>
                <li><a href="news.php">Tin tức</a></li>
                <li><a href="#">Giỏ hàng</a></li>
				<li><a href="login.php">Đăng nhập</a></li>
			</ul>
		</nav>
	</header>
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
        <hr style="border-top: 2px solid black; width: 100%;">
        <section class="map">
			<h2>Địa chỉ của chúng tôi</h2>
            <h4>CHI NHÁNH HÀ NỘI</h4>
            <p>Tầng 3, Hà Thành Plaza, 102 Thái Thịnh, Phường Trung Liệt, Quận Đống Đa, Hà Nội</p>
            <h4>CHI NHÁNH TP. HỒ CHÍ MINH</h4>
            <p>Tầng 3, Số 70 Lữ Gia, Phường 15, Quận 11, Thành phố Hồ Chí Minh</p>
            <br><br>
            <p>Số điện thoại: 0123456789</p>
		</section>
	</main>
	<footer>
		<p>© 2023 - Dương_Đình_Sinh</p>
	</footer>
</body>
</html>
