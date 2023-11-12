<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    if(isset($_POST['tambah'])){
        $cmd = "INSERT INTO `ab_petugas`(`id_user`, `nama_user`, `username`, `password`, `level`) VALUES (NULL,'$nama','$username','$password','2')";
        $res = $conn->query($cmd);
        if($res==true){
            header("Location: index.php?page=user&added");
            exit;
        }else{
            echo "Error".$conn->$connection->error;
        }
    }
    if(isset($_POST['ubah'])){
        
    $id = $_POST['id'];
        $cmd = "UPDATE `ab_petugas` SET `nama_user`='$nama',`username`='$username',`password`='$password' WHERE id_user=$id";
        $res = $conn->query($cmd);
        if($res==true){
            header("Location: index.php?page=user&edited");
            exit;
        }else{
            echo "Error".$conn->$connection->error;
        }
    }

    $conn->disconnect();

}else{

}

if(isset(($_GET['id']))){
       
    $id = $_GET['id'];
        $cmd = "DELETE from ab_petugas WHERE id_user=$id";
    
    $res = $conn->query($cmd);
    if($res==true){
        header("Location: index.php?page=user&deleted");
        exit;
    }else{
        echo "Error".$conn->$connection->error;
    }
    $conn->disconnect();
}

?>