<!DOCTYPE html>
<html>
<head>
	 <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
<title>Registration</title>
</head>
<body class="container">
<form method="POST" action="adduser.php">
<label for="username">Username</label>
<input type="text" name="username" id="username" placeholder=" Enter username"></br>
<label for="password">Password</label>
<input type="password" name="password" id="password" placeholder="Enter password"></br>
<label for="role">Select blog plan</label>
<select id="role" id="role" name="role">
  <option value="Basic">Basic</option>
  <option value="Premium">Premium</option>
</select></br>
<input type="submit" name="submit" value="submit" class="button">
</form>
</body>
</html>
