<?php
require('controller/siswa.php');
?>
<h2 class="text-center">Siswa</h2>
<div class="row">
    <div class="col-12 col-xl-12 mb-4 mb-lg-0">
        <div class="card">
            <div class="card-header">Data Siswa</div>
            <div class="card-body">
                <div class="table-responsive">
                    <div class="border-bottom pb-3">
                        <a href="index.php?page=tambah-siswa" class="btn btn-sm btn-primary">Tambah Data</a>
                        <?php
                        if (isset($_GET['added'])) {
                            $msg = "Data berhasil ditambahkan";
                        }
                        if (isset($_GET['edited'])) {
                            $msg = "Data berhasil di edit";
                        }
                        ?>
                    </div>

                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>NIS</th>
                                <th>Nama</th>
                                <th>Tempat Lahir</th>
                                <th>Jenis Kelamin</th>
                                <th>Alamat</th>
                                <th>Telepon</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $cmd = "SELECT * FROM siswa";
                            $res = $conn->query($cmd);
                            $conn->disconnect();
                            if ($res->rowCount() > 0) {
                                $no = 1;
                                while ($row = $res->fetch()) {
                                    ?>
                                    <tr>
                                        <th>
                                            <?php echo $no; ?>.
                                        </th>
                                        <td>
                                            <?php echo $row['nis']; ?>
                                        </td>
                                        <td>
                                            <?php echo $row['nm_siswa']; ?>
                                        </td>
                                        <td>
                                            <?php echo $row['tmp_lahir']; ?>
                                        </td>
                                        <td>
                                            <?php echo $row['jkel']; ?>
                                        </td>
                                        <td>
                                            <?php echo $row['alamat']; ?>
                                        </td>
                                        <td>
                                            <?php echo $row['telp']; ?>
                                        </td>
                                        <td>
                                            <a href="index.php?page=edit-siswa&id=<?php echo $row['nis']; ?>"
                                                class="btn btn-sm btn-primary">Edit</a>
                                            <a href="index.php?page=siswa&id=<?php echo $row['nis']; ?>"
                                                class="btn btn-sm btn-danger"
                                                onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</a>
                                        </td>
                                    </tr>
                                    <?php
                                    $no++;
                                }
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>