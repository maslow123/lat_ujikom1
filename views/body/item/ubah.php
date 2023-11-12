<h2>Item</h2>
                <div class="row">
                    <div class="col-12 col-xl-12 mb-4 mb-lg-0">
                        <div class="card">
                            <div class="card-header">Edit Item</div>
                            <?php
                            if (isset($_GET['id'])) {
                                $id = addslashes($_GET['id']);
                            }else{
                                header("Location: index.php");
                                exit;
                            }
                            $cmd = "SELECT * FROM ab_item WHERE id_item='$id'";
                            $res = $conn->query($cmd);
                            if($res->rowCount()>0){
                                $row = $res->fetch();
                            }
                            
                            //var_dump($res);
                            $conn->disconnect();
                            //
                            
                            ?>
                            <form method="post" action="index.php?page=item">
                                <div class="card-body">
                                    <div class="row">
                                    <div class="col-sm-6">
                                                    <label class="form-label">Nama Item</label>
                                                    <input type="text" class="form-control" name="nama" value="<?php echo $row['nama_item']; ?>" required/>
                                                    
                                            <input type="hidden" name="id" value="<?php echo $row['id_item']; ?>"  />
                                               
                                                    <label class="form-label">UoM</label>
                                                    <input type="text" class="form-control" name="uom" value="<?php echo $row['uom']; ?>" required/>
                                               
                                                    <label class="form-label">Harga Beli</label>
                                                    <input type="number" class="form-control" name="beli" value="<?php echo $row['harga_beli']; ?>" required/>
                                               
                                                    <label class="form-label">Harga Jual</label>
                                                    <input type="number" class="form-control" name="jual" value="<?php echo $row['harga_jual']; ?>" required/>
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