    <div class="ftco-blocks-cover-1">
      <div class="ftco-cover-1 overlay" style="background-image: url('<?php echo base_url() ?>assets/assets_customer/images/hero_2.jpg')">
        
      </div>
    </div>

    <div class="site-section pt-0 pb-0 bg-light">
      <div class="container">
        <div class="row">
          <div class="col-12">
            
             
            </div>
        </div>
      </div>
    </div>

<div class="site-section bg-light">
<div class="container mt-5 mb-5">
	<div class="row">
		<div class="col-md-8">
			<div class="card">
				<div class="card-header alert alert-primary">Invoice Pembayaran Anda</div>
				<div class="card-body">
					<table class="table">
						<?php foreach($transaksi as $key) : ?>
							<tr>
								<th>Merk Mobil</th>
								<td>:</td>
								<td><?php echo $key->merk ?></td>
							</tr>
							<tr>
								<th>Tanggal Rental</th>
								<td>:</td>
								<td><?php echo date('d/m/Y', strtotime($key->tanggal_rental))  ?></td>
							</tr>
							<tr>
								<th>Tanggal Kembali</th>
								<td>:</td>
								<td><?php echo date('d/m/Y', strtotime($key->tanggal_kembali))  ?></td>
							</tr>
							<tr>
								<th>Biaya Sewa/Hari</th>
								<td>:</td>
								<td>Rp. <?php echo number_format($key->harga,0,',','.') ?></td>
							</tr>
							<tr>
								<?php
								//penghitungan jumlah hari sewa 60 detik 60 menit 24 jam
								$x = strtotime($key->tanggal_kembali);
								$y =  strtotime($key->tanggal_rental);
								$jmlHari = abs(($x- $y)/(60*60*24));
								 ?>
								<th>Jumlah Hari Sewa</th>
								<td>:</td>
								<td><?php echo $jmlHari ?> Hari</td>
							</tr>
							<tr class="text-success">
								<th>Jumlah Pembayaran</th>
								<td>:</td>
								<td><button class="btn btn-sm btn-success">Rp. <?php echo number_format($key->harga * $jmlHari,0,',','.')  ?></button>
									</td>
							</tr>
							<tr>
								<td></td>
								<td></td>
								<td><a href="<?php echo base_url('customer/transaksi/cetak_invoice/'.$key->id_rental) ?>" class="btn btn-sm btn-secondary">Print Invoice</a></td>
							</tr>
						<?php endforeach; ?>
						
					</table>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="card">
			<div class="card-header alert alert-primary">
				Informasi Pembayaran
			</div>



			<div class="card-body">
				
				<p class="text-success mb-2">Silahkan Melakukan Pembayaran Melalui Nomor Rekening di Bawah ini :</p>
				<?php foreach($rekening as $key) : ?>
				<ul class="list-group list-group-flush">
					<li class="list-group-item"><?php echo $key->nama_rekening ?> - <?php echo $key->no_rekening ?></li>

				</ul>

				<?php endforeach; ?>
				<?php 
				if(empty($key->bukti_pembayaran)){
				 ?>
				<button style="width: 100%" type="button" class="btn btn-sm btn-danger mt-3" data-toggle="modal" data-target="#exampleModal">
				  Upload Bukti Pembayaran
				</button>

				<?php }elseif($key->status_pembayaran == '0'){ ?>
					<button style="width: 100%" class="btn btn-sm btn-warning"><i class="fa fa-clock-o"></i> Menunggu Konfirmasi</button>
				<?php }elseif($key->status_pembayaran == '1'){ ?>
				<button style="width: 100%" class="btn btn-sm btn-success"><i class="fa fa-check"></i> Pembayaran Selesai</button>
				<?php } ?>
			
				
			</div>
			</div>
		</div>	
	</div>	
</div>
<!-- Modal Untuk upload bukti pembayaran -->

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Upload Bukti Pembayaran Anda</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="POST" action="<?php echo base_url('customer/transaksi/pembayaran_aksi') ?>" enctype="multipart/form-data">
      <div class="modal-body">
        <div class="form-group">
        	<label>Upload Bukti Pembayaran</label>
        	<input type="hidden" name="id_rental" class="form-control" value="<?php echo $key->id_rental ?>">
        	<input type="file" name="bukti_pembayaran" class="form-control">
        </div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-sm btn-success">Kirim</button>
      </div>
      </form>
    </div>
  </div>
</div>
</div>