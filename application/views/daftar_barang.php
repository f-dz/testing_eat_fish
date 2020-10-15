<style>
	.btn.small {
		padding:0.5%;
		margin: 0.5%;
		width: 30px;
		height: 30px;
		border-radius:20%;
    }
	#dtl {
		color: black;
		font-size: 16;
	}
	.modal-img {
		display: block;
		margin-left: auto;
		margin-right: auto;
		text-align: center;
	}
</style>

<!-- MODAL TAMBAH -->
<div id="tambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
<div role="document" class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
		<form action="<?= base_url('Barang/tambah_barang'); ?>" method="post" enctype="multipart/form-data">
			<div class="modal-header">
				<h4 id="exampleModalLabel" class="modal-title">Tambah Barang</h4>
				<button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-md">
						<div class="form-group">
							<label>Nama Barang</label>
							<input type="text" name="nama_barang" required class="form-control">
						</div>
					</div>
					<div class="col-md">
						<div class="form-group">
							<label>Jenis Barang</label>
							<select name="jenis_barang" class="form-control" required>
								<option value="" disabled selected>--Pilih Jenis Barang--</option>
								<option value="Ikan" >Ikan</option>
								<option value="Produk Olahan">Produk Olahan</option>
							</select>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md">
						<div class="form-group">
							<label>Jumlah Barang</label>
							<input type="number" min="0" name="jumlah" required class="form-control">
						</div>
					</div>
					<div class="col-md">
						<div class="form-group">
							<label>Harga Barang</label>
							<input type="number" min="0" name="harga" required class="form-control">
						</div>
					</div>
				</div>
				<div class="form-group">
					<label>Deskripsi</label><br>
					<textarea style="min-width: 100%;" name="deskripsi" required rows="2" cols="15"></textarea>
				</div>
				<div class="form-group">
					<label>Foto Barang</label><br>
					<div class="custom-file">
						<input type="file" class="custom-file-input" id="foto" name="foto" required>
						<label class="custom-file-label" for="foto">Pilih file</label>
						<p style="font-weight: normal; font-size:11pt">&ensp;Maksimal 5 MB</p>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" data-dismiss="modal" class="btn btn-secondary">Batal</button>
				<button type="submit" value="simpan" class="btn btn-primary">Simpan</button>
			</div>
    	</form>
    </div>
</div>
</div>

<!-- MODAL EDIT -->
<?php foreach ($barang as $row) : ?>
<div id="edit<?= htmlspecialchars($row['id_barang']);?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
<div role="document" class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
		<form method="post" action="<?= base_url('Barang/edit_barang/'.$row['id_barang']); ?>" class="form-validate" enctype="multipart/form-data">
			<div class="modal-header">
				<h4 id="exampleModalLabel" class="modal-title">Edit Barang</h4>
				<button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-md">
						<div class="form-group">
							<label>Nama Barang</label>
							<input type="text" name="nama_barang" required class="form-control" value="<?= $row['nama_barang'];?>">
						</div>
					</div>
					<div class="col-md">
						<div class="form-group">
							<label>Jenis Barang</label>
							<select name="jenis_barang" class="form-control">
								<?php if ($row['jenis_barang'=='Ikan']) :?>
									<option value="Ikan" selected>Ikan</option>
									<option value="Produk Olahan">Produk Olahan</option>
								<?php else : ?>
									<option value="Ikan" >Ikan</option>
									<option value="Produk Olahan" selected>Produk Olahan</option>
								<?php endif;?>
							</select>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md">
						<div class="form-group">
							<label>Jumlah Barang</label>
							<input type="number" min="0" name="jumlah" required class="form-control" value="<?= $row['jumlah'];?>">
						</div>
					</div>
					<div class="col-md">
						<div class="form-group">
							<label>Harga Barang</label>
							<input type="number" min="0" name="harga" required class="form-control" value="<?= $row['harga'];?>">
						</div>
					</div>
				</div>
				<div class="form-group">
					<label>Deskripsi</label><br>
					<textarea style="min-width: 100%;" name="deskripsi" required><?= $row['deskripsi'];?></textarea>
				</div>
				<div class="form-group">
					<label>Pilih Foto Baru</label><br>
					<div class="custom-file">
						<input type="file" class="custom-file-input" id="foto" name="foto" required>
						<label class="custom-file-label" for="foto">Pilih file</label>
						<p style="font-weight: normal; font-size:11pt">&ensp;Maksimal 5 MB</p>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" data-dismiss="modal" class="btn btn-secondary">Batal</button>
				<button type="submit" value="simpan" class="btn btn-primary">Simpan</button>
			</div>
    	</form>
    </div>
</div>
</div>
<?php endforeach; ?>

