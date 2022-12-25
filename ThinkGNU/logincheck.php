<?php 
if($_POST){
    session_start();
  $uname1=$_POST['uname1'] ;
    $upass  = trim($_POST['upass']);
 $encpass=md5($_POST['upass']);
    $status=trim($_POST['status']);
    try{
        include('conn.php'); 
        
    $isql="SELECT COUNT(*) FROM USERS WHERE UNAME='$uname1' and UPASS='$encpass' and STATUS='$status';"; 
$stat=$db->query($isql);
$cnt=$stat->fetchColumn();
if($cnt==1) {
	$_SESSION['username']=$uname1;
	$_SESSION['job']=$status;
	if($status=="Teacher"){
header("Location:inner.php");}
else if($status=="Student"){
	header("Location:inner2.php");
} 
}else{
echo "Failed";
}


        /* close connection */
        $db = null;
    }
    catch (PDOExecption $e){
        echo $e->getMessage();
    }    
}
?>