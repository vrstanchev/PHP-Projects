<?php
require_once('config.php');
session_start();
$ticket=$_POST['ticket'];
$content=$_POST['content'];
$tarfile=$_FILES['photo']['name'];
$folder="uploads/";
$path=$folder.$tarfile;
$author=$_SESSION['username'];
$access=$_POST['access'];
$forwho=$_POST['forwho'];
$submit=$_POST['submit'];
$_SESSION['tick']=$ticket;
$conn="mysql:host=$host;dbname=$db;charset=UTF8";
try{
$pdo=new PDO($conn,$user,$password);
 if($pdo){
move_uploaded_file($_FILES['photo']['tmp_name'],$path);
$isql="INSERT INTO TICKETS(ticket,content,photo,access,forwho,author) VALUES(:ticket,:content,:photo,:access,:forwho,:author);";
$stat=$pdo->prepare($isql);
$stat->bindParam(':ticket',$ticket,PDO::PARAM_STR);
$stat->bindParam(':content',$content,PDO::PARAM_STR);
$stat->bindParam(':photo',$tarfile,PDO::PARAM_STR);
$stat->bindParam(':access',$access,PDO::PARAM_STR);
$stat->bindParam(':forwho',$forwho,PDO::PARAM_STR);
$stat->bindParam(':author',$author,PDO::PARAM_STR);
if($stat->execute()){
echo "Success";
}else{
echo "Failed";
}

}
}catch(PDOException $e){
echo $e->getMessage();

}


?>
