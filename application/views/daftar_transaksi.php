<style>
	.btn.small {
		padding:0.5%;
		margin: 0.5%;
		width: 30px;
		height: 30px;
		border-radius:20%;
    }
</style>

<div class="right_col" role="main">
	
	<div class="clearfix"></div>

	<div class="row">
		<div class="col-md-12 col-sm-12 ">
			<div class="x_panel">
				<div class="x_content">
					<div class="row">
						<div class="col-sm-12">
							<div class="card-box table-responsive">
								<h3 align="center">RIWAYAT TRANSAKSI</h3><br>
								<table style="width: 100%" class="table table-hover table-bordered" id="datatable">
									<thead style="background-color: #e2e5de;">
									<tr>
										<th style="max-width:30px; text-align:center;">No</th>
										<th style="text-align:center">Nama Pembeli</th>
										<th style="text-align:center">Total Harga</th>
										<th style="text-align:center">Jam</th>
										<th style="text-align:center">Tanggal</th>
										<th style="text-align:center">Status</th>
									</tr>
									</thead>
									<tbody>
									<?php $i=1; ?>
									<?php foreach ($transaksi as $row) : ?>
										<tr>
											<td align="center" style="max-width:30px;"><?= filter_var($i, FILTER_VALIDATE_INT); ?></td>
											<td><?= filter_var($row['nama_pembeli'], FILTER_SANITIZE_STRING); ?></td>
											<td>Rp <?= filter_var(number_format($row['total_harga'],2), FILTER_SANITIZE_STRING); ?></td>
											<td align="center"><?= filter_var(date("H:i:s", strtotime($row['jam'])), FILTER_SANITIZE_STRING);?></td>
											<td align="center"><?= filter_var(date("d-m-Y", strtotime($row['tanggal'])), FILTER_SANITIZE_STRING);?></td>
                                            <td align="center"><?= filter_var($row['status'], FILTER_SANITIZE_STRING);?>&ensp;
                                                <?php if ($this->session->userdata('level')=='admin') : 
                                                    if ($row['status']=='Proses') : ?>
                                                    <a class="btn small btn-success" href="<?= filter_var(base_url('Transaksi/update_status/'.$row['id_transaksi']), FILTER_SANITIZE_URL)?>" title='Update status'>
                                                    <i class="fa fa-upload" style="padding:3px;color:white"></i></a>
                                                <?php endif; endif;?>
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