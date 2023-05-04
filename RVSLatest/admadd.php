<<<<<<< HEAD
<?php 
if($_POST){
  $FNAME=$_POST['uname1'] ;
    $LNAME=$_POST['upass'] ;
     $encpass=md5($_POST['upass']);
    try{
        
        include('conn.php'); 
        
     
        
        $stmt = $db -> prepare("INSERT INTO internal (UNAME,UPASS) VALUES (:UNAME,:UPASS);");
       
     
        $stmt -> bindParam(':UNAME', $FNAME, PDO::PARAM_STR);
         $stmt -> bindParam(':UPASS', $encpass, PDO::PARAM_STR);
        
       
        if( $stmt -> execute() ){
           header("Location:index.php");
        }
        
        
        $db = null;
    }
    catch (PDOExecption $e){
        echo $e->getMessage();
    }    
}    
?>
=======
<?php 
if($_POST){
  $FNAME=$_POST['uname1'] ;
    $LNAME=$_POST['upass'] ;
     $encpass=md5($_POST['upass']);
    try{
        
        include('conn.php'); 
        
     
        
        $stmt = $db -> prepare("INSERT INTO internal (UNAME,UPASS) VALUES (:UNAME,:UPASS);");
       
     
        $stmt -> bindParam(':UNAME', $FNAME, PDO::PARAM_STR);
         $stmt -> bindParam(':UPASS', $encpass, PDO::PARAM_STR);
        
       
        if( $stmt -> execute() ){
           header("Location:index.php");
        }
        
        
        $db = null;
    }
    catch (PDOExecption $e){
        echo $e->getMessage();
    }    
}    
?>
>>>>>>> 35f2e9982123e32909c60864cbc51a18ca52f7f6
