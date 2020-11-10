<!-- Begin Page Content -->
<div class="container-fluid">

    <div class="alert alert-info" role="alert">
        <i class="fas fa-fw fa-car"></i><b> TRANSAKSI SELESAI</b>

    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
        <?php foreach($transaksi as $key) : ?>
        <form method="POST" action="<?php echo base_url('admin/transaksi/transaksi_selesai_aksi') ?>">
        <input type="hidden" name="id_rental" value="<?php echo $key->id_rental ?>">
        <input type="hidden" name="tanggal_kembali" value="<?php echo $key->tanggal_kembali ?>">
        <input type="hidden" name="denda" value="<?php echo $key->denda ?>">

        <div class="form-group">
            <label>Tanggal Pengembalian</label>
            <input type="date" name="tanggal_pengembalian" class="form-control" value="<?php echo $key->tanggal_pengembalian ?>">
        </div>
        <div class="form-group">
            <label>Status Pengembalian</label>
            <select name="status_pengembalian" class="form-control">
                <option value="<?php echo $key->status_pengembalian ?>"><?php echo $key->status_pengembalian ?></option>
                <option value="Kembali">Kembali</option>
                <option value="Belum Kembali">Belum Kembali</option>
            </select>
        </div>
        <div class="form-group">
            <label>Status Rental</label>
            <select name="status_rental" class="form-control">
                <option value="<?php echo $key->status_pengembalian ?>"><?php echo $key->status_rental ?></option>
                <option value="Selesai">Selesai</option>
                <option value="Belum Selesai">Belum Selesai</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
        
    </form>
    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</div>