<!DOCTYPE HTML>
<html>
    <head>
        <title>Search Student</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="styles.css" />
    </head>
    <body>
        <h1>Tърси студент</h1>
        <form method="post" action="gradecheck.php" onsubmit="return(validateform());" name="regform" enctype="multipart/form-data">
            <input type="text" name="usersearch" placeholder="Enter user:"></br>
            <input type="text" name="lessontitle"  placeholder="Enter lesson title:"></br>
  <input type="submit" value="Search sudent" name="submit">
        </form>
        <script>
          function validateform(){
              if(document.regform.usersearch.value=""){
                  alert("Enter valid user");
                  document.regform.usersearch.focus();
                  return false;
              }
               if(document.regform.lessontitle.value=""){
                  alert("Enter valid lesson title");
                  document.regform.lessontitle.focus();
                  return false;
              }
              
              
          } 
        </script>
    </body>
</html>