<!DOCTYPE html>
<html>
<head>
<title>
Начало
</title>
<meta charset="utf-8">
</head>
<body>
<h1>Начало</h1>
<button><a href="registration.php">Регистрация</a></button>
<button><a href="login.php">Вход</a></button>
<img src="https://www.nicepng.com/png/detail/201-2015470_gnu-tux-gnu-linux-logo-png.png">
<?php
$url=$_SERVER["REQUEST_URI"];
if($url=="innerpage.php"){
	header("Location:errno.php");
}
?>
</body>
</html>
