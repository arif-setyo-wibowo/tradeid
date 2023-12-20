<?php $this->load->view($header); ?>

<!-- Hero -->
<div class="">
<div class="w-100 bg-white">
    <div class="bg-white content content-full d-flex justify-content-between">
        <div class="">
            <h1 class="h2  mb-2">Inquire From <?= $inquire[0]->negara?></h1>
            <a class="my-auto text-primary fs-lg"><?= $inquire[0]->tgl?></a>
        </div>
        <div class="">
            <a class="nav-main-link" href="<?= base_url() ?>dashboard/supplier">
                <i class="nav-main-link-icon si si-action-undo"></i>
                <span class="nav-main-link-name">Go Back</span>
            </a>
        </div>
    </div>
</div>
</div>
<!-- END Hero -->

<div class="content">
          <!-- Products -->
          <div class="block block-rounded">
            <div class="block-header block-header-default">
              <h3 class="block-title">Products</h3>
            </div>
            <div class="block-content">
              <div class="table-responsive">
                <table class="table table-borderless table-striped table-vcenter fs-sm">
                  <thead>
                    <tr>
                      <th>Product Name</th>
                      <th class="text-center">Category</th>
                      <th class="text-end" >Price FOB in USD</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td><a href="" ><?= $inquire[0]->namaProduk?></a></td>
                      <td class="text-center"><?= $inquire[0]->namaSubKategori ?></td>
                      <td class="text-end"><?= $inquire[0]->harga ?></td>
                    </tr>                    
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <!-- END Products -->

          <!-- Customer -->
          <div class="row">
            <div class="col-sm-6">
              <!-- Billing Address -->
              <div class="block block-rounded">
                <div class="block-header block-header-default">
                  <h3 class="block-title">Inquire Message</h3>
                </div>
                <div class="block-content">
                  <div class="fs-4 mb-1"><?= $inquire[0]->nama ?></div>
                  <address class="fs-sm">
                  <?= $inquire[0]->pesan ?>
                  </address>
                </div>
              </div>
              <!-- END Billing Address -->
            </div>
            <div class="col-sm-6">
              <!-- Shipping Address -->
              <div class="block block-rounded">
                <div class="block-header block-header-default">
                  <h3 class="block-title">Inquire Contact detail</h3>
                </div>
                <div class="block-content">
                  <div class="fs-4 mb-1"><?= $inquire[0]->namaSubKategori ?></div>
                  <address class="fs-sm">
                  <?= $inquire[0]->alamat ?><br><br>
                    <i class="fa fa-flag"></i>  <?= $inquire[0]->negara ?><br>
                    <i class="fa fa-phone"></i> <?= $inquire[0]->telp ?><br>
                    <i class="fa fa-envelope-o"></i> <a href="javascript:void(0)"><?= $inquire[0]->email ?></a>
                  </address>
                </div>
              </div>
              <!-- END Shipping Address -->
            </div>
          </div>
          <!-- END Customer -->
        </div>
        <!-- END Page Content -->

<?php $this->load->view($footer) ?>