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
          <?php foreach($mobil as $key): ?>
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="item-1">
                <a href="#"><img src="<?php echo base_url('assets/upload/'.$key->gambar) ?>" alt="Image" class="img-fluid"></a>
                <div class="item-1-contents">
                  <div class="text-center">
                  <h3><b><?php echo $key->merk ?></b></h3>
                  <div class="rent-price"><span>Rp. <?php echo number_format($key->harga,0,',','.')  ?>/</span>hari</div>
                  </div>
                  <ul class="specs">
                    <li>
                      <span>AC</span>
                      <span class="spec"><?php 
                                            if($key->ac == "1"){
                                                echo"<span class='badge badge-info'>Ya</span>";
                                            }else {
                                                echo"<span class='badge badge-warning'>Tidak</span>";
                                            }
                                            ?></span>
                    </li>
                    <li>
                      <span>Supir</span>
                      <span class="spec"><?php 
                                            if($key->supir == "1"){
                                                echo"<span class='badge badge-info'>Ya</span>";
                                            }else {
                                                echo"<span class='badge badge-warning'>Tidak</span>";
                                            }
                                            ?></span>
                    </li>
                    <li>
                      <span>MP3 Player</span>
                      <span class="spec"><?php 
                                            if($key->mp3_player == "1"){
                                                echo"<span class='badge badge-info'>Ya</span>";
                                            }else {
                                                echo"<span class='badge badge-warning'>Tidak</span>";
                                            }
                                            ?></span>
                    </li>
                  </ul>
                  <div class="d-flex action">
                    <?php 
                      if($key->status == "1"){
                         echo anchor('customer/rental/tambah_rental/'.$key->id_mobil,'<span class="btn btn-primary mr-2">Rental</span>');
                      }else{
                         echo "<span class='btn btn-secondary mr-2'>Booked</span>";
                      }
                    ?>
                    <a href="<?php echo base_url('customer/mobil/detail_mobil/'.$key->id_mobil) ?>" class="btn btn-info">Detail</a>
                  </div>
                </div>
              </div>
          </div>

          <?php endforeach; ?>


          <div class="col-12">
            <span class="p-3">1</span>
            <a href="#" class="p-3">2</a>
            <a href="#" class="p-3">3</a>
            <a href="#" class="p-3">4</a>
          </div>
        </div>
      </div>
    </div>