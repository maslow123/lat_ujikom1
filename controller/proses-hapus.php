<?php
if(isset(($_GET['id']))){
       
    $id = $_GET['id'];
        $cmd = "DELETE from user WHERE id=$id";
    
    $res = $conn->query($cmd);
    if($res==true){
        header("Location: index.php?page=dashboard&deleted");
        exit;
    }else{
        echo "Error".$conn->$connection->error;
    }
    $conn->disconnect();
}
?>