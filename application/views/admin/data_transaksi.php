<!-- Begin Page Content -->
<div class="container-fluid">

    <div class="alert alert-info" role="alert">
        <i class="fas fa-fw fa-car"></i><b> DATA TRANSAKSI</b>

    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">

                    <?php echo $this->session->flashdata('pesan') ?>

                    <div class="table-responsive">
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
                                <th class="text-gray-900">Cek Pembayaran</th>
                                <th class="text-gray-900" width="100px">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($transaksi as $key) :
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
                                        <td class="text-gray-800 small"><center>
                                        <?php
                                        if (empty($key->bukti_pembayaran))
                                          { ?>
                                            <button class="btn btn-sm btn-danger"><i class="fas fa-times-circle"></i></button>
                                          <?php }else{ ?>

                                            <a class="btn btn-sm btn-primary" href="<?php echo base_url('admin/transaksi/pembayaran/'.$key->id_rental) ?>"> <i class="fas fa-check-circle"></i></a>
                                          <?php } ?>
                                    </center></td>
                                        <td class="text-gray-800 small
                                        "><?php 
                                            if($key->status == "1"){ ?>
                                                <div class="row">
                                                    <a onclick="return confirm('Yakin Batal?')" class="btn btn-sm btn-danger" href="<?php echo base_url('admin/transaksi/transaksi_batal/'.$key->id_rental) ?>"><i class="fas fa-times"></i></a>
                                                    
                                                </div>

                                           <?php }else{ ?>
                                                <div class="row">
                                                    <a class="btn btn-sm btn-success mr-2" href="<?php echo base_url('admin/transaksi/transaksi_selesai/'.$key->id_rental) ?>"><i class="fas fa-check"></i></a>
                                                    <a class="btn btn-sm btn-danger" href="<?php echo base_url('admin/transaksi/transaksi_batal/'.$key->id_rental) ?>"><i class="fas fa-times"></i></a>
                                                    
                                                </div>
                                            <?php } ?></td>

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