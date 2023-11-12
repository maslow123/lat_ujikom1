<?php
require('controller/penjualan.php');
?>
<h2>Penjualan</h2>
<div class="row">
    <div class="col-12 col-xl-12 mb-4 mb-lg-0">
        <div class="card">
            <div class="card-header">Data Penjualan</div>
            <div class="card-body">
                <div class="table-responsive">
                    <div class="border-bottom pb-3">
                        <a href="index.php?page=tambah-penjualan" class="btn btn-sm btn-primary">Tambah Data</a>
                        <?php 
                        if(isset($_GET['added'])){
                            $msg =  "Data berhasil ditambahkan";
                        }
                        if(isset($_GET['edited'])){
                            $msg =  "Data berhasil di edit";
                        }
                        ?>
                    </div>
                    
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID Transaksi</th>
                                <th>Tgl</th>
                                <th>Customer</th>
                                <th>DO Number</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $cmd = "SELECT a.*,b.nama_customer FROM ab_sales as a, ab_customer as b WHERE a.id_customer=b.id_customer";
                            $res = $conn->query($cmd);
                            $conn->disconnect();
                            if($res->rowCount() > 0){
                                $no = 1;
                                while($row = $res->fetch()){
                            ?>
                            <tr>
                                <td><?php echo $row['id_sales']; ?></td>
                                <td><?php echo $row['tgl_sales']; ?></td>
                                <td><?php echo $row['nama_customer']; ?></td>
                                <td><?php echo $row['do_number']; ?></td>
                                <td><?php echo $row['status']; ?></td>
                                <td>
                                    <a href="index.php?page=lihat-penjualan&id=<?php echo $row['id_sales']; ?>" class="btn btn-sm btn-success">Lihat</a>
                                    <a href="index.php?page=edit-penjualan&id=<?php echo $row['id_sales']; ?>" class="btn btn-sm btn-primary">Edit</a>
                                    <a href="index.php?page=penjualan&id=<?php echo $row['id_sales']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</a>
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
