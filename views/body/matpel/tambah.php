<div class="row">
    <div class="col-12 col-xl-12 mb-4 mb-lg-0">
        <div class="card">
            <div class="card-header text-center">Input Data Mata Pelajaran</div>
            <form method="post" action="index.php?page=matpel">
                <div class="card-body">
                    <div class="form-group row ">
                        <label class="form-label col-sm-2">KODE MATA PELAJARAN</label>
                        <div class="form-label col-sm-4">
                            <input type="text" class="form-control" name="kd_matpel"
                                required />
                        </div>
                    </div>
                    <div class="form-group row ">
                        <label class="form-label col-sm-2">NAMA MATA PELAJARAN</label>
                        <div class="form-label col-sm-4">
                            <input type="text" class="form-control" name="nm_matpel"
                                required />
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <a href="index.php?page=matpel" class="btn btn-sm btn-warning">Cancel</a>
                    <button type="submit" name="tambah" class="btn btn-sm btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>