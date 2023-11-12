<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $nama = $_POST['nama'];
    $uom = $_POST['uom'];
    $beli = $_POST['beli'];
    $jual = $_POST['jual'];

    if(isset($_POST['tambah'])){
        $cmd = "INSERT INTO `ab_item`(`id_item`, `nama_item`, `uom`, `harga_jual`, `harga_beli`) VALUES (NULL,'$nama','$uom','$jual','$beli')";
        $res = $conn->query($cmd);
        if($res==true){
            header("Location: index.php?page=item&added");
            exit;
        }else{
            echo "Error".$conn->$connection->error;
        }
    }
    if(isset($_POST['ubah'])){
        
    $id = $_POST['id'];
        $cmd = "UPDATE `ab_item` SET `nama_item`='$nama',`uom`='$uom',`harga_jual`='$jual',`harga_beli`='$beli' WHERE id_item=$id";
        $res = $conn->query($cmd);
        if($res==true){
            header("Location: index.php?page=item&edited");
            exit;
        }else{
            echo "Error".$conn->$connection->error;
        }
    }

    $conn->disconnect();

}else{

}

if(isset($_GET['id'])){
       
    $id = $_GET['id'];
        $cmd = "DELETE from ab_item WHERE id_item=$id";
    
    $res = $conn->query($cmd);
    if($res==true){
        header("Location: index.php?page=item&deleted");
        exit;
    }else{
        echo "Error".$conn->$connection->error;
    }
    $conn->disconnect();
}

?>