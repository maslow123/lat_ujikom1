<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $customer = $_POST['customer'];
    $do_number = $_POST['do_number'];
    $item = $_POST['item'];
    $qty = $_POST['qty'];
    $today = date('Y-m-d');
    if(isset($_POST['status'])){
    $status = $_POST['status'];
    }else{
        $status = "On Process";
    }
    

    $cekitem = $conn->query("SELECT * FROM ab_item WHERE id_item='$item'");
    $dcekitem = $cekitem->fetch();
    $price = $dcekitem["harga_jual"];
    $amount = $qty*$price;

    if(isset($_POST['tambah'])){
        $cmd = "INSERT INTO `ab_sales`(`id_sales`, `tgl_sales`, `id_customer`, `do_number`, `status`) VALUES (NULL,'$today','$customer','$do_number','$status')";
        $res = $conn->query($cmd);
        if($res==true){
            $cekdo = $conn->query("SELECT id_sales FROM ab_sales WHERE do_number='$do_number'");
            $dcekdo = $cekdo->fetch();
            $id_sales = $dcekdo["id_sales"];
            $transaksi ="INSERT INTO `ab_transaction`(`id_transaction`, `id_item`, `quantity`, `price`, `amount`) VALUES ('$id_sales','$item','$qty','$price','$amount')";
              $ret = $conn->query($transaksi);
              if($ret==true){
            header("Location: index.php?page=penjualan&added");
            exit;
              }
        }else{
            echo "Error".$conn->$connection->error;
        }
    }
    if(isset($_POST['ubah'])){
        
    $id = $_POST['id'];
        $cmd = "UPDATE `ab_sales` SET `id_customer`='$customer',`do_number`='$do_number',`status`='$status' WHERE id_sales=$id";
        $res = $conn->query($cmd);
        if($res==true){
            $cmc = "UPDATE `ab_transaction` SET `id_item`='$item',`quantity`='$qty', `price`='$price', `amount`='$amount'";
            $red = $conn->query($cmc);
            if($red==true){
                header("Location: index.php?page=penjualan&edited");
            exit;
            }else{
                echo "Error".$conn->$connection->error;
            }
            
        }else{
            echo "Error".$conn->$connection->error;
        }
    }

    $conn->disconnect();

}else{

}

if(isset(($_GET['id']))){
       
    $id = $_GET['id'];
    $cmd = "DELETE from ab_sales WHERE id_sales=$id";
    $res = $conn->query($cmd);
    $cma = "DELETE FROM ab_transaction WHERE id_transaction='$id'";
    if($res==true){
        header("Location: index.php?page=penjualan&deleted");
        exit;
    }else{
        echo "Error".$conn->$connection->error;
    }
    $conn->disconnect();
}

?>