<?php $this->load->view($header); ?>

<!-- Hero -->
<div class="">
<div class="w-100 bg-white">
    <div class="bg-white content content-full d-flex justify-content-between">
        <div class="">
            <a class="nav-main-link" href="<?= base_url() ?>admin/databuyer">
                <i class="nav-main-link-icon si si-action-undo"></i>
                <span class="nav-main-link-name">Go Back</span>
            </a>
        </div>
    </div>
</div>
</div>
<!-- END Hero -->

<div class="content">
<div class=" content content-full d-flex justify-content-between">
    <div class=""></div>
        <div class="">
            <a class="nav-main-link" href="<?= base_url() ?>admin/databuyer">
                <i class="nav-main-link-icon si si-action-undo"></i>
                <span class="nav-main-link-name">Go Back</span>
            </a>
        </div>
    </div>
          <!-- Customer -->
          <div class="row">
            <div class="col-sm-6">
              <!-- Billing Address -->
              <div class="block block-rounded">
                <div class="block-header block-header-default">
                  <h3 class="block-title">Deskripsi Permintaan</h3>
                </div>
                <div class="block-content">
                <div class="fs-4 mb-1">Cacao</div>
                <div class="fs-8 mb-1">Coconut,Dehusked</div>
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
                  <h3 class="block-title">Contact Buyer</h3>
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

