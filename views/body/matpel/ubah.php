<div class="row">
    <div class="col-12 col-xl-12 mb-4 mb-lg-0">
        <div class="card">
            <div class="card-header">Edit Data Mata Pelajaran</div>
            <?php
            if (isset($_GET['id'])) {
                $id = addslashes($_GET['id']);
            } else {
                header("Location: index.php");
                exit;
            }
            $cmd = "SELECT * FROM matpel WHERE kd_matpel='$id'";
            $res = $conn->query($cmd);
            if ($res->rowCount() > 0) {
                $row = $res->fetch();
            }

            //var_dump($res);
            $conn->disconnect();
            //
            
            ?>
            <form method="post" action="index.php?page=matpel">
                <div class="card-body">
                    <div class="form-group row ">
                        <label class="form-label col-sm-2">KODE MATA PELAJARAN</label>
                        <div class="form-label col-sm-4">
                            <input type="text" class="form-control" name="kd_matpel" value="<?= $row['kd_matpel']; ?>"
                                required />
                        </div>
                    </div>
                    <div class="form-group row ">
                        <label class="form-label col-sm-2">NAMA MATA PELAJARAN</label>
                        <div class="form-label col-sm-4">
                            <input type="text" class="form-control" name="nm_matpel" value="<?= $row['nm_matpel']; ?>"
                                required />
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <a href="index.php?page=matpel" class="btn btn-sm btn-warning">Cancel</a>
                    <button type="submit" name="ubah" value="<?= $id; ?>"
                        class="btn btn-sm btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>