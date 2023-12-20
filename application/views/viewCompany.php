<?php $this->load->view($header); ?>

<section class="wrapper bg-gradient-primary">
    <div class="container py-3 py-md-5">
        <nav class="d-inline-block" aria-label="breadcrumb">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="<?= base_url('supplier')?>">Supplier</a></li>
                <li class="breadcrumb-item active text-muted" aria-current="page"><?= $supplier[0]->namaPerusahaan?></li>
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

                <img class="rounded-circle w-15 mb-4 " src="<?= base_url('uploads/'.$supplier[0]->gambarCompany) ?>"srcset="<?= base_url() ?>./assets/front/img/avatars/te1@2x.jpg 2x" alt="" />
                 
                <h3 style="margin-left: 10px;"><?= $supplier[0]->namaPerusahaan?> </h3> 
            </span>
            <span class="col-5 col-md-3 text-body d-flex align-items-center">
                <h4 class="text-aqua">Supplier Of <?= $supplier[0]->namaSubKategori?></h4>
            </span>
            <span class="col-7 col-md-4 col-lg-3 text-body d-flex align-items-center">
                <h5 class="text-muted">Established : <?= $supplier[0]->tgl?></h5>
            </span>
            
        </span>
    </div>
    <div class="container py mb-3">
        <ul class="nav nav-tabs nav-tabs-basic ">
            <li class="nav-item">
                <a class="nav-link active" data-bs-toggle="tab" href="#tab1-1">Our Company</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab1-2">Products</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab1-3">Facility</a>
            </li>
        </ul>
        <!-- /.nav-tabs -->
        <div class="tab-content mt-0 mt-md-5">
            <div class="tab-pane fade show active pb-10" id="tab1-1">
                <div>
                     
                       <?= $supplier[0]->deskripsiPanjang?>
                    
                </div>
                <hr class="my-5 text-aqua">
                <div>
                    <h4  class="text-blue">Dealing In Products And Services</h4>
                    <span class="fw-bold">Supplier : </span><span> <?= $supplier[0]->namaKategori.','.$supplier[0]->namaSubKategori?></span>
                </div>
                <hr class="my-5 text-aqua">
                <div>
                    
                    <h4 class="text-blue">Contact Details</h4>
                    <div class="">
                        <p>
                            <span><?= $supplier[0]->alamat?></span>
                        </p>
                    </div>
                    <span class="fw-bold">Contact Person : </span><span> <?= $supplier[0]->nama?> </span><br>
                    <span class="fw-bold">Phone : </span><span> <?= $supplier[0]->telp?></span>
                    <nav class="navjustify-center social mb-3 mt-2">
                        <?php if ($supplier[0]->facebook == null) : ?>
                        
                        <?php else : ?>
                          <a href="https://www.facebook.com/<?= $supplier[0]->facebook ?>" target="_blank"><i class="uil uil-facebook-f"></i></a>
                        <?php endif;?>
                        <?php if ($supplier[0]->linkedin == null) : ?>
                          
                        <?php else : ?>
                          <a href="https://www.linkedin.com/in<?= $supplier[0]->linkedin?>" target="_blank"><i class="uil uil-linkedin"></i></a>
                        <?php endif;?>

                        <?php if ($supplier[0]->website == null) : ?>
                          
                        <?php else : ?>
                          <a href="http://<?= $supplier[0]->website?>" target="_blank"><i class="uil uil-dribbble"></i></a>
                        <?php endif;?>

                        <?php if ($supplier[0]->instagram == null) : ?>
                          
                        <?php else : ?>
                          <a href="https://www.instagram.com/<?= $supplier[0]->instagram?>"><i class="uil uil-instagram"></i></a>
                        <?php endif;?>
                    </nav>
                </div>
            </div>
            <!--/.tab-pane -->
            <div class="tab-pane fade" id="tab1-2">
            <div class="grid grid-view projects-masonry shop">
                <div class="row gx-md-8 gy-10 gy-md-13 ">
                    <?php foreach ($product as $data) : ?>
                    <div class=" item col-md-12 col-xl-12  p-5 bg-soft-aqua rounded" >
                        <div class="row">
                            <div class="d-flex justify-content-between">
                            <div class="">
                                <div class="post-category text-ash "><a class="text-blue" href=""><?= $data->namaProduk?></a></div>
                            </div>
                            <div class="">
                                <div class="">
                                <h4 class="post-title h4 fs-18"><a href="<?= base_url('supplier/detail/'.$data->idcompany) ?>" class="link-dark"><?= $data->namaPerusahaan?></a></h4>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="d-flex mb-2">
                                <div class="">
                                <?php  $imageArray = explode(',', $data->gambar); ?>
                                    <a href="<?= base_url('product/productDetail/'.$data->idproduct)?>"><img style="max-width: 150px; max-height: 150px;" src="<?= base_url('uploads/'.$imageArray[0]) ?>" srcset="<?= base_url('uploads/'.$imageArray[0]) ?>" alt="" /></a>
                                </div>
                                <div class="" style="margin-left:10px;">
                                    <div class="align-items-center">
                                        <span><?= $data->despen?></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <div class="fs-16 text-ash ">Supplier From <?= $data->kota?></div>
                                </div>
                                <div >
                                    <div>
                                    <a href="" class="text-blue fs-sm" data-bs-toggle="modal" data-bs-target="#modal-signin"><i class="uil uil-envelope"></i> Inquire now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach;?>
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
                        <?php foreach ($facility as $data) : ?>
                            <div class="post-content mb-5">
                                <div class="row g-6 mt-3 mb-10">
                                <?php  $imageArray = explode(',', $data->gambarFacility);
                                        foreach ($imageArray as $Image): 
                                ?>
                                    <div class="col-md-4">
                                        <figure class="hover-scale rounded cursor-dark"><img src="<?= base_url('uploads/'.$Image)?>" alt="" /></figure>
                                    </div>
                                <?php endforeach; ?>
                                </div>
                                    <h2 class="h1 mb-4"><?= $data->namaFacility?></h2>
                                    <p><?= $data->deskripsiFacility?></p>
                                    
                            </div>
                        <?php endforeach;?>
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