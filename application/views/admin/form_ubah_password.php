<div class="container-fluid">
    <div class="alert alert-info" role="alert"><i class="fas fa-table"></i><strong> FORM TAMBAH REKENING</strong></div>

    <div class="card">
        <div class="card-body">
            <?= $this->session->flashdata('message'); ?>
            <form action="<?php echo base_url('admin/setting') ?>" method="post">
                <div class="form-group">
                    <label for="current_password">Passsword Lama</label>
                    <input type="password" class="form-control" id="password_lama" name="password_lama">
                    <?= form_error('password_lama', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label for="new_password1">Password Baru</label>
                    <input type="password" class="form-control" id="password_baru" name="password_baru">
                    <?= form_error('password_baru', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label for="new_password2">Ulangi Password Baru</label>
                    <input type="password" class="form-control" id="password_baru1" name="password_baru1">
                    <?= form_error('password_baru1', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Change Password</button>
                </div>
            </form>
        </div>
    </div>
</div>