<!DOCTYPE html>
<html>
<head>
<title>
Вътрешна страница
</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <header class="header">

ви урок</a>
машно</a>
ценка</a>


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
<?php
try{
        
        include('conn.php');
   echo '<h1>'. "Сканирани потребители" . '<h1>';
         $stmt = $db -> prepare("SELECT LNAME,AREA from qrusers");
        if ( $stmt -> execute() )
        {
            $res = $stmt->fetchAll(PDO::FETCH_ASSOC);
          
        foreach($res as $row){
      
      echo'<h3>' .'<b>Фамилия: </b>'. $row['LNAME'] . '</h3>';
      echo  '<h3>'.'<b>Област на достъп: </b>'.$row['AREA'] .'</h3>';
        }}
        
        /* close connection */
        $db = null;
    }
    catch (PDOExecption $e){
        echo $e->getMessage();
    }    

?>
</div>
 <form method="post" action="valid.php" enctype="multipart/form-data">
<input type="text" name="LNAME"></br>
<select name="AREA">
<option value="swimming-area">swimming-area</option>
<option value="running-area">running-area</option>
<option value="rafting-area">rafting-area</option>
</select>
  <input type="submit" value="Search" name="submit">
        </form>
</body>
</html>
