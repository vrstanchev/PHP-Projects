<?php
require_once('config.php');
session_start();
$uname=trim($_POST['uname']);
$upass=trim($_POST['upass']);
$crypt=md5($upass);
$jbtitle=trim($_POST['jbtitle']);
$submit1=$_POST['submit1'];
if(empty($uname)){
	echo "Enter username";
}
if(empty($upass)){
	echo "Enter password";
}
if(empty($jbtitle)){
	echo "Enter jobtitle";
}
$conn="mysql:host=$host;dbname=$db;charset=UTF8";
try{
$pdo=new PDO($conn,$user,$password);
if($pdo){
	if(isset($submit1)){
$isql="SELECT COUNT(*) FROM USERS WHERE uname='$uname' and upass='$crypt' and jobtitle='$jbtitle';"; 
$stat=$pdo->query($isql);
$cnt=$stat->fetchColumn();
if($cnt==1) {
	$_SESSION['username']=$uname;
	$_SESSION['job']=$jbtitle;
	if($jbtitle=="techsup"){
header("Location:innerpage2.php");}
else if($jbtitle=="offsup"){
	header("Location:innerpage3.php");
} else{
	header("Location:innerpage.php");
}

}else{
echo "Failed";
}

}else{
	header("Location:errno.php");
}}
}catch(PDOException $e){
echo $e->getMessage();

}


?>
