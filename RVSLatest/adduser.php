
<?php 
if($_POST){
  $FNAME=$_POST['FNAME'] ;
    $LNAME=$_POST['LNAME'] ;
    $AREA=$_POST['AREA'] ;
    $SPORT=$_POST['SPORT'] ;
    try{
        
        include('conn.php'); 
        
     
        
        $stmt = $db -> prepare("INSERT INTO users (FNAME,LNAME,AREA,SPORT) VALUES (:FNAME,:LNAME,:AREA,:SPORT);");
       
     
        $stmt -> bindParam(':FNAME', $FNAME, PDO::PARAM_STR);
         $stmt -> bindParam(':LNAME', $LNAME, PDO::PARAM_STR);
          $stmt -> bindParam(':AREA', $AREA, PDO::PARAM_STR);
           $stmt -> bindParam(':SPORT', $SPORT, PDO::PARAM_STR);
       
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
