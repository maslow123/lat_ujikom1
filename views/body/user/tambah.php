<h2>User</h2>
                    <div class="row">
                        <div class="col-12 col-xl-12 mb-4 mb-lg-0">
                            <div class="card">
                                <div class="card-header">Tambah Petugas</div>
                                <form method="post" action="index.php?page=user">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <label class="form-label">Nama</label>
                                                    <input type="text" class="form-control" name="nama" required/>
                                               
                                                    <label class="form-label">Username</label>
                                                    <input type="text" class="form-control" name="username" required/>
                                               
                                                    <label class="form-label">Password</label>
                                                    <input type="password" class="form-control" name="password" required/>
                                               
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                        <a href="index.php?page=user" class="btn btn-sm btn-warning">Cancel</a>
                                            <button type="submit" name="tambah" class="btn btn-sm btn-primary">Submit</button>
                                        </div>
                                </form>
                            </div>
                        </div>
                    </div>