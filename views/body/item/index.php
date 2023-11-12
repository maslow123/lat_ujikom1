<?php
require('controller/item.php');
?>
<h2>Item</h2>
<div class="row">
    <div class="col-12 col-xl-12 mb-4 mb-lg-0">
        <div class="card">
            <div class="card-header">Data Item</div>
            <div class="card-body">
                <div class="table-responsive">
                    <div class="border-bottom pb-3">
                        <a href="index.php?page=tambah-item" class="btn btn-sm btn-primary">Tambah Data</a>
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
                                <th>No.</th>
                                <th>Nama</th>
                                <th>UoM</th>
                                <th>Harga Beli</th>
                                <th>Harga Jual</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $cmd = "SELECT * FROM ab_item";
                            $res = $conn->query($cmd);
                            $conn->disconnect();
                            if($res->rowCount() > 0){
                                $no = 1;
                                while($row = $res->fetch()){
                            ?>
                            <tr>
                                <th><?php echo $no; ?>.</th>
                                <td><?php echo $row['nama_item']; ?></td>
                                <td><?php echo $row['uom']; ?></td>
                                <td><?php echo $row['harga_beli']; ?></td>
                                <td><?php echo $row['harga_jual']; ?></td>
                                <td>
                                    <a href="index.php?page=edit-item&id=<?php echo $row['id_item']; ?>" class="btn btn-sm btn-primary">Edit</a>
                                    <a href="index.php?page=item&id=<?php echo $row['id_item']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</a>
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
