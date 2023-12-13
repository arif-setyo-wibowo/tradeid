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
            <a class="nav-main-link" href="<?= base_url() ?>supplier">
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
                      <th class="text-center" style="width: 100px;">ID</th>
                      <th>Product Name</th>
                      <th class="text-center">Category</th>
                      <th class="text-center">Min Order QTY</th>
                      <th class="text-end">Packaging</th>
                      <th class="text-end" >Price FOB in USD</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class="text-center"><a href=""><strong>PID.965</strong></a></td>
                      <td><a href="" >Dehusked Coconut</a></td>
                      <td class="text-center">Coconut,Coconut</td>
                      <td class="text-center"><strong>one  Tons (UK)</strong></td>
                      <td class="text-end">25 Pieces Per Bag</td>
                      <td class="text-end">To Be Discussed</td>
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
                  <div class="fs-4 mb-1">John Parker</div>
                  <address class="fs-sm">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo ex laudantium vel quas nulla sapiente nesciunt quos ratione non. Fuga sed ullam ab deserunt ex praesentium. Temporibus excepturi illo molestias.
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique amet vero neque! Quis, ab provident sequi vel reprehenderit odio. Ipsum vel atque molestiae soluta perferendis quam maxime dolorem! At, ad.
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
                  <div class="fs-4 mb-1">John Parker</div>
                  <address class="fs-sm">
                    Sunrise Str 620<br>
                    Melbourne<br>
                    Australia, 11-587<br><br>
                    <i class="fa fa-flag"></i>  China<br>
                    <i class="fa fa-phone"></i> (999) 888-55555<br>
                    <i class="fa fa-envelope-o"></i> <a href="javascript:void(0)">company@example.com</a>
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