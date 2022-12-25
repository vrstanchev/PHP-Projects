<!DOCTYPE HTML>
<html>
    <head>
        <title>Add user</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="styles.css" />
    </head>
    <body>
        <h1>Регистрация</h1>
        <form method="post" action="adduser.php" onsubmit="return(validateform());" name="regform" enctype="multipart/form-data">
            <input type="text" name="uname1" pattern="^[A-Za-z][A-Za-z0-9_]{7,29}$" placeholder="Enter username:"></br>
            <input type="password" name="upass" pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}$" placeholder="Enter password:"></br>
            <input type="radio" name="status" id="T" value="Teacher">
            <label for="T">Teacher</label></br>
            <input type="radio" name="status" id="S" value="Student">
            <label for="S">Student</label></br>
  <input type="submit" value="Add User" name="submit">
        </form>
        <script>
          function validateform(){
              if(document.regform.uname.value=""){
                  alert("Enter valid username");
                  document.regform.uname.focus();
                  return false;
              }
               if(document.regform.upass.value=""){
                  alert("Enter valid password");
                  document.regform.upass.focus();
                  return false;
              }
              
              
          } 
        </script>
    </body>
</html>