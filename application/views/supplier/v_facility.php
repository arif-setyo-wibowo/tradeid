<?php $this->load->view($header); ?>

<!-- Hero -->
<div class=""></div>
<div class="">
    <div class="bg-white ">
        <div class="content content-full ">
            <div class="my-3 ">
            </div>
            <h1 class="h2  mb-0">Facilities of PT Mencari Cinta Sejati</h1>
            <a href="<?= base_url('supplier/facility/add') ?>" class="my-auto btn text-primary "><i class="far fa-add"></i> Add Facility</a>
        </div>
    </div>
</div>
<!-- END Hero -->

<!-- Page Content -->
<div class="bg-body-extra-light">
          <div class="content content-boxed">
            <div class="row justify-content-center">
              <div class="col-sm-8">
                <!-- Story -->
                <article class="story">
                  <!-- Magnific Popup (.js-gallery class is initialized in Helpers.jqMagnific()) -->
                  <!-- For more info and examples you can check out http://dimsemenov.com/plugins/magnific-popup/ -->

                  <div class="row g-sm items-push js-gallery push img-fluid-100">
                    <div class="col-6 animated fadeIn">
                      <a class="img-link img-link-simple img-link-zoom-in img-lightbox" href="assets/media/photos/photo19@2x.jpg">
                        <img class="img-fluid" src="<?= base_url() ?>./assets/admin/media/photos/photo19.jpg" alt="">
                      </a>
                    </div>
                    <div class="col-6 animated fadeIn">
                      <a class="img-link img-link-simple img-link-zoom-in img-lightbox" href="assets/media/photos/photo12@2x.jpg">
                        <!-- <img class="img-fluid" src="<?= base_url() ?>./assets/admin/media/photos/photo12.jpg" alt=""> -->
                      </a>
                    </div>
                  </div>
                  <!-- END Gallery -->
                  <div class="d-flex gap-2">
                    <h3 class="fw-bold my-auto">jalan Kenangan </h3>
                    <a href="" class=" my-auto "><i  class="far fa-edit"></i></a>
                  </div>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis deserunt, numquam qui, minus quidem atque incidunt iusto accusantium fuga dolorum odio nobis magnam accusamus voluptate at repellat impedit. Expedita, ad!</p>               
                

                  <div class="row g-sm items-push js-gallery push img-fluid-100">
                    <div class="col-6 animated fadeIn">
                      <a class="img-link img-link-simple img-link-zoom-in img-lightbox" href="assets/media/photos/photo19@2x.jpg">
                        <img class="img-fluid" src="<?= base_url() ?>./assets/admin/media/photos/photo19.jpg" alt="">
                      </a>
                    </div>
                    <div class="col-6 animated fadeIn">
                      <a class="img-link img-link-simple img-link-zoom-in img-lightbox" href="assets/media/photos/photo12@2x.jpg">
                        <img class="img-fluid" src="<?= base_url() ?>./assets/admin/media/photos/photo12.jpg" alt="">
                      </a>
                    </div>
                  </div>
                  <!-- END Gallery -->
                  <div class="d-flex gap-2">
                    <h3 class="fw-bold my-auto">jalan Kenangan </h3>
                    <a href="" class=" my-auto "><i  class="far fa-edit"></i></a>
                  </div>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis deserunt, numquam qui, minus quidem atque incidunt iusto accusantium fuga dolorum odio nobis magnam accusamus voluptate at repellat impedit. Expedita, ad!</p>               
                

                </article>
                <!-- END Story -->

                
              </div>
            </div>
          </div>
        </div>
        <!-- END Page Content -->

<?php $this->load->view($footer) ?>