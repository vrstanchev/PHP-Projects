<!DOCTYPE html>
<html>
<head>
<title>
Вътрешна страница
</title>
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
<?php
session_start();
echo '<b>';
echo "Hello,";
echo $_SESSION['username'];
echo '</b>';
echo '</br>';
?>
<?php 
    try{
        include('conn.php'); 
        
        /* Create a prepared statement */
        $stmt = $db -> prepare("SELECT * from lesson");
        
        /* execute the query */
        $stmt -> execute();        
        
        /* fetch all results */
        $res = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
        foreach($res as $row){
echo '<article>'.'<br>';
echo'<p>'. $row['author'] . '</p>';
      echo'<h1>'. $row['TITLE'] . '</h1>';
      echo  '<p>'.$row['CONTENT'] .'</p>';
      echo $row['RESOURCES'] . '<br>';
        echo '</article>';
}
        
                
        /* close connection */
        $db = null;
    }
    catch (PDOExecption $e){
        echo $e->getMessage();
    }    
    
?>
</body>
</html>