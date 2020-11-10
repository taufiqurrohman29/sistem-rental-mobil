<!-- Begin Page Content -->
<div class="container-fluid">

    <div class="alert alert-info" role="alert">
        <i class="fas fa-fw fa-file"></i><b> DATA REKENING</b>

    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">

                    <div class="row">
                        <div class="col-sm-12">
                            <p class="text-left">
                                <a class="btn btn-sm btn-primary" href="<?php echo base_url('admin/rekening/tambah_rekening') ?>">
                                    <span class="icon">
                                        <i class="fa fa-plus"></i>
                                    </span>

                                    Tambah Rekening</a>
                            </p>
                        </div>
                    </div>
                    <?php echo $this->session->flashdata('pesan') ?>

                    <div class="table-responsive">
                        <table class="table table-striped table-bordered first" id="table_id">
                            <thead>
                                <tr>
                                    <th class="text-gray-900" width="10px">No</th>
                                    <th class="text-gray-900">Nama Rekening</th>
                                    <th class="text-gray-900">No Rekening</th>
                                    <th class="text-gray-900" width="80px">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($rekening as $key) :
                                ?>
                                    <tr>
                                        <td class="text-gray-800 small"><?= $no++; ?></td>
                                        <td class="text-gray-800 small"><?php echo $key->nama_rekening ?></td>
                                        <td class="text-gray-800 small"><?php echo $key->no_rekening ?></td>

                                        <td>

                                            <a href="<?php echo base_url('admin/rekening/update_rekening/' . $key->id_rekening) ?>" class="btn btn-warning btn-sm">
                                                <i class="fa fa-pencil-alt"></i>
                                            </a>
                                            <a onclick="return confirm('Yakin Hapus?')" href="<?php echo base_url('admin/rekening/delete_rekening/' . $key->id_rekening) ?>" class="btn btn-danger btn-sm">
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