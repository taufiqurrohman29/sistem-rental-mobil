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

          <div class="col-md-6">
            <table class="table">
              <center>
            <img width="450px" src="<?php echo base_url('assets/upload/'. $mobil->gambar) ?>">
            </center>
            </table>   
          </div>


          <div class="col-md-6">
              <table class="table">
              <tr>
                <th>Type Mobil</th>
                <td><?php
                if ($mobil->nama_type == "Kijang"){
                  echo "Kijang";
                }elseif($mobil->nama_type == "Mini Bus"){
                  echo "Mini Bus";
                }else{
                  echo "<span class='text-danger'>Type Mobil Belum Tersedia</span>";
                }  
                ?></td>
              </tr>
              <tr>
                <th>Merk</th>
                <td><?php echo $mobil->merk ?></td>
              </tr>
              <tr>
                <th>No Plat</th>
                <td><?php echo $mobil->no_plat ?></td>
              </tr>
              <tr>
                <th>Tahun</th>
                <td><?php echo $mobil->tahun ?></td>
              </tr>
              <tr>
                <th>Warna</th>
                <td><?php echo $mobil->warna ?></td>
              </tr>
              <tr>
                <th>Harga Sewa/hari</th>
                <td>Rp.<?php echo number_format($mobil->harga,0,',','.')  ?></td>
              </tr>
              <tr>
                <th>Denda</th>
                <td>Rp.<?php echo number_format($mobil->denda,0,',','.')  ?></td>
              </tr>
              <tr>
                <th>AC</th>
                <td><?php 
                if ($mobil->ac =="0"){
                  echo "<span class='badge badge-danger'>Tidak Tersedia</span>";
                  }else{
                    echo "<span class='badge badge-primary'>Tersedia</span>";
                  }
                 ?></td>
                
              </tr>
              <tr>
                <th>Supir</th>
                <td><?php 
                if ($mobil->supir =="0"){
                  echo "<span class='badge badge-danger'>Tidak Tersedia</span>";
                  }else{
                    echo "<span class='badge badge-primary'>Tersedia</span>";
                  }
                 ?></td>
                
              </tr>
              <tr>
                <th>MP3 Player</th>
                <td><?php 
                if ($mobil->mp3_player =="0"){
                  echo "<span class='badge badge-danger'>Tidak Tersedia</span>";
                  }else{
                    echo "<span class='badge badge-primary'>Tersedia</span>";
                  }
                 ?></td>
                
              </tr>
              <td>
                <td><?php  

                          if ($mobil->status == "0"){
                            echo "<span class='btn btn-sm btn-danger' disable>Telah di rental</span>";
                          }else{
                            echo anchor('customer/rental/tambah_rental'.$mobil->id_mobil, '<button class="btn btn-sm btn-primary">Rental</button>');
                          }
                      ?>  <a class="btn btn-sm btn-secondary" href="<?php echo base_url('customer/mobil') ?>">Back</a></td>
              </td>
              </table>
            
          </div>
          


        </div>
      </div>
    </div>