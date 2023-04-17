<header>
    <h1>Sáp Store</h1>
    <nav>
        <ul>    
            <li><a href="index.php">Trang chủ</a></li>
            <li><a href="#">Sản phẩm</a></li>
            <li><a href="index.php?act=LH">Liên hệ</a></li>
            <li><a href="index.php?act=TT">Tin tức</a></li>
            <li><a href="#">Giỏ hàng</a></li>
            <li><?php session_start(); if(isset($_SESSION['user'])){echo $_SESSION['user'];}else{?><a href="index.php?act=Login">Đăng nhập</a><?php }?></li>
            <li><a href="#" onclick="logout()">Đăng xuất</a></li>
        </ul>
    </nav>
	<script>
		function logout() {
		window.location.href = "xulydangxuat.php";
		}
	</script>
</header>
