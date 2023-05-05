
<?php 
if($_POST){
  $FNAME=$_POST['uname2'] ;
    $LNAME=$_POST['upass1'] ;
     $encpass=md5($_POST['upass1']);
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
