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
<?php
 try{
        include('conn.php'); 
           $usersearch0=$_POST['usersearch'] ;
    $lessontitle0=trim($_POST['lessontitle']) ;
        $stmt = $db -> prepare("SELECT AUTHOR,TITLE from homeworks WHERE AUTHOR='$usersearch0' and TITLE='$lessontitle0';");
        
        /* execute the query */
        $stmt -> execute();        
        
        /* fetch all results */
        $res = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
        foreach($res as $row){
echo '<article>'.'<br>';
echo'<p>'. $row['AUTHOR'] . '</p>';
      echo'<h1>'. $row['TITLE'] . '</h1>';
        echo '</article>';
}
        
                
        /* close connection */
        $db = null;
    }
    catch (PDOExecption $e){
        echo $e->getMessage();
    }    
    
?>
<form method="post" action="?">
    <input type="number" name="gradenumber"></br>
    <input type="submit" value="add grade">
</form>
<?php

$grademum=$_POST['gradenumber'] ;
$_POST['gradenumber']=$_SESSION['gradenum'];
?>
<?php 
session_start();
    try{
        include('conn.php'); 
        $usersearch1=$_POST['usersearch'] ;
    $lessontitle1=trim($_POST['lessontitle']) ;
        $stmt ="SELECT COUNT(*) AUTHOR,TITLE from homeworks WHERE AUTHOR='$usersearch1' and TITLE='$lessontitle1';";
         $stat=$db->query($stmt);
$cnt=$stat->fetchColumn();
if($cnt==1) {
    $_POST['usersearch']=$_SESSION['usersear'];
     $_POST['lessontitle']=$_SESSION['lesstitle'];
    
}
        
                
        /* close connection */
        $db = null;
    }
    catch (PDOExecption $e){
        echo $e->getMessage();
    }    
    
?>
<?php 

    try{
        
        include('conn.php'); 
        $grteacher=$_SESSION['username'];
        $forwho=$_SESSION['usersear'];
     $lesstit=$_SESSION['lesstitle'];
     $fingrade=$_SESSION['gradenum'];
        
        $stmt = $db -> prepare("INSERT INTO GRCHECK (TITLE,GRSTUDENT,GRTEACHER,GRADE) VALUES (:TITLE,:GRSTUDENT,:GRTEACHER,:GRADE);");
       
        
        $stmt -> bindParam(':TITLE', $lesstit, PDO::PARAM_STR);
         $stmt -> bindParam(':GRSTUDENT', $forwho, PDO::PARAM_STR);
          $stmt -> bindParam(':GRTEACHER', $grteacher, PDO::PARAM_STR);
          $stmt -> bindParam(':GRADE', $fingrade, PDO::PARAM_STR);
       
        if( $stmt -> execute() ){
           header("Location:index.php");
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