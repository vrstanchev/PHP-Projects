<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
<title>Home</title>
</head>
<body class="container">
	<ul>
  <li><a href="registration.php">Sign Up</a></li>
  <li><a href="login.php">Login</a></li>
</ul>
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
echo "</table>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>
</body>
</html>
