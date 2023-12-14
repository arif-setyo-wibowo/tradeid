<?php $this->load->view($header); ?>

<!-- Hero Content -->
<div class="bg-white container d-flex ">
    <div class="content  content-full overflow-hidden  ">
        <h1 class="h3 text-dark mb-2">
            Detail Product
        </h1>
        <h2 class="h5 fw-normal text-dark-75 mb-0">
            Feel free to create and Edit.
        </h2>
    </div>
    <div class="content text-end content-full  ">
        <a href="<?= base_url('dashboard/supplier/product/editProduct/'.$product[0]->idproduct)?>" class="btn btn-outline-primary mb-2"><i class="fa fa-pen"></i> Edit</a>
        <a href="" class="btn btn-outline-danger mb-2"><i class="fa fa-trash-can"></i> Delete</a>
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
                               <?= $product[0]->namaSubKategori ?>
                            </a>
                        </li>
                        <li class="nav-item mb-1">
                            <a class="nav-link d-flex justify-content-between align-items-center"
                                href="javascript:void(0)">
                                <?= $product[0]->namaSubKategori_b ?>
                            </a>
                        </li>
                        
                    </ul>
                </div>
            </div>
            <!-- END Categories -->
            
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
                            <div class="row g-sm js-gallery img-fluid-100 ">
                                <div class="col-12 mb-3">
                                <?php  $imageArray = explode(',', $product[0]->gambar);?>
                                    <a class="img-link img-link-zoom-in img-lightbox"
                                        href="<?= base_url('uploads/'.$imageArray[0]) ?>">
                                        <img class="img-fluid"
                                            src="<?= base_url('uploads/'.$imageArray[0]) ?>" alt="">
                                    </a>
                                </div>
                                <?php  $imageArray = explode(',', $product[0]->gambar);
                                        foreach ($imageArray as $data): 
                                ?>
                                <div class="col-4 mt-1">
                                    <a class="img-link img-link-zoom-in img-lightbox"
                                        href="<?= base_url('uploads/'.$data) ?>">
                                        <img class="img-fluid"
                                            src="<?= base_url('uploads/'.$data) ?>" style="height: 75px;" alt="">
                                    </a>
                                </div>
                                <?php endforeach;?>
                            </div>
                            <!-- END Images -->
                        </div>
                        <div class="col-md-6">
                            <!-- Info -->
                            <div class=" justify-content-between align-items-center">
                                <div>
                                    <div class="h3 fw-bold mb-0"><?= $product[0]->namaProduk ?></div>
                                </div>
                                <div class="fs-sm fw-bold">Price FOB in USD:
                                        <span class="fw-normal">
                                        <?= $product[0]->harga ?>
                                        </span>
                                    </div>
                            </div>
                            <hr>
                            <div class="d-flex  align-items-center">
                                <div class="fs">
                                   <?= $product[0]->deskripsiProduk?>
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