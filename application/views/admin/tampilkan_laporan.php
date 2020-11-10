<!-- Begin Page Content -->
<div class="container-fluid">

    <div class="alert alert-info" role="alert">
        <i class="fas fa-fw fa-file"></i><b> LAPORAN</b>

    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">

                    <form method="POST" action="<?php echo base_url('admin/laporan') ?>">
                        <div class="form-group">
                            <label>Dari Tanggal</label>
                            <input type="date" name="dari" class="form-control">
                            <?php echo form_error('dari', '<div class="text-small text-danger">', '</div>') ?>

                        </div>
                        <div class="form-group">
                            <label>Sampai Tanggal</label>
                            <input type="date" name="sampai" class="form-control">
                            <?php echo form_error('sampai', '<div class="text-small text-danger">', '</div>') ?>
                            
                        </div>
                        <button type="submit" class="btn btn-sm btn-primary"><i class="fas fa-eye"></i> Tampilkan Data</button>
                    </form>

                    <div class="btn-group">
                        <a class="btn btn-sm btn-success mt-2" href="<?php echo base_url('admin/laporan/print_laporan/?dari='.set_value('dari').'&sampai='.set_value('sampai')) ?>"><i class="fas fa-print"></i>Print</a>
                    </div>

                    <div class="table-responsive mt-3">
                        <table class="table table-striped table-bordered first" id="table_id">
                            <thead>
                                <tr>
                                <th class="text-gray-900" width="10px">No</th>
                                <th class="text-gray-900">Nama Customer</th>
                                <th class="text-gray-900">Mobil</th>
                                <th class="text-gray-900">Tgl. Rental</th>
                                <th class="text-gray-900">Tgl. Kembali</th>
                                <th class="text-gray-900">Harga/Hari</th>
                                <th class="text-gray-900">Denda/Hari</th>
                                <th class="text-gray-900">Total Denda</th>
                                <th class="text-gray-900">Tgl. Dikembalikan</th>
                                <th class="text-gray-900">Status Pengembalian</th>
                                <th class="text-gray-900">Status Rental</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($laporan as $key) :
                                ?>
                                    <tr>
                                        <td class="text-gray-800 small"><?= $no++; ?></td>
                                        <td class="text-gray-800 small"><?php echo $key->nama_lengkap ?></td>
                                        <td class="text-gray-800 small"><?php echo $key->merk ?></td>
                                        <td class="text-gray-800 small"><?php echo date('d/m/Y', strtotime($key->tanggal_rental))  ?>
                                             

                                         </td>
                                        
                                        <td class="text-gray-800 small"><?php echo date('d/m/Y', strtotime($key->tanggal_kembali))  ?></td>
                                        <td class="text-gray-800 small"><?php echo number_format($key->harga,0,',','.')  ?></td>
                                        <td class="text-gray-800 small"><?php echo number_format($key->denda,0,',','.')  ?></td>
                                        <td class="text-gray-800 small"><?php 
                                            if($key->total_denda == ""){
                                                echo "-";
                                            } else {
                                                echo number_format($key->total_denda,0,',','.');
                                            }
                                             ?></td></td>
                                        <td class="text-gray-800 small"><?php 
                                            if($key->tanggal_pengembalian == "0000-00-00"){
                                                echo "-";
                                            } else {
                                                echo date('d/m/Y', strtotime($key->tanggal_pengembalian));
                                            }
                                             ?></td>
                                        <td class="text-gray-800 small"><?php echo $key->status_pengembalian ?></td>
                                        <td class="text-gray-800 small"><?php echo $key->status_rental ?></td>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>               
                </div>
            </div>
        </div>
    </div>
</div>