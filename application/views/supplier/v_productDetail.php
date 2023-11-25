<?php $this->load->view($header); ?>

<!-- Hero Content -->
<div class="bg-primary-dark">
    <div class="content content-full overflow-hidden pt-7 pb-6 text-center">
        <h1 class="h2 text-white mb-2">
            Detail Produck Briket Balok
        </h1>
        <h2 class="h4 fw-normal text-white-75 mb-0">
            Information about product
        </h2>
    </div>
</div>
<!-- END Hero Content -->

<!-- Page Content -->
<div class="content">
    <!-- Toggle Side Content -->
    <!-- Class Toggle, functionality initialized in Helpers.oneToggleClass() -->
    <div class="d-xl-none push">
        <div class="row g-sm">
            <div class="col-12">
                <button type="button" class="btn btn-alt-secondary w-100" data-toggle="class-toggle"
                    data-target=".js-ecom-div-nav" data-class="d-none">
                    <i class="fa fa-fw fa-bars text-muted me-1"></i> Categories
                </button>
            </div>
    
        </div>
    </div>
    <!-- END Toggle Side Content -->

    <div class="row">
        <div class="col-xl-4 order-xl-1">
            <!-- Categories -->
            <div class="block block-rounded js-ecom-div-nav d-none d-xl-block">
                <div class="block-header block-header-default">
                    <h3 class="block-title">
                        <i class="fa fa-fw fa-boxes text-muted me-1"></i> Categories
                    </h3>
                </div>
                <div class="block-content">
                    <ul class="nav nav-pills flex-column push">
                        <li class="nav-item mb-1">
                            <a class="nav-link  d-flex justify-content-between align-items-center"
                                href="javascript:void(0)">
                                Coconut 
                            </a>
                        </li>
                        <li class="nav-item mb-1">
                            <a class="nav-link d-flex justify-content-between align-items-center"
                                href="javascript:void(0)">
                                Bricket 
                            </a>
                        </li>
                        
                    </ul>
                </div>
            </div>
            <!-- END Categories -->
            <div class="row col-md-6 block-content block-content-full d-flex flex-row-reverse align-items-center justify-content-between">
                <div class="col">
                <a class="block  bg-city text-white p-3 block-rounded block-link-shadow text-center" href="">
                  <div class="me-3">
                    <p class=" mb-0 fa fa-trash-can "> Delete</p>
                    
                  </div>
                </a>
                </div>
                <div class="col">
                <a class="block bg-primary-op text-white p-3 block-rounded block-link-shadow text-center" href="">
                  <div class="me-3">
                    <p class="fw-semibold mb-0 fa fa-pen-to-square"> Edit</p>
                  </div>
                </a>
                </div>
            </div>
        </div>
        <div class="col-xl-8 order-xl-0">
            <!-- Product -->
            <div class="block block-rounded">
                <div class="block-content">
                    <!-- Vitals -->
                    <div class="row items-push">
                        <div class="col-md-6">
                            <!-- Images -->
                            <!-- Magnific Popup (.js-gallery class is initialized in Helpers.jqMagnific()) -->
                            <!-- For more info and examples you can check out http://dimsemenov.com/plugins/magnific-popup/ -->
                            <div class="row g-sm js-gallery img-fluid-100">
                                <div class="col-12 mb-3">
                                    <a class="img-link img-link-zoom-in img-lightbox"
                                        href="/media/various/ecom_product6.png">
                                        <img class="img-fluid"
                                            src="<?= base_url() ?>./assets/front/img/produk/briket.jpg" alt="">
                                    </a>
                                </div>
                                <div class="col-4 mt-1">
                                    <a class="img-link img-link-zoom-in img-lightbox"
                                        href="/media/various/ecom_product6_a.png">
                                        <img class="img-fluid"
                                            src="<?= base_url() ?>./assets/front/img/produk/briket.jpg" alt="">
                                    </a>
                                </div>
                                <div class="col-4 mt-1">
                                    <a class="img-link img-link-zoom-in img-lightbox"
                                        href="/media/various/ecom_product6_b.png">
                                        <img class="img-fluid"
                                            src="<?= base_url() ?>./assets/front/img/produk/briket.jpg" alt="">
                                    </a>
                                </div>
                                <div class="col-4 mt-1">
                                    <a class="img-link img-link-zoom-in img-lightbox"
                                        href="/media/various/ecom_product6_c.png">
                                        <img class="img-fluid"
                                            src="<?= base_url() ?>./assets/front/img/produk/briket.jpg" alt="">
                                    </a>
                                </div>
                            </div>
                            <!-- END Images -->
                        </div>
                        <div class="col-md-6">
                            <!-- Info -->
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <div class="fs- fw-semibold text-flat">PRICE</div>
                                    <div class="fs- fw-bold">FOB in USD</div>
                                </div>
                                <div class="fs-2 fw-bold">
                                    $ 15
                                </div>
                            </div>
                            <hr>
                            <div class="d-flex  align-items-center">
                                <div class="fs">
                                    We have a different type of Coconut Briquette Charcoal 100% pure charcoal briquettes
                                    made from the shell of coconut fruit and its dried pulp. <br ><p></p>
                                    <p>Specification Information: <br> Moisture MAX 6% <br>Ash Content MAX 24% <br> Volatile Matter MAX
                                    13% <br> Fix Carbon MIN 85% <br> Calorific Value UP TO 7500 Kcal / kg <br>
                                    Heat Content UP TO 600 C br Ignition Time MAX 10 minutes <br> Glowing Time MIN 2 hours <br> Size
                                    Cubes : 22 mm x 25 mm <br> Size Hexagonal : 22 mm x 50 mm, 25 mm x
                                    50 mm</p>
                                </div>
                            </div>
                            <div class="d-flex mt-3 text-primary fw-bold ustify-content-between align-items-center">
                                Minimum Capacity</div>
                            <div class="d-flex  justify-content-between align-items-center">
                                <div>
                                    <div class="fs-sm fw-bold">Poduction Capacity : 
                                        <span class="fw-normal">
                                            40 box/day
                                        </span>
                                    </div>
                                    <div class="fs-sm fw-bold">Minimum Order Qty : 
                                        <span class="fw-normal">
                                            10 Tons(UK)
                                        </span>
                                    </div>
                                    <div class="fs-sm fw-bold">Packaging:
                                        <span class="fw-normal">
                                        In Sack, Exclude Inner Box And Master Case
                                        </span>
                                    </div>
                                </div>
                                <div>
                                </div>
                            </div>
                            <!-- END Info -->
                        </div>
                    </div>
                    <!-- END Vitals -->
                </div>
            </div>
            <!-- END Product -->
            <?php $this->load->view($footer) ?>