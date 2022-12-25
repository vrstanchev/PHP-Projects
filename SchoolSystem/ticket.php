<!DOCTYPE HTML>
<html>
<head>
<title>Добави билет</title>
<meta charset="UTF-8">
</head>
<body>
<h1>Добави билет</h1>
<form method="POST" action="ticketAdd.php" enctype="multipart/form-data">
<input type="text" name="ticket" placeholder="заглавие" required></br>
<textarea name="content" placeholder="съдържание" col="30" rows="10" required ></textarea> </br>
<input type="file" name="photo"></br>
<b>Видима за:</b></br>
<select name="access" required>
<option value="me">за мен</option>
<option value="all">за всички</option>
</select></br>
<b>Предназначена  за:</b></br>
<select name="forwho" required>
<option value="offsupp">офис поддръжка</option>
<option value="techsupp">техническа поддръжка</option>
</select></br>
<input type="submit" value="Потвърди">
</form>
</body>
</html>
