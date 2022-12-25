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
echo ($_SESSION['username']);
echo '</b>';
echo '</br>';
?>	
<div class="column">
    <a href="inserthw.php">Добави домашно</a></br>
     <a href="viewresults.php"> Оценки</a></br>
    
</div>
<div class="column">
    <?php 
    
    try{
        
        include('conn.php');
         echo '<h3>'. "Уроци" . '<h3>';
        $stmt = $db -> prepare("SELECT TITLE  from lesson");
         if ( $stmt -> execute() )
        {
            $res = $stmt->fetchAll(PDO::FETCH_ASSOC);
        foreach($res as $row){
echo '<article>'.'<br>';
echo'<h3>'.'<b>TITLE :</b>'. $row['TITLE'] . '</h3>';
     
        echo '</article>';
        }}
        
        /* close connection */
        $db = null;
    }
    catch (PDOExecption $e){
        echo $e->getMessage();
    }    
    
?>
</div>
<div class="column">
    
      <?php 
    
    try{
        
        include('conn.php');
        $auth=$_SESSION['username'];
        $hwstatus="none";
        $stmt = $db -> prepare("SELECT TITLE,HWST  from homeworks WHERE AUTHOR=:AUTHOR and HWST=:HWST");
          $stmt -> bindParam(':AUTHOR', $auth, PDO::PARAM_STR);
        $stmt -> bindParam(':HWST', $hwstatus, PDO::PARAM_STR);
         if ( $stmt -> execute() )
        {
            $res = $stmt->fetchAll(PDO::FETCH_ASSOC);
        echo '<h3>'."Непредадени домашни".'<h3>'.'<br>';
        foreach($res as $row){
echo '<article>'.'<br>';
echo'<h3>'.'<b>TITLE :</b>'. $row['TITLE'] . '</h3>';
echo'<h3>'.'<b>HW STATUS :</b>'. $row['HWST'] . '</h3>';
     
        echo '</article>';
        }}
        
        /* close connection */
        $db = null;
    }
    catch (PDOExecption $e){
        echo $e->getMessage();
    }    
    
?>
<div>
    <div class="column">
    
      <?php 
    
    try{
        
        include('conn.php');
        $auth=$_SESSION['username'];
        $hwstatus=null;
         echo '<h3>'. "Оценки" . '<h3>';
        $stmt = $db -> prepare("SELECT *  from GRCHECK WHERE  GRSTUDENT=:GRSTUDENT");
          $stmt -> bindParam(':GRSTUDENT', $auth, PDO::PARAM_STR);
         if ( $stmt -> execute() )
        {
            $res = $stmt->fetchAll(PDO::FETCH_ASSOC);
        echo "Непредадени домашни".'<br>';
        foreach($res as $row){
echo '<article>'.'<br>';

echo'<h3>'.'<b>TITLE :</b>'. $row['TITLE'] . '</h3>';
     echo'<h3>'.'<b>TEACHER: </b>'. $row['GRTEACHER'] . '</h3>';
     echo'<h3>'.'<b>GRADE: </b>'. $row['GRADE'] . '</h3>';
        echo '</article>';
        }}
        
        /* close connection */
        $db = null;
    }
    catch (PDOExecption $e){
        echo $e->getMessage();
    }    
    
?>
</div>

</div>
</body>
</html>