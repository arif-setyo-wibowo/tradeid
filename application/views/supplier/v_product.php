<?php $this->load->view($header); ?>

<!-- Hero Content -->
<div class="bg-primary-dark">
    <div class="content content-full overflow-hidden pt-7 pb-6 text-center">
        <h1 class="h2 text-white mb-2">
            Manage Your Product
        </h1>
        <h2 class="h4 fw-normal text-white-75 mb-0">
            Feel free to create and Edit.
        </h2>
    </div>
</div>
<!-- END Hero Content -->

<!-- Page Content -->
<div class="content content-boxed">
    <div class="row items-push">
        <div class="col-xxl-8">
            <!-- Story -->
            <div class="block block-rounded">
                <div class="block-content">
                    <div class="row items-push">
                        <div class="col-md-4 col-lg-5">
                            <a class="img-link img-link-simple" href="<?= base_url('supplier/product/productDetail')?>">
                                <img src="<?= base_url() ?>./assets/front/img/produk/briket.jpg" class="img-fluid rounded" alt="" />
                            </a>
                        </div>
                        <div class="col-md-8 col-lg-7 d-md-flex align-items-center">
                            <div>
                                <h4 class="mb-1">
                                    <a class="text-dark" href="be_pages_blog_story.php">Briket Balok</a>
                                </h4>
                                <div class="fs-sm fw-medium mb-3">
                                    <a href="be_pages_generic_profile.php"></a> Price in FOB<span class="text-muted"> $15 </span>
                                </div>
                                <p class="fs-sm text-muted">
                                    We have a different type of Coconut Briquette Charcoal 100% pure charcoal briquettes made from the shell of coconut fruit and its dried pulp. 
                                    Specification Information: Moisture MAX 6% Ash Content MAX 2,4% Volatile Matter MAX 13% Fix Carbon MIN 85% Calorific Value UP TO 7500 Kcal / kg 
                                    Heat Content UP TO 600 C Ignition Time MAX 10 minutes Glowing Time MIN 2 hours Size Cubes : 22 mm x 25 mm Size Hexagonal : 22 mm x 50 mm, 25 mm x 
                                    50 mm
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Story -->

            <!-- Story -->
            <div class="block block-rounded">
                <div class="block-content">
                    <div class="row items-push">
                        <div class="col-md-4 col-lg-5">
                            <a class="img-link img-link-simple" href="be_pages_blog_story.php">
                                <img src="<?= base_url() ?>./assets/front/img/produk/husked.jpg" alt="" />
                            </a>
                        </div>
                        <div class="col-md-8 col-lg-7 d-md-flex align-items-center">
                            <div>
                                <h4 class="mb-1">
                                    <a class="text-dark" href="be_pages_blog_story.php">How to start your own digital
                                        business</a>
                                </h4>
                                <div class="fs-sm fw-medium mb-3">
                                    <a href="be_pages_generic_profile.php"></a> on July 13, 2021 · <span class="text-muted">15 min</span>
                                </div>
                                <p class="fs-sm text-muted">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ultrices, justo
                                    vel imperdiet gravida, urna ligula hendrerit nibh, ac cursus nibh..
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Story -->

            <!-- Story -->
            <div class="block block-rounded">
                <div class="block-content">
                    <div class="row items-push">
                        <div class="col-md-4 col-lg-5">
                            <a class="img-link img-link-simple" href="be_pages_blog_story.php">
                                <img src="<?= base_url() ?>./assets/front/img/produk/fiber.jpg" alt="" />
                            </a>
                        </div>
                        <div class="col-md-8 col-lg-7 d-md-flex align-items-center">
                            <div>
                                <h4 class="mb-1">
                                    <a class="text-dark" href="be_pages_blog_story.php">How to manage working while
                                        traveling</a>
                                </h4>
                                <div class="fs-sm fw-medium mb-3">
                                    <a href="be_pages_generic_profile.php"></a> on July 6, 2021 · <span class="text-muted">12 min</span>
                                </div>
                                <p class="fs-sm text-muted">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ultrices, justo
                                    vel imperdiet gravida, urna ligula hendrerit nibh, ac cursus nibh..
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Story -->



            <!-- Pagination -->
            <nav aria-label="Page navigation">
                <ul class="pagination push">
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
        <div class="col-xxl-4">
            <div class="bg-body-dark rounded-3 p-4">
                <!-- Search -->
                <div class="block block-rounded mb-3">
                    <div class="block-content p-3">
                        <form action="be_pages_blog_classic.php" method="POST">
                            <div class="input-group">
                                <input type="text" class="form-control form-control-alt" placeholder="Search all product">
                                <button class="btn btn-alt-secondary">
                                    <i class="fa fa-search"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- END Search -->
            </div>
            <div class="bg-body-dark rounded-3 p-3 mt-2">
                <!-- Search -->
                <div class="col-md-6 col-xl-12">
                    <a class="block block-rounded block-link-pop text-center" href="<?= base_url('supplier/product/productForm')?>">
                        <div class="p- " style="font-size: 40px;">
                            <i class="far fa-square-plus"></i>
                        </div>
                        <div class="block-content block-content-full bg-body-light">
                            <p class="fw-semibold mb-0">Add New Product</p>
                        </div>
                    </a>
                </div>
                <!-- END Search -->
            </div>
        </div>
    </div>
</div>
<!-- END Page Content -->

<!-- Get Started -->
<div class="bg-body-dark">
    <div class="content content-full">
        <div class="my-5 text-center">
            <h3 class="fw-bold mb-2">
                Do you like our stories?
            </h3>
            <h4 class="h5 fw-medium opacity-75">
                Sign up today and get access to over <strong>10,000</strong> inspiring stories!
            </h4>
            <a class="btn btn-primary px-4 py-2" href="javascript:void(0)">Get Started Today</a>
        </div>
    </div>
</div>
<!-- END Get Started -->
<?php $this->load->view($footer) ?>