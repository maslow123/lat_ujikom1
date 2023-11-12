<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $kd_matpel = $_POST['kd_matpel'];
    $nm_matpel = $_POST['nm_matpel'];

    if (isset($_POST['tambah'])) {
        $cmd = "INSERT INTO matpel (kd_matpel, nm_matpel) VALUES ('$kd_matpel', '$nm_matpel')";
        $res = $conn->query($cmd);
        if ($res == true) {
            header("Location: index.php?page=matpel&added");
            exit;
        } else {
            echo "Error" . $conn->$connection->error;
        }
    }
    if (isset($_POST['ubah'])) {

        $id = $_GET['ubah'];
        $cmd = "UPDATE matpel SET kd_matpel = '$kd_matpel', nm_matpel = '$nm_matpel' WHERE kd_matpel = '$id'";
        $res = $conn->query($cmd);
        if ($res == true) {
            header("Location: index.php?page=matpel&edited");
            exit;
        } else {
            echo "Error" . $conn->$connection->error;
        }
    }

    $conn->disconnect();

} else {

}

if (isset($_GET['id'])) {

    $id = $_GET['id'];
    $cmd = "DELETE FROM matpel WHERE kd_matpel = '$id'";

    $res = $conn->query($cmd);
    if ($res == true) {
        header("Location: index.php?page=matpel&deleted");
        exit;
    } else {
        echo "Error" . $conn->$connection->error;
    }
    $conn->disconnect();
}

?>