<div class="container">
	<div class="card mx-auto">
		<div >
			<div class="card mx-auto"style="margin-top:11%;">
				<h1 align="center">Transaksi Customer</h1>
			</div>
			<?php echo $this->session->flashdata('pesan') ?>
			<table align="center" class="table table-bordered table-striped">
				<tr>
					<th>No</th>
					<th>Nama Customer</th>
					<th>Merk Mobil</th>
					<th>No Plat</th>
					<th>Harga Sewa</th>
					<th>Aksi</th>
					<th>Batal</th>
				</tr>
				<?php $no=1; foreach ($transaksi as $tr): ?>
					<tr>
						<td><?php echo $no++; ?></td>
						<td><?php echo $tr->nama; ?></td>
						<td><?php echo $tr->merk; ?></td>
						<td><?php echo $tr->no_plat; ?></td>
						<td>Rp.<?php echo number_format($tr->harga,0,',','.'); ?></td>
						<td>
							<?php if ($tr->status_rental=="Selesai") {?>
								<button class="btn btn-sm btn-danger">Rental Selesai</button>
							<?php }else{?>
								<a href="<?php echo base_url('customer/transaksi/pembayaran/'.$tr->id_rental) ?>" class="btn btn-sm btn-success">Cek Pembayaran</a>
							<?php } ?>
						</td>
						<td>
						<?php if ($tr->status_rental=="Belum selesai") { ?>
							<a onclick="return confirm('Yakin Batal???');" href="<?php echo base_url('customer/transaksi/batal_transaksi/'.$tr->id_rental) ?>" class="btn btn-sm btn-danger">Batal</a></td>
						<?php }else{ ?>
							<a href="" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#exampleModal">Batal</a>
						<?php } ?>
					</tr>
				<?php endforeach; ?>
				
			</table>
			
		</div>
		
	</div>
</div>
<div style="margin-bottom: 11%;">
	
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