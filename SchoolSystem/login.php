<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Вход</title>
</head>
<body>
<h1>Вход</h1>
<form method="POST" action="auth.php">
<input type="text" name="uname" placeholder="потр име:"  autocomplete="off"></br>
<input type="password" name="upass" placeholder="парола:" autocomplete="off"></br>
<select name="jbtitle" required>
<option value="junior">програмист - Junior</option>
<option value="mid">програмист - Mid-level</option>
<option value="senior">програмист - Senior</option>
<option value="offsup" >поддръжка офис</option>
<option value="techsup">поддръжка - техническа част</option>
</select></br>
<input type="submit" name="submit1" value="Потвърди">

</form>
</body>
</html>
