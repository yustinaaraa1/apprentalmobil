

<div class="main-content">
	<section class="section">
		<div class="section-header">
			<h1>Tampilkan Data Laporan</h1>
		</div>
		
		<form method="POST" action="<?php echo base_url('admin/laporan') ?>">
		<div class="form-group">
			<label>Dari Tanggal</label>
			<input type="date" name="dari" class="form-control">
			<?php echo form_error('dari','<div class="text-small text-danger">','</div>'); ?>
		</div>
		<div class="form-group">
			<label>Sampai Tanggal</label>
			<input type="date" name="sampai" class="form-control">
			<?php echo form_error('sampai','<div class="text-small text-danger">','</div>'); ?>
		</div>
		<button type="submit" class="btn btn-sm btn-primary"><i class="fas fa-eye"></i> Tampilkan</button>
		<hr>
		<div class="btn-group">
			<a href="<?php echo base_url('admin/laporan/print_laporan/?dari='.set_value('dari').'&sampai='.set_value('sampai')) ?>" class="btn btn-sm btn-success" target="_blank"><i class="fas fa-print">Print</i></a>
		</div>
	</form>

		<div class="table-responsive">
			<?php echo $this->session->flashdata('pesan') ?>
		<table class="table-responsive table table-bordered table-striped">
			<tr>
				<th>No</th>
				<th>Nama Customer</th>
				<th>Mobil</th>
				<th>Tgl Rental</th>
				<th>Tgl Kembali</th>
				<th>Harga/hari</th>
				<th>Denda/hari</th>
				<th>Total Denda</th>
				<th>tgl. Dikembalikan</th>
				<th>Status Pengembalian</th>
				<th>Status Rental</th>
			</tr>

			<tr>
				<?php $no=1;	foreach ($laporan as $tr): ?>
					<td><?php echo $no++;?></td>
					<td><?php echo $tr->nama; ?></td>
					<td><?php echo $tr->merk; ?></td>
					<td><?php echo date('d/m/Y',strtotime($tr->tanggal_rental)); ?></td>
					<td><?php echo date('d/m/Y',strtotime($tr->tanggal_kembali)); ?></td>
					<td>Rp.<?php echo number_format($tr->harga,0,',','.'); ?></td>
					<td>Rp.<?php echo number_format($tr->denda,0,',','.'); ?></td>
					<td>Rp.<?php echo number_format($tr->total_denda,0,',','.') ?></td>
					<td>
						<?php 	if ($tr->tanggal_pengembalian=="0000-00-00") {
							echo "-";
						}else{
							echo date('d/m/Y', strtotime($tr->tanggal_pengembalian));
						}

						?>
					</td>
					<td>
						<?php if ($tr->status=="1") {
							echo "Kembali";
						}else{
							echo "Belum Kembali";

						}

						 ?>
						
					</td>
					<td>
						<?php if ($tr->status=="1") {
							echo "Kembali";
						}else{
							echo "Belum Kembali";

						}

						 ?>
						
					</td>

					

					
						
						</div>
					</td>


					</tr>
				<?php 	endforeach; ?>
			

			
		</table>
		</div>
	</section>
</div>