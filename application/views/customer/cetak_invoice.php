<table  style="width: 60%">
	<h2>Invoice Pembayaran Anda</h2>
	<?php foreach($transaksi as $tr) : ?>
		<tr>
			<td>Nama Customer</td>
			<td>:</td>
			<td><?php echo $tr->nama_lengkap ?></td>
		</tr>
		<tr>
			<td>Merk Mobil</td>
			<td>:</td>
			<td><?php echo $tr->merk ?></td>
		</tr>
		<tr>
			<td>Tanggal Rental</td>
			<td>:</td>
			<td><?php echo $tr->tanggal_rental ?></td>
		</tr>
		<tr>
			<td>Tanggal Kembali</td>
			<td>:</td>
			<td><?php echo $tr->tanggal_kembali ?></td>
		</tr>
		<tr>
			<td>Biaya Sewa/Hari</td>
			<td>:</td>
			<td>Rp. <?php echo number_format($tr->harga,0,',','.') ?></td>
		</tr>
		<tr>
			<?php
			//penghitungan jumlah hari sewa 60 detik 60 menit 24 jam
			$x = strtotime($tr->tanggal_kembali);
			$y =  strtotime($tr->tanggal_rental);
			$jmlHari = abs(($x- $y)/(60*60*24));
			 ?>
			<td>Jumlah Hari Sewa</td>
			<td>:</td>
			<td><?php echo $jmlHari ?> Hari</td>
		</tr>
		<tr>
			<td>Status Pembayaran</td>
			<td>:</td>
			<td><?php 
				if($tr->status_pembayaran == '0'){
				echo "Belum Lunas";
				}else{
				echo "Lunas";
				}  
				?></td>
		</tr>
		
		<tr style="font-weight: bold; color: red">
			<td>Jumlah Pembayaran</td>
			<td>:</td>
			<td>Rp. <?php echo number_format($tr->harga * $jmlHari,0,',','.')  ?>
				</td>
		</tr>
		
		<tr>
			<td>Rekening Pembayaran</td>
			<td>:</td>
			<td>
				
				<ul>
					<?php foreach($rekening as $key) : ?>
					<li><?php echo $key->nama_rekening ?> - <?php echo $key->no_rekening ?></li>
					<?php endforeach; ?>
				</ul>
			
			</td>
		</tr>

	<?php endforeach; ?>
	
</table>
<script type="text/javascript">
	window.print();
</script>