<body class="bg-gradient-info">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">
      <br><br><br>
        <div class="card o-hidden border-0 shadow-lg col-lg-5 my-5 mx-auto">
          <div class="card-body p-1">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Silahkan Login!</h1>
                  </div>
                  <?php echo $this->session->flashdata('pesan') ?>
                  <form method="POST" action="<?php echo base_url('auth_customer/login') ?>" class="user">
                    <div class="form-group">
                      <input type="text" name="username" class="form-control form-control-user" placeholder="Username">
                      <?php echo form_error('username', '<div class="text-small text-danger">', '</div>') ?>
                    </div>
                    <div class="form-group">
                      <input type="password" name="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password">
                      <?php echo form_error('password', '<div class="text-small text-danger">', '</div>') ?>
                    </div>
                    <button class="btn btn-primary btn-user btn-block">Login</button>
                  </form>
                  <div class="text-center">
                    <a class="small" href="<?php echo base_url('register') ?>">Buat Akun Anda Disini!</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>