<div class="row">
    <div class="col-12 col-xl-12 mb-4 mb-lg-0">
        <div class="card">
            <div class="card-header text-center">Input Data Siswa</div>
            <form method="post" action="index.php?page=siswa">
                <div class="card-body">
                    <div class="form-group row">
                        <label class="form-label col-sm-2">NIS</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="nis" required />
                        </div>
                    </div>
                    <div class="form-group row ">
                        <label class="form-label col-sm-2">NAMA SISWA</label>
                        <div class="form-label col-sm-4">
                            <input type="text" class="form-control" name="nama_siswa" required />
                        </div>
                    </div>

                    <div class="form-group row ">
                        <label class="form-label col-sm-2">TEMPAT LAHIR</label>
                        <div class="form-label col-sm-4">
                            <input type="text" class="form-control" name="tempat_lahir" required />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="form-label col-sm-2">TANGGAL LAHIR</label>
                        <div class="form-label col-sm-4">
                            <input type="date" class="form-control" name="tanggal_lahir" required />
                        </div>
                    </div>
                    <div class="form-group row py-3">
                        <label class="form-label col-sm-2">JENIS KELAMIN</label>
                        <div class="form-label col-sm-4">
                            <select name="jenis_kelamin" class="form-control">
                                <option value="L">Laki-laki</option>
                                <option value="P">Perempuan</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="form-label col-sm-2">ALAMAT</label>
                        <div class="form-label col-sm-4">
                            <textarea class="form-control" name="alamat" id=""></textarea>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="form-label col-sm-2">TELEPON</label>
                        <div class="form-label col-sm-4">
                            <input type="text" class="form-control" name="telepon" id=""></input>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="form-label col-sm-2">NAMA WALI</label>
                        <div class="form-label col-sm-4">
                            <input type="text" class="form-control" name="nama_wali" id=""></input>
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
                            <input type="text" class="form-control" name="username" required />
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="form-label col-sm-2">PASSWORD</label>
                        <div class="form-label col-sm-4">
                            <input type="text" class="form-control" name="password" required />

                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <a href="index.php?page=customer" class="btn btn-sm btn-warning">Cancel</a>
                    <button type="submit" name="tambah" class="btn btn-sm btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>