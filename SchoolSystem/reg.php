<?php
require_once('config.php');
$uname=$_POST['uname'];
$upass=$_POST['upass'];
$rpass=$_POST['rpass'];
$crypt=md5($upass);
$icrypt=md5($rpass);
$pname=$_POST['pname'];
$psurname=$_POST['psurname'];
$select=$_POST['sel'];
$submit=$_POST['submit'];
$conn="mysql:host=$host;dbname=$db;charset=UTF8";
try{
$pdo=new PDO($conn,$user,$password);
if($pdo){
$isql="INSERT INTO USERS(uname,upass,rpass,pname,psurname,jobtitle) VALUES(:uname,:upass,:rpass,:pname,:psurname,:jobtitle);";
$stat=$pdo->prepare($isql);
$stat->bindParam(':uname',$uname,PDO::PARAM_STR);
$stat->bindParam(':upass',$crypt,PDO::PARAM_STR);
$stat->bindParam(':rpass',$icrypt,PDO::PARAM_STR);
$stat->bindParam(':pname',$pname,PDO::PARAM_STR);
$stat->bindParam(':psurname',$psurname,PDO::PARAM_STR);
$stat->bindParam(':jobtitle',$select,PDO::PARAM_STR);

	 if($upass!=$rpass){
		 die("Passwords not match");
	 
 }
else if($stat->execute()){
echo "Success";
header("Location:login.php");
}else{
echo "Failed";
}

}
}catch(PDOException $e){
echo $e->getMessage();

}


?>
