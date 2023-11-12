<h2>Penjualan</h2>
                    <div class="row">
                        <div class="col-12 col-xl-12 mb-4 mb-lg-0">
                            <div class="card">
                                <div class="card-header">Tambah Penjualan</div>
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
                                                            echo "<option value='".$dcs["id_customer"]."'>".$dcs["nama_customer"]."</option>";
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                                <div class="col-sm-6">
                                                    <label class="form-label">DO Number</label>
                                                    <input type="text" class="form-control" name="do_number" required/>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <label class="form-label">Item</label>
                                                    <select name="item" class="form-control" required>
                                                        <option value="">-</option>
                                                        <?php 
                                                        $it = $conn->query("SELECT * FROM `ab_item` ORDER by nama_item");
                                                        while($dit=$it->fetch()){
                                                            echo "<option value='".$dit["id_item"]."'>".$dit["nama_item"]." (Rp".$dit['harga_jual']."/ ".$dit['uom'].")</option>";
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                                <div class="col-sm-6">
                                                    <label class="form-label">Quantity</label>
                                                    <input type="number" class="form-control" name="qty" required/>
                                                </div>
                                            </div>
                                            
                                        </div>
                                        <div class="card-footer">
                                        <a href="index.php?page=penjualan" class="btn btn-sm btn-warning">Cancel</a>
                                            <button type="submit" name="tambah" class="btn btn-sm btn-primary">Submit</button>
                                        </div>
                                </form>
                            </div>
                        </div>
                    </div>