<?php 
if($_POST){
    $uname1=$_POST['uname1'] ;
    $upass=trim($_POST['upass']) ;
    $encpass=md5($_POST['upass']);
    $status=$_POST['status'];
    try{
        
        include('conn.php'); 
        
     
        
        $stmt = $db -> prepare("INSERT INTO users (UNAME,UPASS,STATUS) VALUES (:UNAME,:UPASS,:STATUS);");
       
        /* bind params */
        $stmt -> bindParam(':UNAME', $uname1, PDO::PARAM_STR);
         $stmt -> bindParam(':UPASS', $encpass, PDO::PARAM_STR);
          $stmt -> bindParam(':STATUS', $status, PDO::PARAM_STR);
        /* execute the query */
        if( $stmt -> execute() ){
           header("Location:index.php");
        }
        
        /* close connection */
        $db = null;
    }
    catch (PDOExecption $e){
        echo $e->getMessage();
    }    
}    
?>
