<h2>Item</h2>
                    <div class="row">
                        <div class="col-12 col-xl-12 mb-4 mb-lg-0">
                            <div class="card">
                                <div class="card-header">Tambah Item</div>
                                <form method="post" action="index.php?page=item">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <label class="form-label">Nama Item</label>
                                                    <input type="text" class="form-control" name="nama" required/>
                                               
                                                    <label class="form-label">UoM</label>
                                                    <input type="text" class="form-control" name="uom" required/>
                                               
                                                    <label class="form-label">Harga Beli</label>
                                                    <input type="number" class="form-control" name="beli" required/>
                                               
                                                    <label class="form-label">Harga Jual</label>
                                                    <input type="number" class="form-control" name="jual" required/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                        <a href="index.php?page=item" class="btn btn-sm btn-warning">Cancel</a>
                                            <button type="submit" name="tambah" class="btn btn-sm btn-primary">Submit</button>
                                        </div>
                                </form>
                            </div>
                        </div>
                    </div>