<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $username = $_POST['username'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $alamat = $_POST['alamat'];

    if(isset($_POST['tambah'])){
        $cmd = "INSERT INTO `user`(`id`, `username`, `nama`, `alamat`, `email`, `password`) VALUES (NULL,'$username','$nama','$alamat','$email','$password')";
        $res = $conn->query($cmd);
        if($res==true){
            header("Location: index.php?page=dashboard&added");
            exit;
        }else{
            echo "Error".$koneksi->$connection->error;
        }
    }
    if(isset($_POST['ubah'])){
        
    $id = $_POST['id'];
        $cmd = "UPDATE `user` SET `username`='$username',`nama`='$nama',`alamat`='$alamat',`email`='$email',`password`='$password' WHERE id=$id";
        $res = $conn->query($cmd);
        if($res==true){
            header("Location: index.php?page=dashboard&edited");
            exit;
        }else{
            echo "Error".$koneksi->$connection->error;
        }
    }

    $conn->disconnect();

}else{

}

?>