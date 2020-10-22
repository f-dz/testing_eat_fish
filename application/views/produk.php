<div>
    <div class="animate form login_form">
        <section>
        <br><h3 style="text-align: center;">KATALOG PRODUK EAT FISH</h3><br>
        <div class="row">
            <div class="col-md-4">
                <div style="margin: 40px;" class="container">
                    <div class="row">
                        <div class="col-md-10">
                            <h5 align="center">KERANJANG SAYA</h5>
                            <h1 align="center"><i style="font-size:80px;" class="fa fa-cart-arrow-down"></i></h1>
                        </div>
                    </div>
                    <?php if (count($keranjang)!=0) : ?>
                        <?php $jumlah=0; foreach ($keranjang as $row) :?>
                            <div class="row">
                                <div class="col-md-6">
                                    <label><?= filter_var($row['nama_barang'], FILTER_SANITIZE_STRING);?> x<?= filter_var($row['jumlah'], FILTER_VALIDATE_INT);;?></label>
                                </div>
                                <div style="text-align: right;" class="col-md-3">
                                    <label>Rp <?= filter_var(number_format($row['total_harga'], 2, ",", "."), FILTER_SANITIZE_STRING); ?></label>
                                </div>
                                <div class="col-md-1">
                                    <a class="btn small btn-danger" href="<?= filter_var(base_url('Transaksi/hapus_keranjang/'.$row['id_keranjang']), FILTER_SANITIZE_URL);?>" title='Hapus'>
									<i class="fa fa-trash" style="color:white"></i></a>
                                </div>
                            </div>
                        <?php $jumlah += $row['total_harga']; endforeach;?>
                        <div class="row">
                            <div class="col-md-10">
                                <hr style="color: grey;">                                
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Total Harga</label>
                            </div>
                            <div style="text-align: right;" class="col-md-3">
                                <label>Rp <?= filter_var(number_format($jumlah, 2, ",", "."), FILTER_SANITIZE_STRING); ?></label>
                            </div>
                        </div>
                        <form action="<?= filter_var(base_url('Transaksi/tambah_transaksi/'), FILTER_SANITIZE_URL); ?>" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-4">
                                        <label style="color:black">Nama Pembeli</label>
                                    </div>
                                    <div style="text-align: right;" class="col-md-6">
                                        <input type="text" name="nama_pembeli" required>
                                    </div>
                                    <input type="number" name="total_harga" hidden value="<?= filter_var($jumlah, FILTER_SANITIZE_STRING);?>">
                                </div>
                            </div>
                                <div class="row">
                                    <div style="text-align: center;" class="col-md-10">
                                        <button type="submit" value="simpan" class="btn btn-primary" href="<?= filter_var(base_url('Transaksi/tambah_transaksi'), FILTER_SANITIZE_URL);?>">Order Sekarang</button>                               
                                    </div>
                                </div>
                        </form>
                        <div class="row">
                            <div style="text-align: center;" class="col-md-10">
                                <a class="btn btn-warning" href="<?= filter_var(base_url('Transaksi/reset_keranjang'), FILTER_SANITIZE_URL);?>">Reset Keranjang</a>                               
                            </div>
                        </div>
                    <?php else : ?>
                        <div class="col-md-10">
                            <h6 align="center" >Keranjang kosong</h6>
                        </div>
                    <?php endif;?>
                </div>
            </div>
            <div class="col-md-8">
                <div style="margin-left: 30px;" class="container">
                    <button class="tablink" onclick="openPage('ikan', this, 'blue')" id="defaultOpen">Ikan</button>
                    <button class="tablink" onclick="openPage('produk', this, 'blue')">Produk Olahan</button>
                </div>

                <div id="ikan" class="tabcontent">
                    <table class="table-responsive" width="100%">
                        <tbody>
                            <?php $i=0; foreach($ikan as $row) :
                            if($i%3==0) : ?>
                                <tr>
                            <?php endif;?>
                            <td>                             
                            <div style="height:350px;max-width:260px;width:100%;margin:10px;" class="card">
                                <a>
                                    <img height="200px" width="258px" src="<?= filter_var(base_url('assets/foto_barang/'.$row['foto']), FILTER_SANITIZE_URL);?>"/>
                                </a>
                                <br>
                                <div class="container">
                                    <div class="row">
                                        <div class="col">
                                            <a style="color: orange;">Rp <?= filter_var(number_format($row['harga'], 2, ",", "."), FILTER_SANITIZE_STRING);?></a><br>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div style="text-align: left;" class="col-md">
                                            <a style="color: black;"><?= filter_var($row['nama_barang'], FILTER_SANITIZE_STRING);?></a>
                                        </div>
                                        <div style="text-align: right;" class="col-md">
                                            <a style="color:black">Stok : <?= filter_var($row['jumlah'], FILTER_VALIDATE_INT);?></a>
                                        </div>
                                    </div>
                                </div>
                                <form action="<?= filter_var(base_url('Transaksi/tambah_keranjang/'.$row['nama_barang'].'/'.$row['harga']), FILTER_SANITIZE_URL); ?>" method="post" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md">
                                                <label style="color:black">Jumlah</label>
                                            </div>
                                            <div class="col-md">
                                                <input type="number" min="1" value="1" name="jumlah" required>
                                            </div>
                                        </div>
                                     </div>
                                     <div class="row">
                                        <div style="text-align: center;" class="col-md">
                                            <button type="submit" value="simpan" class="btn btn-primary">Tambah Ke Keranjang</button>
                                        </div>
                                     </div>
                                </form>
                            </div>
                            </td>
                            <?php if ($i%3==2) : ?>
                                </tr>
                            <?php endif; $i++;?>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>

                <div id="produk" class="tabcontent">
                    <table class="table-responsive" width="100%">
                    <tbody>
                            <?php $i=0; foreach($produk_olahan as $row) :
                            if($i%3==0) : ?>
                                <tr>
                            <?php endif;?>
                            <td>
                            <div style="height:350px;max-width:260px;width:100%;margin:10px;" class="card">
                                <a>
                                    <img height="200px" width="258px" src="<?= filter_var(base_url('assets/foto_barang/'.$row['foto']), FILTER_SANITIZE_URL);?>"/>
                                </a>
                                <br>
                                <div class="container">
                                    <div class="row">
                                        <div class="col">
                                            <a style="color: orange;">Rp <?= filter_var(number_format($row['harga'], 2, ",", "."), FILTER_SANITIZE_STRING);?></a><br>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div style="text-align: left;" class="col-md">
                                            <a style="color: black;"><?= filter_var($row['nama_barang'], FILTER_SANITIZE_STRING);?></a>
                                        </div>
                                        <div style="text-align: right;" class="col-md">
                                            <a style="color:black">Stok : <?= filter_var($row['jumlah'], FILTER_VALIDATE_INT);?></a>
                                        </div>
                                    </div>
                                </div>
                                <form action="<?= filter_var(base_url('Transaksi/tambah_keranjang/'.$row['nama_barang'].'/'.$row['harga']), FILTER_SANITIZE_URL); ?>" method="post" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md">
                                                <label style="color:black">Jumlah</label>
                                            </div>
                                            <div class="col-md">
                                                <input type="number" min="1" value="1" name="jumlah" required>
                                            </div>
                                        </div>
                                     </div>
                                     <div class="row">
                                        <div style="text-align: center;" class="col-md">
                                            <button type="submit" value="simpan" class="btn btn-primary">Tambah Ke Keranjang</button>
                                        </div>
                                     </div>
                                </form>
                            </div>
                            </td>
                            <?php if ($i%3==2) : ?>
                                </tr>
                            <?php endif; $i++;?>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        </section>
    </div>
</div>