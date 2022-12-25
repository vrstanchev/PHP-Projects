<!DOCTYPE html>
<html>
<head>
<title>
Вътрешна страница
</title>
<link rel="stylesheet" type="text/css" href="styles.css" />
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <header class="header">
<nav class="topnav">
<a href="insertlesson.php">Добави урок</a>
<a href="viewhw.php">Провери домашно</a>
<a href="addgrade.php">Добави оценка</a>
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
<div class="column">
<a href="insertlesson.php">Добави урок</a></br>
<a href="viewhw.php">Провери домашно</a></br>
<a href="addgrade.php">Добави оценка</a>
</div>
<div class="column">
<?php
try{
        
        include('conn.php');
   echo '<h1>'. "Предадени домашни" . '<h1>';
         $stmt = $db -> prepare("SELECT TITLE,CONTENT,AUTHOR,HWST from homeworks");
        if ( $stmt -> execute() )
        {
            $res = $stmt->fetchAll(PDO::FETCH_ASSOC);
          
        foreach($res as $row){
      
      echo'<h3>' .'<b>TITLE: </b>'. $row['TITLE'] . '</h3>';
      echo  '<h3>'.'<b>CONTENT: </b>'.$row['CONTENT'] .'</h3>';
      echo'<h3>'.'<b>AUTHOR: </b>'. $row['AUTHOR'] . '</h3>';
        echo'<h3>'.'<b>HW STATUS: </b>'. $row['HWST'] . '</h3>';
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
        $status="Student";
       echo '<h1>'. "Списък ученици" . '<h1>';
        $stmt = $db -> prepare("SELECT UNAME FROM users WHERE STATUS=:STATUS");
        $stmt -> bindParam(':STATUS', $status, PDO::PARAM_STR);
        /* execute the query */
        if ( $stmt -> execute() )
        {
            $res = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
        foreach($res as $row){
      echo'<h3>'. $row['UNAME'] . '</h3>';
        }}
        
        /* close connection */
        $db = null;
    }
    catch (PDOExecption $e){
        echo $e->getMessage();
    }    

?>
</div>
</body>
</html>