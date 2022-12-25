<?php 
    try{
        
        include('conn.php');
        
        /* Create a prepared statement */
        $stmt = $db -> prepare("ALTER TABLE GRCHECK ADD COLUMN GRSTUDENT TEXT");

        
        /* execute the query */
         $stmt -> execute() ;
      echo "finish";
        
        /* close connection */
        $db = null;
    }
    catch (PDOExecption $e){
        echo $e->getMessage();
    }    
    
?>