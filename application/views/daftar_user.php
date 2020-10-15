<style>
	.btn.small {
        padding:0%;
        margin: 0%;
        height: 30px;
    }
	#dtl {
		color: black;
		font-size: 16;
	}
</style>

<!-- MODAL TAMBAH -->
<div id="tambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
<div role="document" class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
		<form method="post" action="<?= base_url('User/tambah_user'); ?>" class="form-validate">
			<div class="modal-header">
				<h4 id="exampleModalLabel" class="modal-title">Tambah User</h4>
				<button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
			</div>
			<div class="modal-body">
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" name="username" required class="form-control">
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" required class="form-control">
                </div>
                <div class="form-group">
                    <label>Level</label>
                    <select name="level" class="form-control" required>
                        <option value="" disabled selected>--Pilih Level--</option>
                        <option value="admin" >Admin</option>
                        <option value="manager">Manager</option>
                    </select>
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
<?php foreach ($user as $row) : ?>
<div id="edit<?= htmlspecialchars($row['id_user']);?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
<div role="document" class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
		<form method="post" action="<?= base_url('User/edit_user/'.$row['id_user']); ?>" class="form-validate">
			<div class="modal-header">
				<h4 id="exampleModalLabel" class="modal-title">Edit User</h4>
				<button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
			</div>
			<div class="modal-body">
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" name="username" required class="form-control" value="<?= $row['username'];?>">
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" required class="form-control" value="<?= $row['password'];?>">
                </div>
                <div class="form-group">
                    <label>Level</label>
                    <select name="level" class="form-control">
                        <?php if ($row['level']=="Admin") : ?>
                            <option value="admin" selected>Admin</option>
                            <option value="manager">Manager</option>
                        <?php else : ?>
                            <option value="admin">Admin</option>
                            <option value="manager" selected>Manager</option>
                        <?php endif;?>
                    </select>
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

<div class="right_col" role="main">
	
	<div class="clearfix"></div>

	<div class="row">
		<div class="col-md-12 col-sm-12 ">
			<div class="x_panel">
				<div class="x_content">
					<div class="row">
						<div class="col-sm-12">
							<div class="card-box table-responsive">
								<h3 align="center">DAFTAR USER</h3><br>
								<button data-toggle="modal" data-target="#tambah" type="button" class="btn btn-primary"><i class="fa fa-plus" style="color:white"></i>&ensp;Tambah User Baru</button><br><br>
								<table style="width: 100%" class="table table-hover table-bordered" id="datatable">
									<thead style="background-color: #e2e5de;">
									<tr>
										<th style="max-width:30px; text-align:center;">No</th>
										<th style="text-align:center">Username</th>
										<th style="text-align:center">Password</th>
										<th style="text-align:center">Level</th>
										<th style="text-align:center;min-width:150px;">Aksi</th>
									</tr>
									</thead>
									<tbody>
									<?php $i=1; ?>
									<?php foreach ($user as $row) : ?>
										<tr>
											<td align="center" style="max-width:30px;"><?= $i; ?></td>
											<td><?= htmlspecialchars($row['username']); ?></td>
											<td><?= htmlspecialchars($row['password']); ?></td>
											<td><?= htmlspecialchars($row['level']); ?></td>
											<td style="min-width:150px;" align="center">
                                                <a class="btn small btn-warning" data-toggle="modal" data-target="#edit<?= $row['id_user'];?>" title='Edit'>
                                                &ensp;<i class="fa fa-pencil" style="color:white">&ensp;Edit</i>&ensp;</a>&ensp;
                                                <a  class="btn small btn-danger" href="<?= base_url('User/hapus_user/')?><?= htmlspecialchars($row['id_user']);?>" title='Hapus'>
                                                &ensp;<i class="fa fa-trash" style="color:white">&ensp;Hapus</i>&ensp;</a>
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