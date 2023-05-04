<?php 
if($_POST){
    session_start();
  $uname1=$_POST['uname1'] ;
    $upass  = trim($_POST['upass']);
 $encpass=md5($_POST['upass']);
    try{
        include('conn.php'); 
        
    $isql="SELECT COUNT(*) FROM internal WHERE UNAME='$uname1' and UPASS='$encpass';"; 
$stat=$db->query($isql);
$cnt=$stat->fetchColumn();
if($cnt==1) {
	$_SESSION['username']=$uname1;
header("Location:inner.php");
} 
else{
echo "Failed";
}
 $db = null;
 }
    catch (PDOExecption $e){
        echo $e->getMessage();
    }   
   
}
?>
