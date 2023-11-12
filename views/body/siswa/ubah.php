<div class="row">
    <div class="col-12 col-xl-12 mb-4 mb-lg-0">
        <div class="card">
            <div class="card-header">Edit Data Siswa</div>
            <?php
            if (isset($_GET['id'])) {
                $id = addslashes($_GET['id']);
            } else {
                header("Location: index.php");
                exit;
            }
            $cmd = "SELECT * FROM siswa WHERE nis='$id'";
            $res = $conn->query($cmd);
            if ($res->rowCount() > 0) {
                $row = $res->fetch();
            }

            //var_dump($res);
            $conn->disconnect();
            //
            
            ?>
            <form method="post" action="index.php?page=siswa">
                <div class="card-body">
                    <div class="form-group row">
                        <label class="form-label col-sm-2">NIS</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="nis" value="<?= $row['nis']; ?>" required />
                        </div>
                    </div>
                    <div class="form-group row ">
                        <label class="form-label col-sm-2">NAMA SISWA</label>
                        <div class="form-label col-sm-4">
                            <input type="text" class="form-control" name="nama_siswa" value="<?= $row['nm_siswa']; ?>"
                                required />
                        </div>
                    </div>

                    <div class="form-group row ">
                        <label class="form-label col-sm-2">TEMPAT LAHIR</label>
                        <div class="form-label col-sm-4">
                            <input type="text" class="form-control" name="tempat_lahir"
                                value="<?= $row['tmp_lahir']; ?>" required />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="form-label col-sm-2">TANGGAL LAHIR</label>
                        <div class="form-label col-sm-4">
                            <input type="date" class="form-control" name="tanggal_lahir"
                                value="<?= $row['tgl_lahir']; ?>" required />
                        </div>
                    </div>
                    <div class="form-group row py-3">
                        <label class="form-label col-sm-2">JENIS KELAMIN</label>
                        <div class="form-label col-sm-4">
                            <select name="jenis_kelamin" value="<?= $row['jkel']; ?>" class="form-control">
                                <option value="L">Laki-laki</option>
                                <option value="P">Perempuan</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="form-label col-sm-2">ALAMAT</label>
                        <div class="form-label col-sm-4">
                            <textarea class="form-control" name="alamat" value="<?= $row['alamat']; ?>"
                                id=""><?= $row['alamat']; ?></textarea>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="form-label col-sm-2">TELEPON</label>
                        <div class="form-label col-sm-4">
                            <input type="text" class="form-control" name="telepon" value="<?= $row['telp']; ?>"
                                id=""></input>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="form-label col-sm-2">NAMA WALI</label>
                        <div class="form-label col-sm-4">
                            <input type="text" class="form-control" name="nama_wali" value="<?= $row['nm_wali']; ?>"
                                id=""></input>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="form-label col-sm-2">KODE KELAS</label>
                        <div class="form-label col-sm-4">
                            <select name="kode_kelas" id="" class="form-control">
                                <?php
                                $cmd = "SELECT * FROM kelas";
                                $res = $conn->query($cmd);
                                $conn->disconnect();
                                if ($res->rowCount() > 0) {
                                    $no = 1;
                                    while ($row = $res->fetch()) {
                                        ?>
                                        <option value="<?php echo $row['kd_kelas']; ?>">
                                            <?php echo $row['kd_kelas']; ?>
                                        </option>
                                        <?php
                                    }
                                }
                                ?>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="form-label col-sm-2">USERNAME</label>
                        <div class="form-label col-sm-4">
                            <input type="text" class="form-control" name="username" value="<?= $row['username']; ?>"
                                required />
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="form-label col-sm-2">PASSWORD</label>
                        <div class="form-label col-sm-4">
                            <input type="text" class="form-control" name="password" value="<?= $row['password']; ?>"
                                required />

                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <a href="index.php?page=customer" class="btn btn-sm btn-warning">Cancel</a>
                    <button type="submit" name="tambah" value="<?= $row['nis']; ?>"
                        class="btn btn-sm btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>