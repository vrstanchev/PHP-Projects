<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
<title>Admin</title>
</head>
<body class="container">
	<?php
	session_start();
	echo "Hello, " . $_SESSION['username'];
	 ?>
<ul>
  <li><a href="createpost.php">Create post</a></li>
  <li><a href="addcomment.php">Add comment</a></li>
</ul></br>
<?php
require_once 'conn.php';
$sql = "SELECT title, author, content, timestamp FROM posts";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

  while($row = $result->fetch_assoc()) {
echo "<table>";
echo "<tr><td>Title:</td><td>" . $row["title"] . "</td></tr>";
echo "<tr><td>Author:</td><td>" . $row["author"] . "</td></tr>";
echo "<tr><td>Content:</td><td>" . $row["content"] . "</td></tr>";
echo "<tr><td>Timestamp:</td><td>" . $row["timestamp"] . "</td></tr>";
echo "<tr><td colspan='2'>";
echo   "  <a href='editpost.php?POST_ID=" . $row["POST_ID"] . "'>Edit</a> "; 
echo   "     <a href='deletepost.php?POST_ID=" . $row["POST_ID"] . "'>Delete</a>"; 
echo   "</td></tr>";
echo "</table>";
 }
} else {
  echo "0 results";
}
?>
</body>
</html>
