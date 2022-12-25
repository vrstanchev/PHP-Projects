<!DOCTYPE html>
<html>
<head>
<title>
Вътрешна страница
</title>
<meta charset="utf-8">
</head>
<body>
<?php
session_start();
echo '<b>';
echo "Hello,";
echo $_SESSION['username'];
echo '</b>';
echo '</br>';
?>	
<button><a href="ticket.php">Добави билет</a></button></br>
<button><a href="destroy.php">Излез</a></button></br>
<h2>Моите  билети</h2>
<?php
require_once("config.php");
$conn="mysql:host=$host;dbname=$db;charset=UTF8";
try{
$pdo=new PDO($conn,$user,$password);
$jb=$_SESSION['username'];
$ass="all";
echo '</br>';
if($pdo){
$isql="SELECT ticket,content,photo FROM TICKETS WHERE author=:author OR access=:access;";
$stat=$pdo->prepare($isql);
$stat->execute([
':author' => $jb,
':access' => $ass
]);
$tickets=$stat->fetchAll(PDO::FETCH_ASSOC);
if($tickets){
	foreach($tickets as $ticket){
		echo $ticket['ticket'] . '</br>';
		echo '</br>';
	}
}else{
echo "Failed";
}

}
}catch(PDOException $e){
echo $e->getMessage();

}
?>


<form method="POST" action="ticketinfo.php">
<input type="text" name="info" placeholder="Потърси инфо за билет"></br>
<input type="submit" value="Покажи инфо"></br>
</form>
</body>
</html>
