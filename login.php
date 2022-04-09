<?php
session_start();

require_once ('dbhelper.php');
$msg = '';
if (!empty($_POST)) {
	$email    = $_POST['email'];
	$password = $_POST['password'];

	if (!empty($email) && !empty($password)) {
		$password = md5($password);
		$sql      = "select * from user where email = '$email' and password = '$password'";
		$data     = executeResult($sql);

		if (count($data) > 0) {
			$_SESSION['user'] = $data[0];

			header('Location: gift.php');
			die();
		} else {
			$msg = "Login failed";
		}
	} else {
		$msg = "Login failed";
	}
}
?>


<!DOCTYPE html>
<html>
<head>
<title>Đăng nhập</title>
    <!-- <link rel="stylesheet" type="text/css" href="Login.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="Login.css">
    <style>
        body{
    margin: 0;
    padding: 0;
    background: url(img/background.jpg);
    background-size: cover;
    font-family: sans-serif;
    background-repeat: no-repeat;
}

.loginbox{
    width: 600px;
    height: 470px;
    background: #000;
    color: #fff;
    top: 50%;
    left: 50%;
    position: absolute;
    transform: translate(-50%,-50%);
    box-sizing: border-box;
    padding: 70px 30px;
}

.avatar{
    width: 100px;
    height: 100px;
    border-radius: 50%;
    position: absolute;
    top: -50px;
    left: calc(50% - 50px);
}

h1{
    margin: 0;
    padding: 0 0 20px;
    text-align: center;
    font-size: 22px;
}

.loginbox p{
    margin: 0;
    padding: 0;
    font-weight: bold;
}

.loginbox input{
    width: 100%;
    margin-bottom: 20px;
}

.loginbox input[type="text"], input[type="password"]
{
    border: none;
    border-bottom: 1px solid #fff;
    background: transparent;
    outline: none;
    height: 40px;
    color: #fff;
    font-size: 16px;
}
.loginbox input[type="submit"]
{
    border: none;
    outline: none;
    height: 40px;
    background: #3970b0;
    color: #fff;
    font-size: 18px;
    border-radius: 20px;
    margin-top:20px;
}
.loginbox input[type="submit"]:hover
{
    cursor: pointer;
}
.loginbox a{
    text-decoration: none;
    font-size: 20px;
    line-height: 20px;
    color: wheat;
}

.loginbox a:hover
{
    color: white;
}

.fa {
    padding: 12px;
    font-size: 20px;
    width: 20px;
    text-align: center;
    text-decoration: none;
    margin: 1px 1px;
  }

.fa-facebook{
    background: #3B5998;
    color: white;
}

.fa-twitter{
    background: #55ACEE;
    color: white;
}

.fa-instagram{
    background: rgb(233, 155, 38);
    color: white;
}
.fa-youtube{
    background:red ;
    color: #fff;
}
.fa-google{
    background:#55ACEE ;
    color: #fff;
}
.fa-rss{
    background:#15082d ;
    color: #f8a800;
}
.fa-vimeo{
    background:#55ACEE ;
    color: #fff;
}
.fa-pinterest{
    background:red ;
    color: #fff;
}

.fa:hover{
    opacity: 0.7;
}
    </style>
</head>
	<body>
		<div class="loginbox">
			<img src="img/avatar.png" class="avatar">
			<h2 style="text-align: center;">Đăng nhập</h2>
			<h2 style="text-align: center; color: red"><?=$msg?></h2>

			<form method="post">
			<p>Email</p>
            <input required="true" type="email" name="email" style="width: 100%;" placeholder="Nhập email">
            <p>Mật khẩu</p>
            <input required="true" type="password" name="password" style="width: 100%;" placeholder="Nhập mật khẩu">
            
    
            <a  href="https://www.facebook.com/" class="fa fa-facebook"></a>
        	<a  href="https://www.twitter.com/" class="fa fa-twitter"></a>
			<a  href="https://www.youtube.com" class="fa fa-youtube"></a>
        	<a  href="https://www.instagram.com" class="fa fa-instagram"></a>
            <a  href="https://www.google.com" class="fa fa-google"></a>
            <a  href="https://www.rss.com" class="fa fa-rss"></a>
            <a  href="https://www.vimeo.com" class="fa fa-vimeo"></a>
            <a  href="https://www.pinterest.com" class="fa fa-pinterest"></a><br><br>
			<a href="register.php">Lập tài khoản mới</a>
            <a href="demo.html"><input type="submit" name="" value="Đăng nhập"></a>
			</form>
		</div>
	</body>
</html>