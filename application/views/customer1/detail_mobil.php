<!-- Header-->
        <header class="bg-dark py-1">
            <div class="container px-1 px-lg-1 my-1">
                <div class="text-center text-white">
                    <h1 class="display-4 fw-bolder">Detail Mobil</h1>
                </div>
            </div>
        </header>
        <!-- Section-->



<div class="container mt-5 mb-5">
	<div class="card">
		<div class="card-body">
			<?php foreach ($detail as $dt):?>
				<div class="row">
					<div class="col-md-6">
						<img style="width: 85%; height: px;
						" src="<?php echo base_url().'assets/upload/'.$dt->gambar; ?>">
					</div>
					<div class="col-md-6">
						<table class="table">
							<tr>
								<th>Merk</th>
								<td><?php echo $dt->merk ?></td>
							</tr>
							<tr>
								<th>No Plat</th>
								<td><?php echo $dt->no_plat ?></td>
							</tr>
							<tr>
								<th>Warna</th>
								<td><?php echo $dt->warna ?></td>
							</tr>
							<tr>
								<th>Tahun</th>
								<td><?php echo $dt->tahun ?></td>
							</tr>
							<tr>
								<th>Status</th>
								<td><?php 
								if ($dt->status=='0') {
									echo "Tidak Tersedia";
								}else{
									echo "Tersedia";
								}

								 ?></td>
								
							</tr>
							<tr>
								<td>
									<?php 
                                if ($dt->status=="0") {
                                    echo "<span class='btn btn-danger' disable>Telah disewa</span>";
                                }else{
                                    echo anchor('customer/rental/tambah_rental'.$dt->id_mobil,'<button type="submit" class="btn btn-success">Rental</button>');
                                } 


                                ?>
								</td>
							</tr>
						</table>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</div>