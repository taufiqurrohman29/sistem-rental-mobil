<div class="container-fluid">
	<div class="alert alert-info" role="alert"><i class="fas fa-car"></i><strong> FORM TAMBAH MOBIL</strong></div>

	<div class="card">
		<div class="card-body">
			<form method="POST" action="<?php echo base_url('admin/mobil/tambah_mobil_aksi') ?>" enctype="multipart/form-data">
				<div class="form-group">
					<label>Nama Type</label>
					<select name="id_type" class="form-control">
						<option value="">--Pilih Type--</option>
						<?php foreach ($type as $key) : ?>
							<option value="<?php echo $key->id_type ?>"><?php echo $key->nama_type ?></option>
						<?php endforeach; ?>
					</select>
					<?php echo form_error('id_type', '<div class="text-small text-danger">', '</div>') ?>
				</div>
				<div class="form-group">
					<label>Merk</label>
					<input type="text" name="merk" class="form-control">
					<?php echo form_error('merk', '<div class="text-small text-danger">', '</div>') ?>
				</div>
				<div class="form-group">
					<label>Warna</label>
					<input type="text" name="warna" class="form-control">
					<?php echo form_error('warna', '<div class="text-small text-danger">', '</div>') ?>
				</div>
				<div class="form-group">
					<label>Tahun</label>
					<input type="number" name="tahun" class="form-control">
					<?php echo form_error('tahun', '<div class="text-small text-danger">', '</div>') ?>
				</div>
				<div class="form-group">
					<label>No Plat</label>
					<input type="text" name="no_plat" class="form-control">
					<?php echo form_error('no_plat', '<div class="text-small text-danger">', '</div>') ?>
				</div>
				<div class="form-group">
					<label>Harga Sewa/Hari</label>
					<input type="number" name="harga" class="form-control">
					<?php echo form_error('harga', '<div class="text-small text-danger">', '</div>') ?>
				</div>
				<div class="form-group">
					<label>Denda/Hari</label>
					<input type="number" name="denda" class="form-control">
					<?php echo form_error('denda', '<div class="text-small text-danger">', '</div>') ?>
				</div>
				<div class="form-group">
					<label>Status</label>
					<select name="status" class="form-control">
						<option value="">--Pilih Status--</option>
						<option value="1">Tersedia</option>
						<option value="0">Tidak Tersedia</option>
					</select>
					<?php echo form_error('status','<div class="text-small text-danger">','</div>') ?>
				</div>
				<div class="form-group">
					<label>AC</label>
					<select name="ac" class="form-control">
						<option value="">--Pilih Ketersedian--</option>
						<option value="1">Tersedia</option>
						<option value="0">Tidak Tersedia</option>
					</select>	
					<?php echo form_error('ac','<div class="text-small text-danger">','</div>') ?>
				</div>
				<div class="form-group">
					<label>Supir</label>
					<select name="supir" class="form-control">
						<option value="">--Pilih Ketersedian--</option>
						<option value="1">Tersedia</option>
						<option value="0">Tidak Tersedia</option>
					</select>
					<?php echo form_error('supir','<div class="text-small text-danger">','</div>') ?>	
				</div>
				<div class="form-group">
					<label>MP3 Player</label>
					<select name="mp3_player" class="form-control">
						<option value="">--Pilih Ketersedian--</option>
						<option value="1">Tersedia</option>
						<option value="0">Tidak Tersedia</option>
					</select>
					<?php echo form_error('mp3_player','<div class="text-small text-danger">','</div>') ?>	
				</div>
				<div class="form-group">
					<label>Gambar</label>
					<input type="file" name="gambar" id="preview_gambar" class="form-control">
				</div>
				<div class="form-group">
					<img width="100" src="<?php echo base_url('assets/upload/no_foto.png') ?>" id="gambar_load">
				</div>
				<p class="text-right mt-4">
					<a href="<?php echo base_url('admin/mobil') ?>" class="btn btn-secondary">Kembali</a>
					<button type="submit" class="btn btn-primary">Simpan</button>
				</p>
			</form>
		</div>
	</div>
</div>