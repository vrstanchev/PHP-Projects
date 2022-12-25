<?php
require_once('config.php');
session_start();
$author=$_SESSION['username'];
$comm=$_POST['cmnt'];
$foto=$_FILES['foto']['name'];
$folder="uploads/";
$path=$folder.$foto;
$cticket=$_SESSION['cticket'];
$conn="mysql:host=$host;dbname=$db;charset=UTF8";
try{
$pdo=new PDO($conn,$user,$password);
if($pdo){
move_uploaded_file($_FILES['foto']['tmp_name'],$path);
$isql="INSERT INTO COMMENTS(name,cmnt,foto,author) VALUES(:name,:cmnt,:foto,:author);";
$stat=$pdo->prepare($isql);
$stat->bindParam(':name',$cticket,PDO::PARAM_STR);
$stat->bindParam(':cmnt',$comm,PDO::PARAM_STR);
$stat->bindParam(':foto',$foto,PDO::PARAM_STR);
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
session_destroy();

?>

