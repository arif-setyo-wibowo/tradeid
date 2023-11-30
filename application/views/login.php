<?php $this->load->view($header); ?>
<section class="wrapper bg-gradient-primary">
      <div class="container pt-10 pb-19 pt-md-14 pb-md-20 text-center">
        <div class="row">
          <div class="col-md-7 col-lg-6 col-xl-5 mx-auto">
            <h3 class="display-1 mb-3">Sign in to TradeID</h3>
            <p class="lead px-lg-5 px-xxl-8">Find connection and trade</p>
          </div>
          <!-- /column -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /section -->
    <section class="wrapper bg-light">
      <div class="container pb-14 pb-md-16">
        <div class="row">
          <div class="col mt-n19">
            <div class="card shadow-lg">
              <div class="row gx-0 text-center">
                <div class="col-lg-2 image-wrapper bg-image bg-cover rounded-top rounded-lg-start d-none d-md-block" data-image-src="./assets/img/photos/tm3.jpg">
                </div>
                <!--/column -->
                <div class="col-lg-8">
                  <div class="p-10 p-md-11 p-lg-13">
                  <h2 class="mb-3 text-start">Welcome Back</h2>
                <p class="lead mb-6 text-start">Fill your email and password to sign in.</p>
                  <?php if ($error != ''):?>
                      <div class="alert alert-danger" role="alert">
                          <?php echo $error ?>
                      </div>
                  <?php endif;?>
                <form class="text-start mb-3" method="POST" action="<?= base_url('login') ?>">
                  <div class="form-floating mb-4">
                    <input type="text" class="form-control" placeholder="Email" name="username_or_email" id="loginEmail">
                    <label for="loginEmail">Username or Email</label>
                  </div>
                  <div class="form-floating password-field mb-4">
                    <input type="password" class="form-control" placeholder="Password" name="password" id="loginPassword">
                    <span class="password-toggle"><i class="uil uil-eye"></i></span>
                    <label for="loginPassword">Password</label>
                  </div>
                  <button  class="btn btn-primary rounded-pill btn-login w-100 mb-2">Sign In</button>
                </form>
                <!-- /form -->
                <p class="mb-1"><a href="#" class="hover">Forgot Password?</a></p>
                <p class="mb-0">Don't have an account? <a href="<?= base_url('register')?>" class="hover">Sign up</a></p>
                <div class="divider-icon my-4">or</div>
                <nav class="nav social justify-content-center text-center">
                  <a href="#" class="btn btn-circle btn-sm btn-google"><i class="uil uil-google"></i></a>
                  <a href="#" class="btn btn-circle btn-sm btn-facebook-f"><i class="uil uil-facebook-f"></i></a>
                  <a href="#" class="btn btn-circle btn-sm btn-twitter"><i class="uil uil-twitter"></i></a>
                </nav>
                  </div>
                  <!--/div -->
                </div>
                <!--/column -->
              </div>
              <!--/.row -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /column -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /section -->
  </div>
  <?php $this->load->view($footer); ?>