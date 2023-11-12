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
                            $cmd = "SELECT a.*,b.* FROM ab_sales as a, ab_transaction as b WHERE a.id_sales=b.id_transaction AND a.id_sales='$id'";
                            $res = $conn->query($cmd);
                            if($res->rowCount()>0){
                                $row = $res->fetch();
                            }
                            

                            //var_dump($res);
                           
                            //
                            
                            ?>
                            <form method="post" action="index.php?page=penjualan">
                                <div class="card-body">
                                    <div class="row">
                                    <div class="col-sm-6">
                                    <label class="form-label">Customer</label>
                                                    <select name="customer" class="form-control" required>
                                                        <option value="">-</option>
                                                        <?php 
                                                        $cs = $conn->query("SELECT * FROM `ab_customer` ORDER by nama_customer");
                                                        while($dcs=$cs->fetch()){
                                                            echo "<option value='".$dcs["id_customer"]."'";
                                                            if($row['id_customer']==$dcs['id_customer']){
                                                                echo "selected";
                                                            }
                                                            echo ">".$dcs["nama_customer"]."</option>";
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                                <div class="col-sm-6">
                                                    <label class="form-label">DO Number</label>
                                                    <input type="text" class="form-control" value="<?php echo $row['do_number']; ?>" name="do_number" required/>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <label class="form-label">Item</label>
                                                    
                                            <input type="hidden" name="id" value="<?php echo $id; ?>"  />
                                                    <select name="item" class="form-control" required>
                                                        <option value="">-</option>
                                                        <?php 
                                                        $it = $conn->query("SELECT * FROM `ab_item` ORDER by nama_item");
                                                        while($dit=$it->fetch()){
                                                            echo "<option value='".$dit["id_item"]."'";
                                                            if($row['id_item']==$dit['id_item']){
                                                                echo "selected";
                                                            }
                                                            echo ">".$dit["nama_item"]." (Rp".$dit['harga_jual']."/ ".$dit['uom'].")</option>";
                                                        }
                                                        ?>
                                                    </select>
                                                    </div>
                                                <div class="col-sm-6">
                                                    <label class="form-label">Quantity</label>
                                                    <input type="number" class="form-control" name="qty" value="<?php echo $row['quantity']; ?>" required/>
                                                </div>
                                                <div class="col-sm-6">
                                                    <label class="form-label">Status</label>
                                                    <select name="status" class="form-control" required>
                                                        <option value="On Process" <?php 
                                                        if($row['status']=="On Process"){
                                                            echo "selected";
                                                        }
                                                        ?>>On Process</option>
                                                        <option value="Completed" <?php 
                                                        if($row['status']=="Completed"){
                                                            echo "selected";
                                                        }
                                                        ?>>Completed</option>
                                                    </select>
                                                    </div>
                                            </div>
                                        </div>
                                <div class="card-footer">
                                    <a href="index.php?page=penjualan" class="btn btn-sm btn-warning">Cancel</a>
                                    <button type="submit" name="ubah" class="btn btn-sm btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <?php 
                 $conn->disconnect();
                ?>