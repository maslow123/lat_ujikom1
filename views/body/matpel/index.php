<?php
require('controller/matpel.php');
?>
<h2 class="text-center">Mata Pelajaran</h2>
<div class="row">
    <div class="col-12 col-xl-12 mb-4 mb-lg-0">
        <div class="card">
            <div class="card-header">Data Mata Pelajaran</div>
            <div class="card-body">
                <div class="table-responsive">
                    <div class="border-bottom pb-3">
                        <a href="index.php?page=tambah-matpel" class="btn btn-sm btn-primary">Tambah Data</a>
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
                                <th>Kode</th>
                                <th>Nama</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $cmd = "SELECT * FROM matpel";
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
                                            <?php echo $row['kd_matpel']; ?>
                                        </td>
                                        <td>
                                            <?php echo $row['nm_matpel']; ?>
                                        </td>
                                        <td>
                                            <a href="index.php?page=edit-matpel&id=<?php echo $row['kd_matpel']; ?>"
                                                class="btn btn-sm btn-primary">Edit</a>
                                            <a href="index.php?page=matpel&id=<?php echo $row['kd_matpel']; ?>"
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