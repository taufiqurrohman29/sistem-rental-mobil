<div class="container-fluid">
	<div class="alert alert-info" role="alert"><i class="fas fa-table"></i><strong> FORM TAMBAH REKENING</strong></div>

	<div class="card">
		<div class="card-body">
			<form method="POST" action="<?php echo base_url('admin/rekening/tambah_rekening_aksi') ?>">
				<div class="form-group">
					<label>Nama Rekening</label>
					<input type="text" name="nama_rekening" class="form-control">
					<?php echo form_error('nama_rekening', '<div class="text-small text-danger">', '</div>') ?>
				</div>
				<div class="form-group">
					<label>No Rekening</label>
					<input type="text" name="no_rekening" class="form-control">
					<?php echo form_error('no_rekening', '<div class="text-small text-danger">', '</div>') ?>
				</div>
				<p class="text-right mt-4">
					<a href="<?php echo base_url('admin/rekening') ?>" class="btn btn-secondary">Kembali</a>
					<button type="submit" class="btn btn-primary">Simpan</button>
				</p>
			</form>
		</div>
	</div>
</div>