<!-- Begin Page Content -->
<div class="container-fluid">

    <div class="alert alert-info" role="alert">
        <i class="fas fa-fw fa-users"></i><b> DATA CUSTOMER</b>

    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <p class="text-left">
                                <a class="btn btn-sm btn-primary" href="<?php echo base_url('admin/customer/tambah_customer') ?>">
                                    <span class="icon">
                                        <i class="fa fa-plus"></i>
                                    </span>

                                    Tambah Customer</a>
                            </p>
                        </div>
                    </div>

                    <?php echo $this->session->flashdata('pesan') ?>

                    <div class="table-responsive">
                        <table class="table table-striped table-bordered first" id="table_id">
                            <thead>
                                <tr>
                                    <th class="text-gray-900" width="10px">No</th>
                                    <th class="text-gray-900" width="100px">Nama</th>
                                    <th class="text-gray-900" width="80px">Username</th>
                                    <th class="text-gray-900" width="200px">Alamat</th>
                                    <th class="text-gray-900" width="80px">Gender</th>
                                    <th class="text-gray-900" width="100px">No Telepon</th>
                                    <th class="text-gray-900" width="50px">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($customer as $key) :
                                ?>
                                    <tr>
                                        <td class="text-gray-800 small"><?= $no++; ?></td>
                                        <td class="text-gray-800 small"><?php echo $key->nama_lengkap ?></td>
                                        <td class="text-gray-800 small"><?php echo $key->username ?></td>
                                        <td class="text-gray-800 small"><?php echo $key->alamat ?></td>
                                        <td class="text-gray-800 small"><?php echo $key->gender ?></td>
                                        <td class="text-gray-800 small"><?php echo $key->no_telepon ?></td>

                                        <td>

                                            <a href="<?php echo base_url('admin/customer/update_customer/' . $key->id_customer) ?>" class="btn btn-warning btn-sm mr-1">
                                                <i class="fa fa-pencil-alt"></i>
                                            </a>
                                            <a onclick="return confirm('Yakin Hapus?')" href="<?php echo base_url('admin/customer/delete_customer/' . $key->id_customer) ?>" class="btn btn-danger btn-sm">
                                                <i class="far fa-trash-alt" onclick="return confirm('Yakin Ingin Menghapus?')"></i>
                                            </a>

                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>