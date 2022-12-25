<?php 
if($_POST){
    session_start();
    $title = $_POST['title'];
    $content  = $_POST['content'];
    $resource=$_FILES['resources'];
     $file_name = $_FILES['resources']['name'];
      $file_size =$_FILES['resources']['size'];
     $file_tmp =$_FILES['resources']['tmp_name'];
     $author=$_SESSION['username'];
     
    
    try{
        $upld= move_uploaded_file($file_tmp,"resources/".$file_name);
        include('conn.php'); 
        
        /* Create a prepared statement */
        $stmt = $db -> prepare("INSERT INTO lesson (TITLE,CONTENT,RESOURCES,author) VALUES (:TITLE, :CONTENT,:RESOURCES,:author);");
       
        /* bind params */
        $stmt -> bindParam(':TITLE', $title, PDO::PARAM_STR);
        $stmt -> bindParam(':CONTENT', $content, PDO::PARAM_STR);
         $stmt -> bindParam(':RESOURCES', $upld);
          $stmt -> bindParam(':author', $author);
        /* execute the query */
        if( $stmt -> execute() ){
           header("Location:inner.php");
        }
        
        /* close connection */
        $db = null;
    }
    catch (PDOExecption $e){
        echo $e->getMessage();
    }    
}    
?>
