<?php
require_once 'conn.php';
$username = $_POST['username'];
$password = $_POST['password'];
$role = $_POST['role'];
$encpass=md5($password);
 $sqlauth = $conn->prepare("SELECT * FROM users WHERE username=? AND password=?");
$sqlauth->execute([ $username, $encpass ]); 
$userlogged = $sqlauth->fetch();
$_SESSION['username'] = $username;
if ($userlogged) {
header("Location: admin.php");
} else { header("Location: login.php");}