<!-- MODAL UPDATE STOK -->
<?php foreach ($barang as $row) : ?>
<div id="update<?= htmlspecialchars($row['id_barang']);?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
<div role="document" class="modal-dialog modal-dialog-centered modal-sm">
    <div class="modal-content">
		<form method="post" action="<?= base_url('Barang/update_stok/'.$row['id_barang']); ?>" class="form-validate" enctype="multipart/form-data">
			<div class="modal-header">
				<h4 id="exampleModalLabel" class="modal-title">Update Stok</h4>
				<button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
			</div>
			<div class="modal-body">
				<div class="form-group">
					<label>Masukkan jumlah stok :</label><br>
					<input type="number" name="jumlah" min="0" required class="form-control">
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" data-dismiss="modal" class="btn btn-secondary">Batal</button>
				<button type="submit" value="simpan" class="btn btn-primary">Simpan</button>
			</div>
    	</form>
    </div>
</div>
</div>
<?php endforeach; ?>

<!-- Modal DETAIL-->
<?php foreach ($barang as $row) : ?>
<div id="detail<?= $row['id_barang'];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
<div role="document" class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
		<div class="modal-header">
			<h4 id="exampleModalLabel" class="modal-title">Detail Data Barang</h4>
			<button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
		</div>
		<div class="modal-body">
			<table style="border: none; width:100%">
				<tr>
					<td align="center" colspan="3">
						<img style="min-width:100px;min-height:100px;max-width:150px;" src="<?= base_url('assets/foto_barang/'.$row['foto'])?>" >
					</td>
				</tr>
				<tr>
					<td colspan="3"></td>
				</tr>
				<tr>
					<td>Nama Barang</td>
					<td>&ensp;:&ensp;</td>
					<td><?= $row['nama_barang']?></td>
				</tr>
				<tr>
					<td>Jenis Barang</td>
					<td>&ensp;:&ensp;</td>
					<td><?= $row['jenis_barang']?></td>
				</tr>
				<tr>
					<td>Stok</td>
					<td>&ensp;:&ensp;</td>
					<td><?= $row['jumlah']?></td>
				</tr>
				<tr>
					<td>Harga</td>
					<td>&ensp;:&ensp;</td>
					<td><?= 'Rp ', number_format($row['harga'],2)?></td>
				</tr>
				<tr>
					<td>Deskripsi</td>
					<td>&ensp;:&ensp;</td>
					<td><?= $row['deskripsi']?></td>
				</tr>
			</table>
		</div>
		<div class="modal-footer">
			<button type="button" data-dismiss="modal" class="btn btn-secondary">Tutup</button>
		</div>
    </div>
</div>
</div>
<?php endforeach;?>

<div class="right_col" role="main">
	
	<div class="clearfix"></div>

	<div class="row">
		<div class="col-md-12 col-sm-12 ">
			<div class="x_panel">
				<div class="x_content">
					<div class="row">
						<div class="col-sm-12">
							<div class="card-box table-responsive">
								<h3 align="center">DAFTAR BARANG</h3><br>
								<?php if ($this->session->userdata('level')=='admin') : ?>
								<button data-toggle="modal" data-target="#tambah" type="button" class="btn btn-primary"><i class="fa fa-plus" style="color:white"></i>&ensp;Tambah Barang Baru</button><br><br>
								<?php endif;?>
								<table style="width: 100%" class="table table-hover table-bordered" id="datatable">
									<thead style="background-color: #e2e5de;">
									<tr>
										<th style="max-width:30px; text-align:center;">No</th>
										<th style="text-align:center">Nama</th>
										<th style="text-align:center">Jenis</th>
										<th style="text-align:center">Stok</th>
										<th style="text-align:center">Harga</th>
										<th style="text-align:center;min-width:110px;">Aksi</th>
									</tr>
									</thead>
									<tbody>
									<?php $i=1; ?>
									<?php foreach ($barang as $row) : ?>
										<tr>
											<td align="center" style="max-width:30px;"><?= $i; ?></td>
											<td><?= htmlspecialchars($row['nama_barang']); ?></td>
											<td><?= htmlspecialchars($row['jenis_barang']); ?></td>
											<td align="center"><?= htmlspecialchars($row['jumlah']); ?>&ensp;
												<?php if ($this->session->userdata('level')=='admin') : ?>
													<a class="btn small btn-success" data-toggle="modal" data-target="#update<?= $row['id_barang'];?>" title='Update stok'>
													<i class="fa fa-upload" style="padding:3px;color:white"></i></a></td>
												<?php endif;?>
											<td>Rp <?= htmlspecialchars(number_format($row['harga'],2)); ?></td>
											<td align="center" style="min-width:110px;">
												<a class="btn small btn-primary" data-toggle="modal" data-target="#detail<?= $row['id_barang'];?>" title='Detail'>
												<i class="fa fa-info" style="padding:3px;color:white"></i></a>
												<?php if ($this->session->userdata('level')=='admin') : ?>
													<a class="btn small btn-warning" data-toggle="modal" data-target="#edit<?= $row['id_barang'];?>" title='Edit'>
													<i class="fa fa-pencil" style="color:white"></i></a>
													<a class="btn small btn-danger" href="<?= base_url('Barang/hapus_barang/')?><?= htmlspecialchars($row['id_barang']);?>" title='Hapus'>
													<i class="fa fa-trash" style="color:white"></i></a>
												<?php endif;?>
											</td>
											<?php $i++;?>
										</tr>
									<?php endforeach; ?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>