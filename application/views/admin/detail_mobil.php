<div class="container-fluid">
	<div class="alert alert-info" role="alert"><i class="fas fa-car"></i><strong> FORM EDIT MOBIL</strong></div>

	<div class="card">
		<div class="card-body">

			<p class="text-right">
					<a href="<?php echo base_url(); ?>admin/mobil" class="btn btn-sm btn-secondary">Back</a>
				</p>

			<div class="row">
					
					<div class="col-md-5"><br>
					<img width="300px" src="<?php echo base_url().'assets/upload/'. $mobil->gambar ?>"></div>
					<div class="col-md-7">
						<table class="table">
							<tr>
								<td>Type Mobil</td>
								<td>
								<?php
								if ($mobil->nama_type == "Kijang"){
									echo "Kijang";
								}elseif($mobil->nama_type == "Mini Bus"){
									echo "Mini Bus";
								}else{
									echo "<span class='text-danger'>Type Mobil Belum Tersedia</span>";
								}  
								?>
								</td>
							</tr>
							<tr>
								<td>Merk</td>
								<td><?php echo $mobil->merk ?></td>
							</tr>
							<tr>
								<td>No Plat</td>
								<td><?php echo $mobil->no_plat ?></td>
							</tr>
							<tr>
								<td>Tahun</td>
								<td><?php echo $mobil->tahun ?></td>
							</tr>
							<tr>
								<td>Warna</td>
								<td><?php echo $mobil->warna ?></td>
							</tr>
							<tr>
								<td>Harga Sewa/Hari</td>
								<td>Rp.<?php echo number_format($mobil->harga,0,',','.')  ?></td>
							</tr>
							<tr>
								<td>Denda</td>
								<td>Rp.<?php echo number_format($mobil->denda,0,',','.')  ?></td>
							</tr>
							<tr>
								<td>Status</td>
								<td><?php 
								if ($mobil->status =="0"){
									echo "<span class='badge badge-danger'>Tidak Tersedia</span>";
									}else{
										echo "<span class='badge badge-primary'>Tersedia</span>";
									}
								 ?></td>
								
							</tr>
							<tr>
								<td>AC</td>
								<td><?php 
								if ($mobil->ac =="0"){
									echo "<span class='badge badge-danger'>Tidak Tersedia</span>";
									}else{
										echo "<span class='badge badge-primary'>Tersedia</span>";
									}
								 ?></td>
								
							</tr>
							<tr>
								<td>Supir</td>
								<td><?php 
								if ($mobil->supir =="0"){
									echo "<span class='badge badge-danger'>Tidak Tersedia</span>";
									}else{
										echo "<span class='badge badge-primary'>Tersedia</span>";
									}
								 ?></td>
								
							</tr>
							<tr>
								<td>MP3 Player</td>
								<td><?php 
								if ($mobil->mp3_player =="0"){
									echo "<span class='badge badge-danger'>Tidak Tersedia</span>";
									}else{
										echo "<span class='badge badge-primary'>Tersedia</span>";
									}
								 ?></td>
								
							</tr>
						</table>
						
					</div>
				</div>

		</div>
	</div>
</div>