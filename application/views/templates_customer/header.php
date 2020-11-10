<!doctype html>
<html lang="en">

  <head>
    <title><?php echo $title; ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=DM+Sans:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo base_url() ?>assets/assets_customer/fonts/icomoon/style.css">

    <link rel="stylesheet" href="<?php echo base_url() ?>assets/assets_customer/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/assets_customer/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/assets_customer/css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/assets_customer/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/assets_customer/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/assets_customer/fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/assets_customer/css/aos.css">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/assets_customer/css/style.css">

  </head>

  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

    
    <div class="site-wrap" id="home-section">

      <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
          <div class="site-mobile-menu-close mt-3">
            <span class="icon-close2 js-menu-toggle"></span>
          </div>
        </div>
        <div class="site-mobile-menu-body"></div>
      </div>



      <header class="site-navbar site-navbar-target" role="banner">

        <div class="container">
          <div class="row align-items-center position-relative">

            <div class="col-3 ">
              <div class="site-logo">
                <a href="index.html">CarRent</a>
              </div>
            </div>

            <div class="col-9  text-right">
              

              <span class="d-inline-block d-lg-none"><a href="#" class="text-white site-menu-toggle js-menu-toggle py-5 text-white"><span class="icon-menu h3 text-white"></span></a></span>

              

              <nav class="site-navigation text-right ml-auto d-none d-lg-block" role="navigation">
                <ul class="site-menu main-menu js-clone-nav ml-auto ">
                  <li class="<?php if ($this->uri->segment(1) == 'home'){ echo"active";} ?>"><a href="<?php echo base_url('home') ?>" class="nav-link">Home</a></li>
                  <li><a href="services.html" class="nav-link">Services</a></li>
                  <li class="<?php if ($this->uri->segment(2) == 'mobil'){ echo"active";} ?>"><a href="<?php echo base_url('customer/mobil') ?>" class="nav-link">Mobil</a></li>
                  <li class="<?php if ($this->uri->segment(2) == 'transaksi'){ echo"active";} ?>"><a href="<?php echo base_url('customer/transaksi') ?>" class="nav-link">Transaksi</a></li>
                  <?php if($this->session->userdata('nama_lengkap')){ ?>
                                    <li><a href="<?php echo base_url('auth_customer/logout') ?>">Hai <?php echo $this->session->userdata('nama_lengkap') ?><span> | Logout</span></a></li>
                                <?php }else{ ?>
                  <li><a href="<?php echo base_url('auth_customer/login') ?>">Login</a></li>
                  <?php } ?>
                </ul>
              </nav>
            </div>

            
          </div>
        </div>

      </header>