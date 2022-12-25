<!DOCTYPE HTML>
<html>
<head>
<title>Добави коментар</title>
<meta charset="UTF-8">
</head>
<body>
<h1>Добави отговор на коментар</h1>
<form method="POST" action="replyAdd.php" enctype="multipart/form-data">
<input type="text" name="replyto" placeholder="отговори на:" required></br>
<textarea name="reply" placeholder="съдържание" col="30" rows="10" required ></textarea> </br>
<input type="file" name="repfoto"></br>
<input type="submit" value="Потвърди">
</form>
</body>
</html>


