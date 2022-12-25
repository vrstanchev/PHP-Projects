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
     $_SESSION['hwtitle']=$_POST['title'];
     $hwstatus;
     
     if((!empty($title)&&!empty($content))){
         $hwstatus="yes";
          $_SESSION['hwstat']=$hwstatus;
     }else { $hwstatus="none";
         $_SESSION['hwstat']=$hwstatus;
     }
    
    try{
        $upld= move_uploaded_file($file_tmp,"resources/".$file_name);
        include('conn.php'); 
        
        
        $stmt = $db -> prepare("INSERT INTO homeworks (TITLE,CONTENT,RESOURCES,AUTHOR,HWST) VALUES (:TITLE, :CONTENT,:RESOURCES,:AUTHOR,:HWST);");
       
      
        $stmt -> bindParam(':TITLE', $title, PDO::PARAM_STR);
        $stmt -> bindParam(':CONTENT', $content, PDO::PARAM_STR);
         $stmt -> bindParam(':RESOURCES', $upld);
          $stmt -> bindParam(':AUTHOR', $author);
         $stmt -> bindParam(':HWST', $hwstatus);
        
        if( $stmt -> execute() ){
             header("Location:inner2.php");
        }
        
        /* close connection */
        $db = null;
    }
    catch (PDOExecption $e){
        echo $e->getMessage();
    }    
}    
?>
