<!DOCTYPE HTML>
<html>
    <head>
        <title>Login</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="styles.css" />
    </head>
    <body>
        <h1>Вход</h1>
        <form method="post"  action="logincheck.php">
            <input type="text" name="uname1" placeholder="Enter username:"></br>
            <input type="password" name="upass" placeholder="Enter password:"></br>
            <input type="radio" name="status" id="T" value="Teacher">
             <label for="T">Teacher</label></br>
            <input type="radio" name="status" id="S" value="Student">
             <label for="S">Student</label></br>
  <input type="submit" value="Login" name="submit">
        </form>
         
      
    </body>
</html>