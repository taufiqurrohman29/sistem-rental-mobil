<!-- Begin Page Content -->
<div class="container-fluid">

    <div class="alert alert-info" role="alert">
        <i class="fas fa-fw fa-car"></i><b> KONFIRMASI PEMBAYARAN</b>

    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">

                    <form method="POST" action="<?php echo base_url('admin/transaksi/cek_pembayaran') ?>">
					<?php foreach($pembayaran as $key) : ?>
						<a class="btn btn-sm btn-success" href="<?php echo base_url('admin/transaksi/download_pembayaran/'.$key->id_rental) ?>"><i class="fas fa-download"></i>Download Bukti Pembayaran</a>
						<div class="custom-control custom-switch ml-5">
							<input type="hidden" class="custom-control-input"value="<?php echo $key->id_rental ?>" name="id_rental">
                            <input type="checkbox" class="custom-control-input" id="customSwitch1" value="1" name="status_pembayaran">
                            <label class="custom-control-label" for="customSwitch1">Konfirmasi Pembayaran</label>
						</div>
						<hr>
						<button type="submit" class="btn btn-sm btn-primary">Simpan</button>
					<?php endforeach; ?>
					
				</form>
                </div>
            </div>
        </div>
    </div>
</div>