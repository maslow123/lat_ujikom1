<h2>Penjualan</h2>
                    <div class="row">
                        <div class="col-12 col-xl-6 mb-4 mb-lg-0">
                            <div class="card">
                                <div class="card-header">Tambah Penjualan</div>
                                <div class="card-body">
                <div class="table-responsive">

                                            <?php
                            if (isset($_GET['id'])) {
                                $id = addslashes($_GET['id']);
                            }else{
                                header("Location: index.php");
                                exit;
                            }
                            $cmd = "SELECT a.*,b.*,c.nama_customer,d.nama_item FROM ab_sales as a, ab_transaction as b, ab_customer as c, ab_item as d WHERE a.id_sales=b.id_transaction AND a.id_sales='$id' AND c.id_customer=a.id_customer AND b.id_item=d.id_item";
                            $res = $conn->query($cmd);
                            if($res->rowCount()>0){
                                $row = $res->fetch();
                            }
                            
                            //var_dump($res);
                            $conn->disconnect();
                            //
                            
                            ?>
                            <table class="table table-bordered table-striped">
                                <tr>
                                    <td> ID Transaksi </td>
                                    <td style="width:5px;"> : </td>
                                    <td> <?php echo $row['id_sales'] ?></td>
                                </tr>
                                <tr>
                                    <td> Tanggal </td>
                                    <td> : </td>
                                    <td> <?php echo $row['tgl_sales'] ?></td>
                                </tr>
                                <tr>
                                    <td> Customer </td>
                                    <td> : </td>
                                    <td> <?php echo $row['nama_customer'] ?></td>
                                </tr>
                                <tr>
                                    <td> DO Number </td>
                                    <td> : </td>
                                    <td> <?php echo $row['do_number'] ?></td>
                                </tr>
                                <tr>
                                    <td> Status </td>
                                    <td> : </td>
                                    <td> <?php echo $row['status'] ?></td>
                                </tr>
                                <tr>
                                    <td> Item </td>
                                    <td> : </td>
                                    <td> <?php echo $row['nama_item'] ?></td>
                                </tr>
                                <tr>
                                    <td> Quantity </td>
                                    <td> : </td>
                                    <td> <?php echo $row['quantity'] ?></td>
                                </tr>
                                <tr>
                                    <td> Price </td>
                                    <td> : </td>
                                    <td> <?php echo $row['price'] ?></td>
                                </tr>
                                <tr>
                                    <td> Ammount </td>
                                    <td> : </td>
                                    <td> <?php echo $row['amount'] ?></td>
                                </tr>
                            </table>
                            <a href="index.php?page=penjualan"><button class="btn btn-sm btn-success">Kembali</button></a>
                                            
                                            </div>

                                          
                                            </div>
                                            
                                        </div>
                                        
                            
                            </div>
                        </div>
                    </div>