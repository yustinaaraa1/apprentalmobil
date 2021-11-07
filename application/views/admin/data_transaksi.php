<div class="main-content">
	<section class="section">
		<div class="section-header">
			<h1>Data Transaksi</h1>
		</div>	
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
				<th>Cek Pembayaran</th>
				<th>Aksi</th>
			</tr>

			<tr>
				<?php $no=1;	foreach ($transaksi as $tr): ?>
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

					<td>
						<?php if (empty($tr->bukti_pembayaran)) {?>
							<button class="btn btn-sm btn-danger"><i class="fas fa-times-circle"></i></button>
						<?php }elseif ($tr->status_pembayaran=="0") { ?>
							<a href="<?php echo base_url('admin/transaksi/pembayaran/'.$tr->id_rental) ?>" class="btn btn-sm btn-danger"><i class="fas fa-check-circle"></i></a>
						<?php }elseif ($tr->status_pembayaran=="1") { ?>
							<a href="<?php echo base_url('admin/transaksi/pembayaran/'.$tr->id_rental) ?>" class="btn btn-sm btn-primary"><i class="fas fa-check-circle"></i></a>
						<?php } ?>
					</td>

					<td>
						<?php 	if ($tr->status=="1") {?>
							<a class="btn btn-sm btn-primary mr-1" href="<?php echo base_url('admin/transaksi/transaksi_selesai/'.$tr->id_rental); ?>"><i class="fas fa-check"></i></a>
						<?php }else{?>
							<div class="row">
								<div class="row">
								<a class="btn btn-sm btn-success mr-1" href="<?php echo base_url('admin/transaksi/transaksi_selesai/'.$tr->id_rental); ?>"><i class="fas fa-check"></i></a>

								<?php if ($tr->status_rental=="Belum selesai") { ?>
							<a onclick="return confirm('Yakin Batal???');" href="<?php echo base_url('admin/transaksi/batal_transaksi/'.$tr->id_rental) ?>" class="btn btn-sm btn-danger"><i class="fas fa-times-circle"></i></a></td>
						<?php }else{ ?>
							<a href="" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-times-circle"></i></a>
						<?php } ?>

								
						<?php } ?>
						</div>
						</div>
					</td>


					</tr>
				<?php 	endforeach; ?>
			

			
		</table>
		</div>
	</section>
</div>	




<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Batal?????</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       Maaf Transaksi sudah selesai dan tidak bisa dibatalkan!!!!!
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>