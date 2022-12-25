<!DOCTYPE html>
<html>
<head>
<title>
Билети за  техническа поддръжка
</title>
<meta charset="utf-8">
</head>
<body>
<button><a href="destroy.php">Излез</a></button></br>
<?php
$jb=$_SESSION['job'];
session_start();
require_once("config.php");
$conn="mysql:host=$host;dbname=$db;charset=UTF8";
try{
$pdo=new PDO($conn,$user,$password);
echo '<b>';
echo "Hello,";
echo $_SESSION['username'];
echo '</b>';
echo '</br>';
$jb="techsupp";

echo '<h2>Билети за  техническа поддръжка</h2>';
echo '</br>';
if($pdo){
$isql="SELECT ticket FROM TICKETS WHERE forwho=:forwho;";
$stat=$pdo->prepare($isql);
$stat->execute([
':forwho' => $jb
]);
$tickets=$stat->fetchAll(PDO::FETCH_ASSOC);
if($tickets){
	foreach($tickets as $ticket){
		echo $ticket['ticket'] . '</br>';
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
<html>
