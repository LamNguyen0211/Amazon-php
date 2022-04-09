<?php
session_start();

require_once ('./dbhelper.php');
$msg = '';
if (!empty($_POST)) {
	$fullname   = $_POST['fullname'];
	$email      = $_POST['email'];
	$password   = $_POST['password'];
	$confirmPwd = $_POST['confirm_pwd'];

	if (!empty($email) && $password == $confirmPwd) {
		$password = md5($password);
		$sql      = "insert into user (fullname, email, password) values ('$fullname', '$email', '$password')";
		execute($sql);
	} else {
		$msg = "Register failed";
	}
}
?>


<html>
	<head>
		<title>Register page</title>
		<meta charset="utf-8">

		<style type="text/css">
			body{
                margin: 0;
                padding: 0;
                background: url(img/background.jpg);
                background-size: cover;
                font-family: sans-serif;
                color:#fff;
            }
            .main-content {
                width: 640px;
                margin: 0px auto;
            }
            a{
                text-decoration: none;
                font-size: 20px;
                line-height: 20px;
                color: #f0f0f0;
                
            }
            .New{
                border: none;
                outline: none;
                height: 40px;
                background: #3970b0;
                color: #fff;
                font-style:bold;
                font-size: 20px;
                border-radius: 10px;
                margin-top: 20px;
            }
		</style>
	</head>
	<body>
		<div class="main-content">
			<h2 style="text-align: center;">Đăng ký</h2>
			<h2 style="text-align: center; color: red"><?=$msg?></h2>

			<form method="post">
				<label>Họ tên: </label>
				<input type="text" name="fullname" placeholder="Enter full name" required="true" style="width: 100%;">
				<br/><br/>
				<label>Email: </label>
				<input type="email" name="email" placeholder="Enter email" required="true" style="width: 100%;">
				<br/><br/>
				<label>Mật khẩu: </label>
				<input type="password" name="password" placeholder="Enter password" required="true" style="width: 100%;">
				<br/><br/>
				<label>Xác nhận mật khẩu: </label>
				<input type="password" name="confirm_pwd" placeholder="Enter confirm password" required="true" style="width: 100%;">
				<br/><br/>
				<a href="login.php">Đã có tài khoản</a>
				<br/><br/>
				<button type="submit" class="New">Đăng ký</button>
			</form>
		</div>
	</body>
</html>