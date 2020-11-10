<div class="container-fluid">
	<div class="alert alert-info" role="alert"><i class="fas fa-table"></i><strong> FORM EDIT REKENING</strong></div>

	<div class="card">
		<div class="card-body">
			<form method="POST" action="<?php echo base_url('admin/rekening/update_rekening_aksi') ?>">
				<?php foreach ($rekening as $key) : ?>
				<div class="form-group">
					<label>Nama Rekening</label>
					<input type="hidden" name="id_rekening" value="<?php echo $key->id_rekening ?>">
					<input type="text" name="nama_rekening" class="form-control" value="<?php echo $key->nama_rekening ?>" required>
					<?php echo form_error('nama_rekening', '<div class="text-small text-danger">', '</div>') ?>
				</div>
				<div class="form-group">
					<label>No Rekening</label>
					<input type="text" name="no_rekening" class="form-control" value="<?php echo $key->no_rekening ?>" required>
					<?php echo form_error('no_rekening', '<div class="text-small text-danger">', '</div>') ?>
				</div>
				<p class="text-right mt-4">
					<a href="<?php echo base_url('admin/rekening') ?>" class="btn btn-secondary">Kembali</a>
					<button type="submit" class="btn btn-primary">Simpan</button>
				</p>
			<?php endforeach; ?>
			</form>
		</div>
	</div>
</div>