<body class="bg-gradient-info">

  <div class="container">

    <div class="card o-hidden border-0 shadow-lg col-lg-6 my-5 mx-auto">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Silahkan Registrasi!</h1>
              </div>
              <form class="user" method="POST" action="<?php echo base_url('register') ?>">
                <div class="form-group">
                  <input type="text" name="nama_lengkap" class="form-control" placeholder="Nama Lengkap" required="">
                </div>
                <div class="form-group">
                  <input type="text" name="username" class="form-control" id="exampleInputEmail" placeholder="Username" required="">
                </div>
                <div class="form-group">
                  <input type="text" name="alamat" name="nama_lengkap" class="form-control" placeholder="Alamat" required="">
                </div>
                <div class="form-group">
                  <select class="form-control" name="gender">
                    <option value="">Pilih Gender</option>
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                  </select>
                </div>
                <div class="form-group">
                  <input type="text" name="no_telepon" class="form-control" placeholder="No Telepon" required="">
                </div>
                <div class="form-group">
                  <input type="text" name="no_ktp" class="form-control" placeholder="No KTP" required="">
                </div>
                <div class="form-group">
                  <input type="password" name="password" class="form-control" placeholder="Password" required="">
                </div>
                <button type="submit" class="btn btn-primary btn-block">
                  Register Akun
                </button>
              </form>
              <hr>
              <div class="text-center">
                <a class="small" href="forgot-password.html">Lupa Password?</a>
              </div>
              <div class="text-center">
                <a class="small" href="<?php echo base_url('auth_customer') ?>">Sudah Punya Akun ? Login!</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>