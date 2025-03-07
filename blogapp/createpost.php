<!DOCTYPE html>
<html>
<head>
	 <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
<title>Create post</title>
</head>
<body class="container">
<?php
	session_start();
echo "Hello, " . $_SESSION['username'];
?>
	<h1>Create post </h1>
<form method="POST" action="postauth.php">
<label for="title">Title</label>
<input type="text" name="title" placeholder=" Enter title"></br>
<label for="content">Content</label>
<textarea max="255" name="content" placeholder=" Enter post content"></textarea></br>
<label for="timestamp">Timestamp</label>
<input type="date" name="timestamp" value="2025-03-01" min="2025-01-01" max="2028-12-31" /> </br>
<input type="submit" name="submit" value="submit">
</form>
</body>
</html>
