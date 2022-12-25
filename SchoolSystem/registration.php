<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>Регистрация</title>	
</head>
<body>
<h1>Регистрация</h1>	
<form method="POST" action="reg.php" enctype="multipart/form-data">
<input type="text" name="uname" placeholder="потребителско име"  required></br>
<input type="password" name="upass" placeholder="парола"  required></br>
<input type="password" name="rpass" placeholder="парола - отново"  required></br>
<input type="text" name="pname" placeholder="Име" required></br>
<input type="text" name="psurname" placeholder="Фамилия" required></br>
<select name="sel" required>
<option value="junior">програмист - Junior</option>
<option value="mid">програмист - Mid-level</option>
<option value="senior">програмист - Senior</option>
<option value="offsup">поддръжка офис</option>
<option value="techsup">поддръжка - техническа част</option>
</select></br>
<input type="submit" name="submit" value="Потвърди">
</form>	
</body>
</body>
</html>
