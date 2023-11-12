<h2>User</h2>
                <div class="row">
                    <div class="col-12 col-xl-12 mb-4 mb-lg-0">
                        <div class="card">
                            <div class="card-header">Edit User</div>
                            <?php
                            if (isset($_GET['id'])) {
                                $id = addslashes($_GET['id']);
                            }else{
                                header("Location: index.php");
                                exit;
                            }
                            $cmd = "SELECT * FROM ab_petugas WHERE id_user='$id'";
                            $res = $conn->query($cmd);
                            if($res->rowCount()>0){
                                $row = $res->fetch();
                            }
                            
                            //var_dump($res);
                            $conn->disconnect();
                            //
                            
                            ?>
                            <form method="post" action="index.php?page=user">
                                <div class="card-body">
                                    <div class="row">
                                    <div class="col-sm-6">
                                                    <label class="form-label">Nama</label>
                                                    <input type="text" class="form-control" name="nama" value="<?php echo $row['nama_user']; ?>" required/>
                                                    
                                            <input type="hidden" name="id" value="<?php echo $row['id_user']; ?>"  />
                                               
                                                    <label class="form-label">Username</label>
                                                    <input type="text" class="form-control" name="username" value="<?php echo $row['username']; ?>" required/>
                                               
                                                    <label class="form-label">Password</label>
                                                    <input type="password" class="form-control" name="password" value="<?php echo $row['password']; ?>" required/>
                                               
                                                </div>
                                            </div>
                                        </div>
                                <div class="card-footer">
                                    <a href="index.php?page=user" class="btn btn-sm btn-warning">Cancel</a>
                                    <button type="submit" name="ubah" class="btn btn-sm btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>