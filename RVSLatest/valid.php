<?php 
if($_POST){
    session_start();
  $lname=$_POST['LNAME'] ;
  $area=$_POST['AREA'] ;
    try{
        include('conn.php'); 
        
    $isql="SELECT COUNT(*) FROM users WHERE LNAME='$lname' and AREA='$area';"; 
$stat=$db->query($isql);
$cnt=$stat->fetchColumn();
if($cnt==1) {
	echo "Nameren potrebitel";
} 
else{
echo "Otkazvane na dostup!";
}
 $db = null;
 }
    catch (PDOExecption $e){
        echo $e->getMessage();
    }   
   
}
?>

