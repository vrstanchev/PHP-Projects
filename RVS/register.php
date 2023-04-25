<!DOCTYPE HTML>
<html>
    <head>
        <title>Add user</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="styles.css" />
    </head>
    <body>
        <h1>Регистрация на състезател</h1>
        <form method="post" action="adduser.php" enctype="multipart/form-data">
            <input type="text" name="FNAME"  placeholder="Enter first name:"></br>
                <input type="text" name="LNAME"  placeholder="Enter last name:"></br>
             <select name="AREA">
				<option value="swimming-area">swimming-area</option>
				<option value="running-area">running-area</option>
				<option value="rafting-area">rafting-area</option>
				</select>
            <select name="SPORT">
				<option value="swimming">swimming</option>
				<option value="running">running</option>
				<option value="rafting">rafting</option>
				</select>
  <input type="submit" value="Add User" name="submit">
        </form>
    </body>
</html>
