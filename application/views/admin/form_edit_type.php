<div class="container-fluid">
	<div class="alert alert-info" role="alert"><i class="fas fa-table"></i><strong> FORM EDIT TYPE</strong></div>

	<div class="card">
		<div class="card-body">
			<form method="POST" action="<?php echo base_url('admin/type/update_type_aksi') ?>">
				<?php foreach ($type as $key) : ?>
				<div class="form-group">
					<label>Kode Type</label>
					<input type="hidden" name="id_type" value="<?php echo $key->id_type ?>">
					<input type="text" name="kode_type" class="form-control" value="<?php echo $key->kode_type ?>" required>
					<?php echo form_error('kode_type', '<div class="text-small text-danger">', '</div>') ?>
				</div>
				<div class="form-group">
					<label>Nama Type</label>
					<input type="text" name="nama_type" class="form-control" value="<?php echo $key->nama_type ?>" required>
					<?php echo form_error('nama_type', '<div class="text-small text-danger">', '</div>') ?>
				</div>
				<p class="text-right mt-4">
					<a href="<?php echo base_url('admin/type') ?>" class="btn btn-secondary">Kembali</a>
					<button type="submit" class="btn btn-primary">Simpan</button>
				</p>
			<?php endforeach; ?>
			</form>
		</div>
	</div>
</div>