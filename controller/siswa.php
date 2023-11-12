<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nis = $_POST['nis'];
    $nama_siswa = $_POST['nama_siswa'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $alamat = $_POST['alamat'];
    $telepon = $_POST['telepon'];
    $nama_wali = $_POST['nama_wali'];
    $kode_kelas = $_POST['kode_kelas'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (isset($_POST['tambah'])) {
        $cmd = "INSERT INTO `siswa`(`nis`, `nm_siswa`, `tmp_lahir`, `tgl_lahir`, `jkel`, `alamat`, `telp`, `nm_wali`, `kd_kelas`, `username`, `password`) 
                VALUES ('$nis','$nama_siswa','$tempat_lahir','$tanggal_lahir','$jenis_kelamin','$alamat', '$telepon', '$nama_wali', '$kode_kelas', '$username', '$password')";
        $res = $conn->query($cmd);
        if ($res == true) {
            header("Location: index.php?page=siswa&added");
            exit;
        } else {
            echo "Error" . $conn->$connection->error;
        }
    }
    if (isset($_POST['ubah'])) {

        $id = $_POST['id'];
        $cmd = "UPDATE `ab_customer` SET `nama_customer`='$nama',`alamat`='$alamat',`email`='$email',`telp`='$telp' ,`fax`='$fax' WHERE id_customer=$id";
        $res = $conn->query($cmd);
        if ($res == true) {
            header("Location: index.php?page=customer&edited");
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
    $cmd = "DELETE from ab_customer WHERE id_customer=$id";

    $res = $conn->query($cmd);
    if ($res == true) {
        header("Location: index.php?page=customer&deleted");
        exit;
    } else {
        echo "Error" . $conn->$connection->error;
    }
    $conn->disconnect();
}

?>