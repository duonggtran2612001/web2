<!DOCTYPE html>
<html>
<head>
	<title>Đăng nhập</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="register.css">
  <script src='js/main.js'></script>
</head>
<body>
	<main>
		<section class="register">
            <h1>Đăng kí</h1>
            <form method="post" onsubmit="return checkpass(event)">
                <label for="name">Họ tên:</label>
                <input type="text" id="name" name="name" required>

                <label for="useraccount">Tên tài khoản:</label>
                <input type="text" id="useraccount" name="useraccount" required>
        
                <label for="phone">Số điện thoại:</label>
                <input type="tel" id="phone" name="phone" pattern="(09|07|03|05|08)[0-9]{8}" required>

                <label for="email">Email:</label>
                <input type="email" name="email" id="email" required>
        
                <label for="password">Mật khẩu:</label>
                <input type="password" id="password" name="password" minlength="6" required>

                <label for="confirm-password">Nhập lại mật khẩu</label>
				        <input type="password" id="confirm-password" name="confirm-password" required>

                <input type="submit" id="btndangky" value="Đăng kí">
            </form>
            <p>Đã có tài khoản? <a href="login.html">Đăng nhập ngay</a></p>
        </section>
        <script>
//     function checksdt(event) {
//     var regrex = /^0\d{9}$/;
//     var sdt = document.getElementById("phone").value;
//     if (regrex.test(sdt)) {
//       return true;
//     }  else {
//         event.preventDefault();
//         alert("Sai số điện thoại!");
//       }
// }
  function checkpass(event){
    var pass=document.getElementById("password").value;
    var repass=document.getElementById("confirm-password").value;
      if (pass != repass){
        alert("sai passs");
        event.preventDefault();
      }   
    }
</script>
<script>
				$(document).ready(function() {
				$('#btndangky').click(function(event) {
            event.preventDefault();
            var useraccount = document.getElementById("useraccount").value; 
            var email = document.getElementById("email").value; 
            var name=document.getElementById("name").value;
            var password=document.getElementById("password").value; 
            var phone=document.getElementById("phone").value; 
				$.ajax({
				type: 'POST',
				url: 'xulydangky.php',
				data: {
				useraccount: useraccount,
				email: email,
        name: name,
        password: password,
        phone: phone
				},
				success: function(result) {
          // alert(result);
				if (result == 'thanhcong') {
          alert('dk thanh cong');
					window.location.href = 'index.php';
				} else if (result == 'tontai') {
					alert('tk da ton tai');
				}
				}
				});
				});
				});
</script>
</body>
</html>
