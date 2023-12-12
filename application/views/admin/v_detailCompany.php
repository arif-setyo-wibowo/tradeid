<?php $this->load->view($header)?>
<!-- Main Container -->
<main id="main-container">
            <!-- Page Content -->
            <div class="content ">
              <div class="text-end">
              <a class="nav-main-link" href="<?= base_url('admin/perusahaan')?>">
                  <span class="nav-main-link-name"><i class="nav-main-link-icon si si-action-undo"></i>Go Back</span>
              </a>
              </div>
            </div>
            <!-- END Page Content -->
        <!-- Page Content -->
        <div class="content">
        <?php $no=1; foreach ($company as $data) :?>
          <!-- User Info -->
          <div class="block block-rounded">
            <div class="block-content text-center">
              <div class="py-4">
                <div class="mb-3">
                  <img class="img-avatar" src="<?php echo base_url() ?>uploads/<?php echo $data->gambar ?>" alt="">
                </div>
                <h1 class="fs-lg mb-0">
                  <span><?= $data->namaPerusahaan?></span>
                </h1>
                <p class="fs-sm fw-medium text-muted">UI Designer</p>
              </div> 
            </div>
            <div class="block-content bg-body-light text-center">
              <div class="row items-push text-uppercase">
                <div class="col-6 ">
                  <div class="fw-semibold text-dark mb-1">Products</div>
                  <a class="link-fx fs-3 text-primary" href="javascript:void(0)">5</a>
                </div>
                <div class="col-6 ">
                  <div class="fw-semibold text-dark mb-1">Inquired Buyer</div>
                  <a class="link-fx fs-3 text-primary" href="javascript:void(0)">23</a>
                </div>
              </div>
            </div>
          </div>
          <!-- END User Info -->

          <!-- Addresses -->
          <div class="block block-rounded">
            <div class="block-header block-header-default">
              <h3 class="block-title">Informasi Perusahaan</h3>
            </div>
            <div class="block-content">
              <div class="row">
                <div class="col-lg-6">
                  <!-- Shipping Address -->
                  <div class="block block-rounded block-bordered">
                    <div class="block-header border-bottom">
                      <h3 class="block-title">Tentang Perusahaan</h3>
                    </div>
                    <div class="block-content">
                      <div class="fs-7 mb-1">Diskripsi singkat : <p><?= $data->deskripsiPendek?></p></div>
                      <div class="fs-7 mb-1">Diskripsi Lengkap : <p><?= $data->deskripsiPanjang?></p></div>
                    </div>
                  </div>
                  <!-- END Shipping Address -->
                </div>
                <div class="col-lg-6">
                  <!-- Billing Address -->
                  <div class="block block-rounded block-bordered">
                    <div class="block-header border-bottom">
                      <h3 class="block-title">Kontak Perusahaan</h3>
                    </div>
                    <div class="block-content">
                      <div class="fs-4 mb-1"><a href="">Burhan kopling</a></div>
                      <address class="fs-sm">
                      <?= $data->alamat?><br>
                      <?= $data->kota?><br>
                        Indonesia<br><br>
                        <i class="fa fa-phone"></i> (999) 888-55555<br>
                        <i class="fa fa-envelope-o"></i> <a href="javascript:void(0)">company@example.com</a>
                      </address>
                    </div>
                  </div>
                  <!-- END Billing Address -->
                </div>
              </div>
            </div>
          </div>
          <!-- END Addresses -->
          <?php endforeach; ?>
        </div>
        <!-- END Page Content -->
      </main>
        
<?php $this->load->view($footer)?>