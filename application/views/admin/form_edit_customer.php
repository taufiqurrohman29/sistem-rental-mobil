<div class="container-fluid">
	<div class="alert alert-info" role="alert"><i class="fas fa-users"></i><strong> FORM TAMBAH CUSTOMER</strong></div>

	<div class="card">
		<div class="card-body">
			<form method="POST" action="<?php echo base_url('admin/customer/update_customer_aksi') ?>">
				<div class="form-group">
					<label>Nama Lengkap</label>
					<input type="hidden" name="id_customer" class="form-control"  value="<?php echo $customer->id_customer ?>" required>
					<input type="text" name="nama_lengkap" class="form-control"  value="<?php echo $customer->nama_lengkap ?>" required>
					<?php echo form_error('nama_lengkap', '<div class="text-small text-danger">', '</div>') ?>
				</div>
				<div class="row">
				<div class="col-sm-6">
				<div class="form-group">
					<label>Username</label>
					<input type="text" name="username" class="form-control" value="<?php echo $customer->username ?>" required>
					<?php echo form_error('username', '<div class="text-small text-danger">', '</div>') ?>
				</div>
				</div>
				<div class="col-sm-6">
				<div class="form-group">
					<label>Password</label>
					<input type="password" name="password" class="form-control" value="<?php echo $customer->password ?>" required>
				</div>
				</div>
				</div>
				<div class="row">
				<div class="col-sm-4">
				<div class="form-group">
					<label>Gender</label>
						<select name="gender" class="form-control">
                            <option value="Laki-laki" <?= ($customer->gender == "Laki-laki") ? 'selected' : '' ?> >Laki-laki</option>
                            <option value="Perempuan" <?= ($customer->gender == "Perempuan") ? 'selected' : '' ?> > Perempuan</option>
						</select>
							<?php echo form_error('gender','<div class="text-small text-danger">','</div>') ?>
						</div>
				</div>
				<div class="col-sm-4">
				<div class="form-group">
					<label>No Telepon</label>
					<input type="number" name="no_telepon" class="form-control" value="<?php echo $customer->no_telepon ?>" required>
					<?php echo form_error('no_telepon', '<div class="text-small text-danger">', '</div>') ?>
				</div>
				</div>
				<div class="col-sm-4">
				<div class="form-group">
					<label>No KTP</label>
					<input type="number" name="no_ktp" class="form-control" value="<?php echo $customer->no_ktp ?>" required>
					<?php echo form_error('no_ktp', '<div class="text-small text-danger">', '</div>') ?>
				</div>
				</div>
				</div>
				<div class="form-group">
					<label>Alamat</label>
					<textarea name="alamat" class="form-control" rows="3"> <?php echo $customer->alamat ?></textarea>
				</div>
				<p class="text-right mt-4">
					<a href="<?php echo base_url('admin/customer') ?>" class="btn btn-secondary">Kembali</a>
					<button type="submit" class="btn btn-primary">Simpan</button>
				</p>
			</form>
		</div>
	</div>
</div>