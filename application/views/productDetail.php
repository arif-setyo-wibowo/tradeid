<?php $this->load->view($header); ?>

<section class="wrapper bg-gradient-primary">
    <div class="container py-3 py-md-5">
        <nav class="d-inline-block" aria-label="breadcrumb">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Shop</a></li>
                <li class="breadcrumb-item"><a href="#">Cosmetics</a></li>
                <li class="breadcrumb-item active text-muted" aria-current="page">Cleansers</li>
            </ol>
        </nav>
        <!-- /nav -->
    </div>
    <!-- /.container -->
</section>

<section class="wrapper bg-light">
    <div class="container py-14 py-md-16">
        <div class="row gx-md-8 gx-xl-12 gy-8">
            <div class="col-lg-6">
                <div class="swiper-container swiper-thumbs-container" data-margin="10" data-dots="false" data-nav="true" data-thumbs="true">
                    <div class="swiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <figure class="rounded"><img src="<?= base_url() ?>./assets/front/img/produk/briket.jpg" srcset="<?= base_url() ?>./assets/front/img/produk/briket.jpg 2x" alt="" /><a class="item-link" href="./assets/img/photos/shs1@2x.jpg" data-glightbox data-gallery="product-group"><i class="uil uil-focus-add"></i></a></figure>
                            </div>
                            <!--/.swiper-slide -->
                            <div class="swiper-slide">
                                <figure class="rounded"><img src="<?= base_url() ?>./assets/front/img/produk/briket.jpg" srcset="<?= base_url() ?>./assets/front/img/produk/briket.jpg 2x" alt="" /><a class="item-link" href="./assets/img/photos/shs2@2x.jpg" data-glightbox data-gallery="product-group"><i class="uil uil-focus-add"></i></a></figure>
                            </div>
                            <!--/.swiper-slide -->
                            <div class="swiper-slide">
                                <figure class="rounded"><img src="<?= base_url() ?>./assets/front/img/produk/briket.jpg" srcset="<?= base_url() ?>./assets/front/img/produk/briket.jpg 2x" alt="" /><a class="item-link" href="./assets/img/photos/shs3@2x.jpg" data-glightbox data-gallery="product-group"><i class="uil uil-focus-add"></i></a></figure>
                            </div>
                            <!--/.swiper-slide -->
                            <div class="swiper-slide">
                                <figure class="rounded"><img src="<?= base_url() ?>./assets/front/img/produk/briket.jpg" srcset="<?= base_url() ?>./assets/front/img/produk/briket.jpg 2x" alt="" /><a class="item-link" href="./assets/img/photos/shs4@2x.jpg" data-glightbox data-gallery="product-group"><i class="uil uil-focus-add"></i></a></figure>
                            </div>
                            <!--/.swiper-slide -->
                        </div>
                        <!--/.swiper-wrapper -->
                    </div>
                    <!-- /.swiper -->
                    <div class="swiper swiper-thumbs">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide"><img src="<?= base_url() ?>./assets/front/img/produk/briket.jpg" srcset="<?= base_url() ?>./assets/front/img/produk/briket.jpg 2x" class="rounded" alt="" /></div>
                            <div class="swiper-slide"><img src="<?= base_url() ?>./assets/front/img/produk/briket.jpg" srcset="<?= base_url() ?>./assets/front/img/produk/briket.jpg 2x" class="rounded" alt="" /></div>
                            <div class="swiper-slide"><img src="<?= base_url() ?>./assets/front/img/produk/briket.jpg" srcset="<?= base_url() ?>./assets/front/img/produk/briket.jpg 2x" class="rounded" alt="" /></div>
                            <div class="swiper-slide"><img src="<?= base_url() ?>./assets/front/img/produk/briket.jpg" srcset="<?= base_url() ?>./assets/front/img/produk/briket.jpg 2x" class="rounded" alt="" /></div>
                        </div>
                        <!--/.swiper-wrapper -->
                    </div>
                    <!-- /.swiper -->
                </div>
                <!-- /.swiper-container -->
            </div>
            <!-- /column -->
            <div class="col-lg-6">
                <div class="post-header mb-4">
                    <h2 class="post-title display-5">Coco Fiber Cube</h2>
                    <p class="price fs-20 mb-2 text-blue">category : <a href="" class="link-dark"><span class="amount">Coconut</span> </a>, <a href="" class="link-dark"><span class="amount"> Agricultue</span></a></p>
                    <div class="fs">
                        We have a different type of Coconut Briquette Charcoal 100% pure charcoal briquettes
                        made from the shell of coconut fruit and its dried pulp. <br>
                        <p></p>
                        <p>Specification Information: <br> Moisture MAX 6% <br>Ash Content MAX 24% <br> Volatile Matter
                            MAX
                            13% <br> Fix Carbon MIN 85% <br> Calorific Value UP TO 7500 Kcal / kg <br>
                            Heat Content UP TO 600 C br Ignition Time MAX 10 minutes <br> Glowing Time MIN 2 hours <br>
                            Size
                            Cubes : 22 mm x 25 mm <br> Size Hexagonal : 22 mm x 50 mm, 25 mm x
                            50 mm</p>
                    </div>
                    <p class="text-blue">Price and Minimum Quantity :</p>
                    <div class="row">
                        <div class="col">
                            <p><span class="fw-bold">Price FOB in $USD :</span>  in Discussed</p>
                            <p><span class="fw-bold">Production Capacity :</span>  100Mt/day</p>
                        </div>
                        <div class="col">
                            <p><span class="fw-bold">Minimum Order Qty : </span>  12ton</p>
                            <p><span class="fw-bold">Packaging : </span>  Gunny Bag</p>
                        </div>
                    </div>
                    <div class="flex-grow-1 mx-2">
                        <a href="" class="btn btn-primary btn-icon btn-icon-start  rounded w-100 " data-bs-toggle="modal" data-bs-target="#modal-signin">
                            <i class="uil uil-envelope"></i> Inquire Now
                        </a>
                    </div>
                    <div class="post-body mb-5 d-flex">
                        <div class="m-5">
                            <a href="<?= base_url() ?>Front/product/productDetail"><img style="max-width: 70px; max-height: 70px;" src="<?= base_url() ?>./assets/front/img/produk/fiber.jpg" srcset="./assets/img/photos/sh1@2x.jpg 2x" alt="" /></a>
                        </div>
                        <div class="my-auto">
                            <p class=" price fs-20 mb-2"><a href="" class="link-dark"><span class="amount">PT. Coco Indo jaya</span></p>
                        </div>
                        
                    </div>
                </div>
                <!-- /.post-header -->
            </div>
            <!-- /column -->
        </div>
        <!-- /.row -->
        <ul class="nav nav-tabs nav-tabs-basic mt-12">
            <li class="nav-item">
                <a class="nav-link active" data-bs-toggle="tab" href="#tab1-1">Product Details</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab1-2">Additional Info</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab1-3">Delivery</a>
            </li>
        </ul>
        <!-- /.nav-tabs -->
        <div class="tab-content mt-0 mt-md-5">
            <div class="tab-pane fade show active" id="tab1-1">
                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Morbi leo risus, porta ac
                    consectetur ac, vestibulum at eros. Aenean eu leo quam. Pellentesque ornare sem lacinia quam
                    venenatis vestibulum. Sed posuere consectetur est at lobortis. Sed posuere consectetur est at
                    lobortis. Nulla vitae elit libero, a pharetra augue. Aenean eu leo quam. Pellentesque ornare sem
                    lacinia quam venenatis vestibulum. Nullam id dolor id nibh ultricies vehicula ut id elit. Maecenas
                    sed diam eget risus varius blandit sit amet non magna. Integer posuere erat a ante venenatis dapibus
                    posuere velit aliquet. Nullam quis risus eget urna mollis ornare vel eu leo. Vestibulum id ligula
                    porta felis euismod semper.</p>
                <p>Vestibulum id ligula porta felis euismod semper. Nullam id dolor id nibh ultricies vehicula ut id
                    elit. Maecenas faucibus mollis interdum. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
            </div>
            <!--/.tab-pane -->
            <div class="tab-pane fade" id="tab1-2">
                <p>Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Vivamus sagittis lacus vel augue
                    laoreet rutrum faucibus dolor auctor. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.
                    Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Lorem ipsum dolor sit amet,
                    consectetur adipiscing elit.</p>
            </div>
            <!--/.tab-pane -->
            <div class="tab-pane fade" id="tab1-3">
                <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit
                    amet risus. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Cras mattis
                    consectetur purus sit amet fermentum. Maecenas sed diam eget risus varius blandit sit amet non
                    magna. Sed posuere consectetur est at lobortis. Curabitur blandit tempus porttitor. Aenean lacinia
                    bibendum nulla sed consectetur. Nulla vitae elit libero, a pharetra augue. Morbi leo risus, porta ac
                    consectetur ac, vestibulum at eros. Praesent commodo cursus magna, vel scelerisque nisl consectetur
                    et.</p>
            </div>
            <!--/.tab-pane -->
        </div>
        <!-- /.tab-content -->
    </div>
    <!-- /.container -->

    <div class="modal fade" id="modal-signin" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content text-center">
        <div class="modal-body">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            <h2 class="mb-3 text-start">Contact Supplier</h2>
            <p class="lead mb-6 text-start">Your message will be sent to the supplier</p>
            <form class="text-start mb-3">
            <div class="form-floating mb-4">
                <input type="text" class="form-control" placeholder="Email" value="Jumali" >
                <label for="loginEmail">Your Name</label>
            </div>
            <div class="form-floating mb-4">
                <input type="text" class="form-control" placeholder="Email" value="Jumali@gmail.com" >
                <label for="loginEmail">Your Email</label>
            </div>
            <div class="form-floating mb-4">
                <input type="text" class="form-control" placeholder="Email" value="+628938837364">
                <label for="loginEmail">Phone (Country And Area Code)</label>
            </div>
            <div class="form-floating mb-4">
                <input type="text" class="form-control" placeholder="Email" value="Indonesia">
                <label for="loginEmail">Country</label>
            </div>
            <div class="form-floating mb-4">
                <textarea id="textareaExample" class="form-control" placeholder="Textarea" style="height: 150px" required></textarea>
                <label for="textareaExample">Message to Supplier</label>
            </div>
            <a class="btn btn-primary rounded-pill btn-login w-100 mb-2">Send Inquire</a>
            </form>
            <!-- /form -->
            <!--/.social -->
        </div>
        <!--/.modal-content -->
        </div>
        <!--/.modal-body -->
    </div>
    <!--/.modal-dialog -->
    </div>
    <!--/.modal -->
</section>
<!-- /section -->

<?php $this->load->view($footer); ?>