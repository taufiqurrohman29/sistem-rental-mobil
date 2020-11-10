<h3 style="text-align: center">Laporan Transaksi Rental Mobil</h3>
<table>
	<tr>
		<td>Dari Tanggal</td>
		<td>:</td>
		<td><?php echo date('d-M-Y', strtotime($_GET['dari'])); ?></td>
	</tr>
	<tr>
		<td>Sampai Tanggal</td>
		<td>:</td>
		<td><?php echo date('d-M-Y', strtotime($_GET['sampai'])); ?></td>
	</tr>
</table>
                        <table class="table table-striped table-bordered mt-4" id="table_id">
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

                        <script type="text/javascript">
                        	window.print()
                        </script>