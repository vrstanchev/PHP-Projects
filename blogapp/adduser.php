<?php
require_once 'conn.php';
$username = $_POST['username'];
$password = $_POST['password'];
$role = $_POST['role'];
$encpass=md5($password);
 $sqlinsert = $conn->prepare("INSERT INTO users (username, password,role)
  VALUES (?,?,? )");
  $sqlinsert->bind_param("sss", $username, $encpass, $role);
$sqlinsert->execute();
header("Location: login.php");
