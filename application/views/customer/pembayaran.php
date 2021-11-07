<div class="row"></div>
<div class="container mt-5 mb-5">
	<div class="row" style="margin-top: 149px;">
		<div class="col-md-8">
			<div class="card">
				<div class="card-header alert alert-success">
					Invoice Pembayran Anda
				</div>
				<div class="card-body">
					<table class="table">
						<?php foreach ($transaksi as $tr) : ?>
						<tr>
							<th>Merk Mobil</th>
							<td>:</td>
							<td><?php echo $tr->merk ?></td>
						</tr>
						<tr>
							<th>Tanggal Rental</th>
							<td>:</td>
							<td><?php echo $tr->tanggal_rental ?></td>
						</tr>
						<tr>
							<th>Tanggal Kembali</th>
							<td>:</td>
							<td><?php echo $tr->tanggal_kembali; ?></td>
						</tr>
						<tr>
							<th>Biaya Sewa/Hari</th>
							<td>:</td>
							<td>Rp.<?php echo number_format($tr->harga,0,',','.') ?>/Hari</td>
						</tr>
						<tr>
							<th>Biaya Denda Telat kembali/Jam</th>
							<td>:</td>
							<td>Rp.<?php echo number_format($tr->denda,0,',','.') ?>/Jam</td>
						</tr>

						<tr>
							<?php 
							$x= strtotime($tr->tanggal_rental);
							$y= strtotime($tr->tanggal_kembali);

							$jumlah = abs(($y-$x)/(60*60*24));
							 ?>
							<th>Waktu Sewa</th>
							<td>:</td>
							<td><?php echo $jumlah ?> Hari</td>
						</tr>

						<tr class="text-success">
							<th>Jumlah Pembayaran</th>
							<td>:</td>
							<td>
								<button class="btn btn-sm btn-success">Rp.<?php echo number_format($jumlah * $tr->harga,0,',','.') ?></button>
							</td>
						</tr>

						<tr>
						<td></td>
						<td></td>
						<td>
							<a href="<?php echo base_url('customer/transaksi/cetak_invoice/'.$tr->id_rental) ?>" class="btn btn-sm btn-secondary"><i class="fas fa-check"></i>Print Invoice</a>
						</td>
					</tr>

					<?php endforeach; ?>
					</table>
				</div>
			</div>
			
		</div>
		<div class="col-md-4">
			<div class="card">
				<div class="card-header alert alert-primary">
					Informaasi Pembayaran
				</div>
				<div class="card-body">
					<ul class="list-group list-group-flush">
						<li class="list-group-item"><p class="text-success">Silahkan Bayar melalui No Rek DiBawa ini</p></li>
						<li class="list-group-item">BNI : 493874987</li>
						<li class="list-group-item">BRI :93487434</li>
						<li class="list-group-item">BCA :934843434</li>
					</ul>
					<div>
					<?php
					if (empty($tr->bukti_pembayaran)) {?>
						<a style="width: 99%;" href="" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-check"></i> Kirim Bukti Pembayaran</a>
					<?php }elseif ($tr->status_pembayaran=="0") {?>
						<a  class="btn btn-sm btn-warning" style="width: 99%;">Menunggu Konfirmasi</a>
					<?php }elseif ($tr->status_pembayaran=="1") { ?>
						<button  class="btn btn-sm btn-success" style="width: 99%;">Transaksi Selesai</button>
					<?php } ?>
					</div>
				</div>		
			</div>
			
		</div>
	</div>
</div>





<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Kirim Bukti Pembayaran</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <form method="POST" action="<?php echo base_url('customer/transaksi/pembayaran_aksi') ?>" enctype="multipart/form-data">
       	<input type="hidden" name="id_rental" value="<?php echo $tr->id_rental ?>">
       	<input type="file" name="bukti_pembayaran" required>
       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-success">Kirim</button>
      </div>
      </form>
    </div>
  </div>
</div>