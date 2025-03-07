<?php
require_once 'conn.php';
$title = $_POST['title'];
$content = $_POST['content'];
$timestamp = $_POST['timestamp'];
$author=$_SESSION['username'];
 $sqlpost = $conn->prepare("INSERT INTO posts (author, title,content,timestamp)
  VALUES (?,?,?,? )");
  $sqlpost->bind_param("ssss", $author, $title, $content,$timestamp);
$sqlpost->execute();
header("Location: admin.php");
