    <div class="ftco-blocks-cover-1">
      <div class="ftco-cover-1 overlay" style="background-image: url('<?php echo base_url() ?>assets/assets_customer/images/hero_2.jpg')">
        
      </div>
    </div>

    <div class="site-section pt-0 pb-0 bg-light">
      <div class="container">
        <div class="row">
          <div class="col-12">
            
             
            </div>
        </div>
      </div>
    </div>

<div class="site-section bg-light">
      <div class="container">
        <?php echo $this->session->flashdata('pesan') ?>
        <div class="row">

          <div class="card-body">

      <form method="POST" action="<?php echo base_url('customer/rental/tambah_rental_aksi') ?>">

        <div class="form-group">
          <label>Harga Sewa/Hari</label>
          <input type="hidden" name="id_mobil" value="<?php echo $mobil->id_mobil ?>">
          <input type="text" name="harga" class="form-control" value="<?php echo $mobil->harga ?>"readonly>
        </div>
        <div class="form-group">
          <label>Denda/Hari</label>
          <input type="text" name="denda" class="form-control" value="<?php echo $mobil->denda ?>"readonly>
        </div>

        <div class="form-group">
          <label>Tanggal Rental</label>
          <input type="date" name="tanggal_rental" class="form-control" required="">
        </div>
        <div class="form-group">
          <label>Tanggal Kembali</label>
          <input type="date" name="tanggal_kembali" class="form-control" required="">
        </div>

        <button type="submit" class="btn btn-warning">Rental</button>
        
      </form>
  </div>
          


        </div>
      </div>
    </div>