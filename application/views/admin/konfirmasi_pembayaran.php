<div class="main-content">
	<section class="section">
		<div class="section-header">
			<h1>Konfirmasi Pembayaran</h1>
		</div>
		<div class="card" style="width: 55%;">
			<center>
			<div class="card-header">
				Konfirmasi Pembayaran
			</div>
			<div class="card-body">
				<form method="POST" action="<?php echo base_url('admin/transaksi/cek_pembayaran') ?>">
					<?php foreach ($pembayaran as $pm): ?>

						<a href="<?php echo base_url('admin/transaksi/download_pembayaran/'.$pm->id_rental) ?>" class="btn btn-sm btn-success"><i class="fas fa-download">Download Bukti Pembayaran</i></a>
						<div class="custom-control custom-switch">
							<input type="hidden" name="id_rental" value="<?php echo $pm->id_rental ?>">
  							<input type="checkbox" class="custom-control-input ml-5" id="customSwitch1" value="1" name="status_pembayaran">
  							<label class="custom-control-label" for="customSwitch1">Konfirmasi Pembayaran</label>
						</div>
						<hr>
						<button type="submit" class="btn btn-sm btn-primary">Simpan</button>
					<?php endforeach; ?>
				</form>
			</div>
			</center>
		</div>
	</section>
</div>