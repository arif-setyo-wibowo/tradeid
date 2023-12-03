<?php $this->load->view($header); ?>

<!-- Hero Content -->
<div class="bg-white container d-flex ">
    <div class="content  content-full overflow-hidden  ">
        <h1 class="h3 text-dark mb-2">
            Manage Your Product
        </h1>
        <h2 class="h5 fw-normal text-dark-75 mb-0">
            Feel free to create and Edit.
        </h2>
    </div>
    <a href="<?= base_url('supplier/product/productForm')?>" class="my-auto btn text-primary ">Add New Product</a>
</div>
<!-- END Hero Content -->

<!-- Page Content -->
<div class="content content-boxed">
          <div class="row">
            <!-- Story -->
            <div class="col-lg-4 col-md-4">
              <a class="block block-rounded block-link-pop overflow-hidden" href="<?= base_url('supplier/product/productDetail')?>">
                <img class="img-fluid"  src="<?= base_url() ?>./assets/front/img/produk/husked.jpg" alt="">
                <div class="block-content">
                  <h4 class="mb-1">
                    Bricket On Top
                  </h4>
                  <p class="fs-sm fw-medium mb-2">
                    <span class="text-primary">Category : </span> Coconut , Agricultur
                  </p>
                  <p class="fs-sm text-muted">
                  We have a different type of Coconut Briquette Charcoal 100% pure charcoal briquettes made from the shell of coconut fruit and its dried pulp. 
                              
                  </p>
                </div>
              </a>
            </div>
            <!-- END Story -->
            <!-- Story -->
            <div class="col-lg-4 col-md-4 ">
              <a class="block block-rounded block-link-pop overflow-hidden" href="<?= base_url('supplier/product/productDetail')?>">
                <img class="img-fluid"  src="<?= base_url() ?>./assets/front/img/produk/briket.jpg" alt="">
                <div class="block-content">
                  <h4 class="mb-1">
                    Bricket On Top
                  </h4>
                  <p class="fs-sm fw-medium mb-2">
                    <span class="text-primary">Category : </span> Coconut , Agricultur
                  </p>
                  <p class="fs-sm text-muted">
                  We have a different type of Coconut Briquette Charcoal 100% pure charcoal briquettes made from the shell of coconut fruit and its dried pulp. 
                              
                  </p>
                </div>
              </a>
            </div>
            <!-- END Story -->
            <!-- Story -->
            <div class="col-lg-4 col-md-4 ">
              <a class="block block-rounded block-link-pop overflow-hidden" href="<?= base_url('supplier/product/productDetail')?>">
                <img class="img-fluid"  src="<?= base_url() ?>./assets/front/img/produk/briket.jpg" alt="">
                <div class="block-content">
                  <h4 class="mb-1">
                    Bricket On Top
                  </h4>
                  <p class="fs-sm fw-medium mb-2">
                    <span class="text-primary">Category : </span> Coconut , Agricultur
                  </p>
                  <p class="fs-sm text-muted">
                  We have a different type of Coconut Briquette Charcoal 100% pure charcoal briquettes made from the shell of coconut fruit and its dried pulp. 
                              
                  </p>
                </div>
              </a>
            </div>
            <!-- END Story -->

            
          </div>

          <!-- Pagination -->
          <nav aria-label="Page navigation">
            <ul class="pagination justify-content-center push">
              <li class="page-item active">
                <a class="page-link" href="javascript:void(0)">1</a>
              </li>
              <li class="page-item">
                <a class="page-link" href="javascript:void(0)">2</a>
              </li>
              <li class="page-item">
                <a class="page-link" href="javascript:void(0)">3</a>
              </li>
              <li class="page-item">
                <a class="page-link" href="javascript:void(0)">4</a>
              </li>
              <li class="page-item">
                <a class="page-link" href="javascript:void(0)">5</a>
              </li>
              <li class="page-item">
                <a class="page-link" href="javascript:void(0)" aria-label="Next">
                  <span aria-hidden="true">
                    <i class="fa fa-angle-right"></i>
                  </span>
                  <span class="visually-hidden">Next</span>
                </a>
              </li>
            </ul>
          </nav>
          <!-- END Pagination -->
        </div>
        <!-- END Page Content -->
<?php $this->load->view($footer) ?>