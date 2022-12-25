<?php 
    try{
        include('conn.php'); 
        
        /* Create a prepared statement */
        $stmt = $db -> prepare("SELECT * from lesson");
        
        /* execute the query */
        $stmt -> execute();        
        
        /* fetch all results */
        $res = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
        foreach($res as $row){
echo '<article>'.'<br>';
echo'<p>'. $row['author'] . '</p>';
      echo'<h1>'. $row['TITLE'] . '</h1>';
      echo  '<p>'.$row['CONTENT'] .'</p>';
      echo $row['RESOURCES'] . '<br>';
        echo '</article>';
}
        
                
        /* close connection */
        $db = null;
    }
    catch (PDOExecption $e){
        echo $e->getMessage();
    }    
    
?>