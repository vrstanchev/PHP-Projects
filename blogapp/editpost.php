<?php
require_once 'conn.php';
$postID=$_GET['POST_ID'];
$title = $_POST['title'];
$content = $_POST['content'];
$timestamp = $_POST['timestamp'];
$author=$_SESSION['username'];
 $sqlpost = $conn->prepare("UPDATE posts SET author=?, title=?,content=?,timestamp=? WHERE POST_ID=?";
  $sqlpost->bind_param("ssssi", $author, $title, $content,$timestamp,$postID);
$sqlpost->execute();
header("Location: admin.php");
