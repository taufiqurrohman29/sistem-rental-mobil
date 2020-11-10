<div class="container-fluid">
	<div class="alert alert-info" role="alert"><i class="fas fa-users"></i><strong> FORM TAMBAH CUSTOMER</strong></div>

	<div class="card">
		<div class="card-body">
			<form method="POST" action="<?php echo base_url('admin/customer/tambah_customer_aksi') ?>">
				<div class="form-group">
					<label>Nama Lengkap</label>
					<input type="text" name="nama_lengkap" class="form-control">
					<?php echo form_error('nama_lengkap', '<div class="text-small text-danger">', '</div>') ?>
				</div>
				<div class="row">
				<div class="col-sm-6">
				<div class="form-group">
					<label>Username</label>
					<input type="text" name="username" class="form-control">
					<?php echo form_error('username', '<div class="text-small text-danger">', '</div>') ?>
				</div>
				</div>
				<div class="col-sm-6">
				<div class="form-group">
					<label>Password</label>
					<input type="password" name="password" class="form-control">
					<?php echo form_error('password', '<div class="text-small text-danger">', '</div>') ?>
				</div>
				</div>
				</div>
				<div class="row">
				<div class="col-sm-4">
				<div class="form-group">
					<label>Gender</label>
					<select name="gender" class="form-control">
						<option value="">--Pilih Gender--</option>
						<option value="Laki-laki">Laki-laki</option>
						<option value="Perempuan">Perempuan</option>
					</select>
					<?php echo form_error('gender', '<div class="text-small text-danger">', '</div>') ?>
				</div>
				</div>
				<div class="col-sm-4">
				<div class="form-group">
					<label>No Telepon</label>
					<input type="number" name="no_telepon" class="form-control">
					<?php echo form_error('no_telepon', '<div class="text-small text-danger">', '</div>') ?>
				</div>
				</div>
				<div class="col-sm-4">
				<div class="form-group">
					<label>No KTP</label>
					<input type="number" name="no_ktp" class="form-control">
					<?php echo form_error('no_ktp', '<div class="text-small text-danger">', '</div>') ?>
				</div>
				</div>
				</div>
				<div class="form-group">
					<label>Alamat</label>
					<textarea name="alamat" class="form-control" rows="3"></textarea>
				</div>
				<p class="text-right mt-4">
					<a href="<?php echo base_url('admin/customer') ?>" class="btn btn-secondary">Kembali</a>
					<button type="submit" class="btn btn-primary">Simpan</button>
				</p>
			</form>
		</div>
	</div>
</div>