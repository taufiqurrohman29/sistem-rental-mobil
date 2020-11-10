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
      <div class="container">
	<div class="card mx-auto">
		<div class="card-header">Data Transaksi Anda</div>
		<span class="mt-2 p-2"><?php echo $this->session->flashdata('pesan') ?></span>
		<div class="card-body">
			<table class="table table-bordered table-striped">
				<tr>
					<th>No</th>
					<th>Nama Customer</th>
					<th>Merk Mobil</th>
					<th>No Plat</th>
					<th>Harga Sewa</th>
					<th>Aksi</th>
					<th>Batal</th>
				</tr>
				<?php 
						$no=1;
						foreach($transaksi as $tr) : ?>
							<tr>
								<td><?php echo $no++ ?></td>
								<td><?php echo $tr->nama_lengkap ?></td>
								<td><?php echo $tr->merk ?></td>
								<td><?php echo $tr->no_plat ?></td>
								<td><?php echo number_format($tr->harga,0,',','.')  ?></td>
								<td>
									<?php if($tr->status_rental == "Selesai") { ?>
										<span class='badge badge-danger'>Rental Selesai</span>
									<?php } else{ ?>
										<a href="<?php echo base_url('customer/transaksi/pembayaran/'.$tr->id_rental) ?>" class="btn btn-sm btn-success">Cek Pembayaran</a>
									<?php } ?>
								</td>
								<td>
									<?php if($tr->status_rental == "Belum Selesai") { ?>
										<a onclick="return confirm('Yakin Batal?')" href="<?php echo base_url('customer/transaksi/transaksi_batal/'.$tr->id_rental) ?>" class="btn btn-sm btn-danger">Batal</a>
									<?php } else{ ?>
										<span class='badge badge-danger'>Selesai</span>
									<?php } ?>
								</td>
							</tr>
						<?php endforeach; ?>
				
			</table>
			
		</div>
		
	</div>
</div>
    </div>