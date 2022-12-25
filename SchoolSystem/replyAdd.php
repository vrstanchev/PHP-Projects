<?php
require_once('config.php');
session_start();
$repauthor=$_SESSION['username'];
$repto=$_POST['replyto'];
$reply=$_POST['reply'];
$repfoto=$_FILES['repfoto']['name'];
$folder="uploads/";
$path=$folder.$repfoto;
$cticket=$_SESSION['cticket'];
$conn="mysql:host=$host;dbname=$db;charset=UTF8";
try{
$pdo=new PDO($conn,$user,$password);
if($pdo){
move_uploaded_file($_FILES['repfoto']['tmp_name'],$path);	
$isql="INSERT INTO ANSWER(replyto,reply,repfoto,replyauthor,theme) VALUES(:replyto,:reply,:repfoto,:replyauthor,:theme);";
$stat=$pdo->prepare($isql);
$stat->bindParam(':replyto',$repto,PDO::PARAM_STR);
$stat->bindParam(':reply',$reply,PDO::PARAM_STR);
$stat->bindParam(':repfoto',$repfoto,PDO::PARAM_STR);
$stat->bindParam(':replyauthor',$repauthor,PDO::PARAM_STR);
$stat->bindParam(':theme',$cticket,PDO::PARAM_STR);
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

