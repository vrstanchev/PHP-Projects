<?php
session_start();
echo '<b>';
echo "Hello,";
echo $_SESSION['username'];
echo '</b>';
echo '</br>';
?>
<!DOCTYPE HTML>
<html>
    <head>
        <title>Add Homework</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
           <link rel="stylesheet" href="styles.css">
    </head>
    <body>
           <header class="header">
<nav class="topnav">
     <a href="viewlessons.php">Уроци</a>
     <a href="viewresults.php"> Оценки</a>
     <a href="inserthw.php">Добави домашно</a>
    <a href="logout.php">Излез</a>
</nav>    
<h1>ThinkGNU</h1>
<p><b>open-source lessons</b></p>
</header> 
        <h1>Добави новo домашно</h1>
        <form method="post" action="cr_hw.php" enctype="multipart/form-data">
            <input type="text" name="title"></br>
            <textarea name="content">
                
            </textarea></br>
             <input type="file" name="resources" id="resources"></br>
  <input type="submit" value="Upload file" name="submit">
        </form>
    </body>
</html>