<!-- Begin Page Content -->
<div class="container-fluid">

    <div class="alert alert-info" role="alert">
        <i class="fas fa-fw fa-car"></i><b> DATA MOBIL</b>

    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">

                    <div class="row">
                        <div class="col-sm-12">
                            <p class="text-left">
                                <a class="btn btn-sm btn-primary" href="<?php echo base_url('admin/mobil/tambah_mobil') ?>">
                                    <span class="icon">
                                        <i class="fa fa-plus"></i>
                                    </span>

                                    Tambah Mobil</a>
                            </p>
                        </div>
                    </div>
                    <?php echo $this->session->flashdata('pesan') ?>

                    <div class="table-responsive">
                        <table class="table table-striped table-bordered first" id="table_id">
                            <thead>
                                <tr>
                                    <th class="text-gray-900" width="10px">No</th>
                                    <th class="text-gray-900" width="200px">Nama Mobil</th>
                                    <th class="text-gray-900" width="200px">Type</th>
                                    <th class="text-gray-900" width="200px">Status</th>
                                    <th class="text-gray-900">Gambar</th>
                                    <th class="text-gray-900" width="100px">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($mobil as $key) :
                                ?>
                                    <tr>
                                        <td class="text-gray-800 small"><?= $no++; ?></td>
                                        <td class="text-gray-800 small"><?php echo $key->merk ?></td>
                                        <td class="text-gray-800 small"><?php echo $key->nama_type ?></td>
                                        <td class="text-gray-800 small"><?php if   ($key->status == 0){
                                            echo "<span class='badge badge-danger'> Tidak Tersedia </span>";
                                        }
                                         else {
                                            echo "<span class='badge badge-info'> Tersedia </span>";
                                        }
                                         ?>
                                             

                                         </td>
                                        
                                        <td class="text-gray-800 small"><img src="<?php echo base_url('assets/upload/' . $key->gambar) ?>" width="50"></td>

                                        <td>

                                            <a href="<?php echo base_url('admin/mobil/update_mobil/' . $key->id_mobil) ?>" class="btn btn-warning btn-sm">
                                                <i class="fa fa-pencil-alt"></i>
                                            </a>
                                            <a href="<?php echo base_url('admin/mobil/detail_mobil/' . $key->id_mobil) ?>" class="btn btn-info btn-sm">
                                                <i class="fa fa-eye"></i>
                                            </a>
                                            <a onclick="return confirm('Yakin Hapus?') "href="<?php echo base_url('admin/mobil/delete_mobil/' . $key->id_mobil) ?>" class="btn btn-danger btn-sm">
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