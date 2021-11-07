<div class="row"></div>
<table class="table" style="width: 61%;">
		<h1></h1>
		<?php foreach ($transaksi as $tr) : ?>
		<tr>
			<td>Nama Customer</td>	
			<td>:</td>
			<td><?php echo $tr->nama ?></td>
		</tr>
		<tr>
			<td>Merk Mobil</td>
			<td>:</td>
			<td><?php echo $tr->merk ?></td>
		</tr>
		<tr>
			<td>Tanggal Rental</td>
			<td>:</td>
			<td><?php echo $tr->tanggal_rental ?></td>
		</tr>
		<tr>
			<td>Tanggal Kembali</td>
			<td>:</td>
			<td><?php echo $tr->tanggal_kembali; ?></td>
		</tr>
		<tr>
			<td>Biaya Sewa/Hari</td>
			<td>:</td>
			<td>Rp.<?php echo number_format($tr->harga,0,',','.') ?>/Hari</td>
		</tr>
		<tr>
			<td>Biaya Denda Telat kembali/Jam</td>
			<td>:</td>
			<td>Rp.<?php echo number_format($tr->denda,0,',','.') ?>/Jam</td>
		</tr>

		<tr>
			<?php 
			$x= strtotime($tr->tanggal_rental);
			$y= strtotime($tr->tanggal_kembali);

			$jumlah = abs(($y-$x)/(60*60*24));
			 ?>
			<td>Waktu Sewa</td>
			<td>:</td>
			<td><?php echo $jumlah ?> Hari</td>
		</tr>

		<tr>
			<td>Status Pembayaran</td>
			<td>:</td>
			<td><?php if ($tr->status_pembayaran =="0") {
				echo "Belum Lunas";
			} else {
				echo "Suda Lunas";
			}?></td>
		</tr>

		<tr>
			<td></td>
		</tr>

		<tr style="font-weight: bold;color: red;">
			<td>JUMLAH PEMBAYARAN</td>
			<td>:</td>
			<td class="btn btn-sm btn-success">Rp.<?php echo number_format($jumlah * $tr->harga,0,',','.') ?></td>
		</tr>
		<tr>
			<td>Rekening Pembayaran</td>
			<td>:</td>
			<td>
				<ul>
					<li>BNI : 493874987</li>
					<li>BRI :93487434</li>
					<li>BCA :934843434</li>
				</ul>
			</td>
		</tr>

	<?php endforeach; ?>
	</table>

	<script type="text/javascript">
		window.print();
	</script>