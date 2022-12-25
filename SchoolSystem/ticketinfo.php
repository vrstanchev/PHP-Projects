<!DOCTYPE html>
<html>
<head>
<title> Информация за билет
</title>
<meta charset="utf-8">
</head>
<body>
<button><a href="destroy.php">Излез</a></button></br>
<h2>Информация</h2>	
<?php
session_start();
require_once("config.php");
$inf=$_POST['info'];
$conn="mysql:host=$host;dbname=$db;charset=UTF8";
$_SESSION['cticket']=$inf;
try{
$pdo=new PDO($conn,$user,$password);
if($pdo){
$isql="SELECT ticket,content,photo FROM TICKETS WHERE ticket=?";
$stat=$pdo->prepare($isql);
$stat->execute([$inf]);
while($tickets=$stat->fetch()){
	    echo 'Ticket:';
		echo $tickets['ticket'] . '</br>';
		echo 'Content:';
		echo $tickets['content'] . '</br>';
		echo 'Photo:'; echo  '</br>';
		   echo '<img src="data:image/jpeg;base64,'.base64_encode( $tickets['photo'] ).'"/>';
		echo  '</br>';


	}
}

}
catch(PDOException $e){
echo $e->getMessage();

}
?>
<h2>Коментари</h2>
<?php
require_once("config.php");
$conn="mysql:host=$host;dbname=$db;charset=UTF8";

try{
$pdo=new PDO($conn,$user,$password);
$jb=$_SESSION['cticket'];
echo '</br>';
if($pdo){
$isql="SELECT author,cmnt,foto FROM COMMENTS WHERE name=:name;";
$stat=$pdo->prepare($isql);
$stat->execute([
':name' => $jb
]);
$tickets=$stat->fetchAll(PDO::FETCH_ASSOC);
if($tickets){
	foreach($tickets as $ticket){
		echo 'Username:';
		echo $ticket['author'] . '</br>';
		echo 'Comment:';
		echo $ticket['cmnt'] . '</br>';
		echo 'Photo:'; 
	echo '<img src="data:image/jpeg;base64,'.base64_encode( $ticket['foto'] ).'"/>';
		echo '</br>';
	}
}else{
echo "No comments";
echo '</br>';
}

}
}catch(PDOException $e){
echo $e->getMessage();

}
?>
<h2>Отговори</h2>
<?php
require_once("config.php");
$conn="mysql:host=$host;dbname=$db;charset=UTF8";
try{
$pdo=new PDO($conn,$user,$password);
$jb=$_SESSION['cticket'];
echo '</br>';
if($pdo){
$isql="SELECT replyauthor,replyto,reply,repfoto FROM ANSWER WHERE theme=:theme;";
$stat=$pdo->prepare($isql);
$stat->execute([
':theme' => $jb
]);
$tickets=$stat->fetchAll(PDO::FETCH_ASSOC);
if($tickets){
	foreach($tickets as $ticket){
		echo 'Username:';
		echo $ticket['replyauthor'] . '</br>';
		echo 'Reply-to:';
		echo $ticket['replyto'] . '</br>';
		echo 'Comment:';
		echo $ticket['reply'] . '</br>';
		echo 'Reply-Photo:';
		echo '<img src="data:image/png;base64,'.base64_encode( $ticket['repfoto'] ).'"/>';
		echo '</br>';
	}
}else{
echo "No answers ";
echo '</br>';
}

}
}catch(PDOException $e){
echo $e->getMessage();

}
?>
<button><a href="comment.php">Добави коментар</button></br>
<button><a href="reply.php">Добави отговор</button>
