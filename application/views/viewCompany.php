<?php $this->load->view($header); ?>

<section class="wrapper bg-gradient-primary">
    <div class="container py-3 py-md-5">
        <nav class="d-inline-block" aria-label="breadcrumb">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Supplier</a></li>
                <li class="breadcrumb-item"><a href="#">view Company</a></li>
                <li class="breadcrumb-item active text-muted" aria-current="page">PT Cinta Sejati</li>
            </ol>
        </nav>
        <!-- /nav -->
    </div>
    <!-- /.container -->
</section>

<section class="wrapper bg-light">
    <div class="container py-5 mb-0">
        <span class="row justify-content-between align-items-center">
            <span class="col-md-5 mb-2 mb-md-0 d-flex align-items-center text-body">
                <img class="rounded-circle w-15 mb-4 " src="<?= base_url() ?>./assets/front/img/avatars/te1.jpg"srcset="<?= base_url() ?>./assets/front/img/avatars/te1@2x.jpg 2x" alt="" />
                 <h3 style="margin-left: 10px;">PT Mencari Cinta Sejati </h3> 
            </span>
            <span class="col-5 col-md-3 text-body d-flex align-items-center">
                <h4 class="text-aqua">Supplier Of Cococnut</h4>
            </span>
            <span class="col-7 col-md-4 col-lg-3 text-body d-flex align-items-center">
                <h5 class="text-muted">Established : 2010</h5>
            </span>
            
        </span>
    </div>
    <div class="container py ">
        <ul class="nav nav-tabs nav-tabs-basic ">
            <li class="nav-item">
                <a class="nav-link active" data-bs-toggle="tab" href="#tab1-1">Our Company</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab1-2">Products</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab1-3">Delivery</a>
            </li>
        </ul>
        <!-- /.nav-tabs -->
        <div class="tab-content mt-0 mt-md-5">
            <div class="tab-pane fade show active pb-10" id="tab1-1">
                <div>
                    <p> 
                        Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Morbi leo risus, porta ac
                        consectetur ac, vestibulum at eros. Aenean eu leo quam. Pellentesque ornare sem lacinia quam
                        venenatis vestibulum. Sed posuere consectetur est at lobortis. Sed posuere consectetur est at
                        lobortis. Nulla vitae elit libero, a pharetra augue. Aenean eu leo quam. Pellentesque ornare sem
                        lacinia quam venenatis vestibulum. Nullam id dolor id nibh ultricies vehicula ut id elit. Maecenas
                        sed diam eget risus varius blandit sit amet non magna. Integer posuere erat a ante venenatis dapibus
                        posuere velit aliquet. Nullam quis risus eget urna mollis ornare vel eu leo. Vestibulum id ligula
                        porta felis euismod semper.
                    </p>
                </div>
                <hr class="my-5 text-aqua">
                <div>
                    <h4  class="text-blue">Dealing In Products And Services</h4>
                    <span class="fw-bold">Our Primary Business : </span><span> Manufacturer/ OEM</span><br>
                    <span class="fw-bold">Supplier : </span><span> MFresh coconut, husked coconut, semi husked coconut, dehusked coconut, desiccated coconut, coconut fiber, cocopeat, copra, dried copra, coconut shell charcoal</span>
                </div>
                <hr class="my-5 text-aqua">
                <div>
                    
                    <h4 class="text-blue">Contact Details</h4>
                    <div class="">
                        <p>
                            <span>Indonesia, North Jakarta, Jl. Pantai Indah Utara 1 No.2, Rt.2/rw.7, Kapuk Muara, Kec. Penjaringan, Kota Jakarta Utara,</span>
                        </p>
                    </div>
                    <span class="fw-bold">Contact Person : </span><span> Jumali Ahmad </span><span class="text-blue">, Chief Executive Officer</span><br>
                    <span class="fw-bold">Phone : </span><span> +62 0893387364</span>
                    <nav class="navjustify-center social mb-3 mt-2">
                      <a href="#"><i class="uil uil-instagram"></i></a>
                      <a href="#"><i class="uil uil-linkedin"></i></a>
                      <a href="#"><i class="uil uil-facebook-f"></i></a>
                      <a href="#"><i class="uil uil-dribbble"></i></a>
                    </nav>
                </div>
            </div>
            <!--/.tab-pane -->
            <div class="tab-pane fade" id="tab1-2">
            <div class="grid grid-view projects-masonry shop">
                <div class="row gx-md-8 gy-10 gy-md-13 ">
                    <div class=" item col-md-12 col-xl-12  p-5 bg-soft-aqua rounded" >
                    <div class="row">
                        <div class="d-flex justify-content-between">
                        <div class="">
                            <div class="post-category text-ash "><a class="text-blue" href="">Semi-Husked Coconut</a></div>
                        </div>
                        <div class="">
                            <div class="">
                            <h4 class="post-title h4 fs-18"><a href="./shop-product.html" class="link-dark">PT.Indo Coco</a></h4>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="d-flex mb-2">
                        <div class="">
                            <a href="<?= base_url() ?>Front/product/productDetail"><img style="max-width: 150px; max-height: 150px;" src="<?= base_url() ?>./assets/front/img/produk/fiber.jpg" srcset="./assets/img/photos/sh1@2x.jpg 2x" alt="" /></a>
                        </div>
                        <div class="" style="margin-left:10px;">
                            <div class="align-items-center">
                                <span>We have a different type of Coconut Briquette Charcoal 100% pure charcoal briquettes made from
                                the shell of coconut fruit and its dried pulp.
                                Specification Information: Moisture MAX 6% Ash Content MAX 2,4% Volatile Matter MAX 13% Fix Carbon
                                MIN 85% Calorific Value UP TO 7500 Kcal / kg
                                Heat Content UP TO 600 C Ignition Time MAX 10 minutes Glowing Time MIN 2 hours Size Cubes : 22 mm x
                                25 mm Size Hexagonal : 22 mm x 50 mm, 25 mm x
                                50 mm
                                </span>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="d-flex justify-content-between">
                        <div>
                            <div class="fs-16 text-ash ">Supplier From Jawa Timur, Malang</div>
                        </div>
                        <div >
                            <div>
                            <a href="" class="text-blue fs-sm" data-bs-toggle="modal" data-bs-target="#modal-signin"><i class="uil uil-envelope"></i> Inquire now</a>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                    <!-- /.item -->
                    <div class=" item col-md-12 col-xl-12  p-5 bg-soft-aqua rounded" >
                    <div class="row">
                        <div class="d-flex justify-content-between">
                        <div class="">
                            <div class="post-category text-ash "><a class="text-blue" href="">Semi-Husked Coconut</a></div>
                        </div>
                        <div class="">
                            <div class="">
                            <h4 class="post-title h4 fs-18"><a href="./shop-product.html" class="link-dark">PT.Indo Coco</a></h4>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="d-flex mb-2">
                        <div class="">
                            <a href="<?= base_url() ?>Front/product/productDetail"><img style="max-width: 150px; max-height: 150px;" src="<?= base_url() ?>./assets/front/img/produk/fiber.jpg" srcset="./assets/img/photos/sh1@2x.jpg 2x" alt="" /></a>
                        </div>
                        <div class="" style="margin-left:10px;">
                            <div class="align-items-center">
                                <span>We have a different type of Coconut Briquette Charcoal 100% pure charcoal briquettes made from
                                the shell of coconut fruit and its dried pulp.
                                Specification Information: Moisture MAX 6% Ash Content MAX 2,4% Volatile Matter MAX 13% Fix Carbon
                                MIN 85% Calorific Value UP TO 7500 Kcal / kg
                                Heat Content UP TO 600 C Ignition Time MAX 10 minutes Glowing Time MIN 2 hours Size Cubes : 22 mm x
                                25 mm Size Hexagonal : 22 mm x 50 mm, 25 mm x
                                50 mm
                                </span>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="d-flex justify-content-between">
                        <div>
                            <div class="fs-16 text-ash ">Supplier From Jawa Timur, Malang</div>
                        </div>
                        <div >
                            <div>
                            <a href="" class="text-blue fs-sm" data-bs-toggle="modal" data-bs-target="#modal-signin"><i class="uil uil-envelope"></i> Inquire now</a>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                    <!-- /.item -->
                </div>
                <!-- /.row -->
                </div>
                <!-- /.grid -->
            </div>
            <!--/.tab-pane -->
            <div class="tab-pane fade" id="tab1-3">
            <div class="card-body">
                  <div class="classic-view">
                    <article class="post">
                      <div class="post-content mb-5">
                      <div class="row g-6 mt-3 mb-10">
                          <div class="col-md-4">
                            <figure class="hover-scale rounded cursor-dark"><a  data-glightbox="title: Heading; description: Purus Vulputate Sem Tellus Quam" data-gallery="post"> <img src="<?= base_url() ?>./assets/front/img/produk/briket.jpg" alt="" /></a></figure>
                          </div>
                          <!--/column -->
                          <div class="col-md-4">
                            <figure class="hover-scale rounded cursor-dark"><a  data-glightbox data-gallery="post"> <img src="<?= base_url() ?>./assets/front/img/produk/briket.jpg" alt="" /></a></figure>
                          </div>
                        </div>
                        <h2 class="h1 mb-4">Cras mattis consectetur purus fermentum</h2>
                        <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur. Curabitur blandit tempus porttitor. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Nullam quis risus eget porta ac consectetur vestibulum.</p>
                        <p>Donec sed odio dui consectetur adipiscing elit. Etiam adipiscing tincidunt elit, eu convallis felis suscipit ut. Phasellus rhoncus tincidunt auctor. Nullam eu sagittis mauris. Donec non dolor ac elit aliquam tincidunt at at sapien. Aenean tortor libero, condimentum ac laoreet vitae, varius tempor nisi. Duis non arcu vel lectus urna mollis ornare vel eu leo.</p>
                        <!-- /.row -->
                      </div>
                      <!-- /.post-content -->
                    </article>
                    <!-- /.post -->
                  </div>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
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
                            <input type="text" class="form-control" placeholder="Email" value="Jumali">
                            <label for="loginEmail">Your Name</label>
                        </div>
                        <div class="form-floating mb-4">
                            <input type="text" class="form-control" placeholder="Email" value="Jumali@gmail.com">
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
                            <textarea id="textareaExample" class="form-control" placeholder="Textarea"
                                style="height: 150px" required></textarea>
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