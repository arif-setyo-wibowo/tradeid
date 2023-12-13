<?php $this->load->view($header); ?>
<style>
    .btn-verif{
        border: none;
        background: none;
    
    }
</style>
<section class="wrapper bg-gradient-primary">
    <div class="container p-2   pt-5 pb-10  pt-md-10 pb-md-20 ">
        <?php  $pesan = $this->session->flashdata('pesan') ?>
            <?php  if($pesan != NULL) : ?>
                <div class="alert alert-success alert-icon alert-dismissible fade show" role="alert">
                    <i class="uil uil-check-circle"></i> <?= $pesan ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php elseif($pesan = $this->session->flashdata('pesan_e')) : ?>
                <div class="alert alert-danger alert-icon alert-dismissible fade show" role="alert">
                    <i class="uil uil-times-circle"></i> <?= $pesan ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php endif;?>
        <div class="card p-3" style="background-color:rgba(255, 255, 255, 0.8);">
            <div class="d-flex row ">
                <div class=" d-flex gap-10 ">
                    <div class="p-2 col ">
                        <div class="fw-bold"><?= $user->username ?></div>
                        <div class="fw-light mt-n2"><?= $user->email ?></div>
                    </div>
                    <div class="my-auto " >
                        <?php if($supplier == false || $supplier[0]->verify == 1) : ?>
                            <a href="<?=base_url()?>regSup" class="btn btn-sm btn-sky ">Register as a supplier</a>
                        <?php else : ?>
                            <a href="<?=base_url()?>dashboard/supplier" class="btn btn-sm btn-sky ">Supplier</a>
                        <?php endif; ?>
                    </div>
                </div>
                
            </div>
            <!-- /.social -->
        </div>
        <!--/.card-body -->

        <!-- /.card -->
        <div class="row mt-3">
            <div class="col-lg-6 mb-3">
                <div class="card p-3 " >
                    <div class="d-flex justify-content-between ">
                        <h4 class="fw-light">Profile Information</h4>
                    <a href="<?=base_url()?>editprofil" class="text-blue fw-light"><i class="uil uil-edit"></i>  profile</a>
                    </div>
                    
                    <div class="mb-2">
                        <span class="fw-bold">Full Name :</span><span class="text-muted m-2 fw-light"> <?= $user->nama?></span>
                    </div>
                    <div class="mb-2">
                        <span class="fw-bold">Username :</span><span class="text-muted m-2 fw-light"> <?= $user->username?></span>
                    </div>
                    <div class="mb-2">
                        <span class="fw-bold">Phone :</span><span class="text-muted m-2 fw-light"> <?= $user->telp?></span>
                    </div>
                    <div class="mb-2">
                        <span class="fw-bold">Email :</span><span class="text-muted m-2 fw-light"><?= $user->email?> 
                        <?php if ($user->status == null) : ?>
                            <button class="btn-verif text-blue" data-email="<?= $user->email ?>" onclick="verifyEmail()">verify</button>
                        <?php else : ?>
                            <i class="uil uil-"></i> Telah Diverifikasi </a>
                        <?php endif?>
                        </span>
                    </div>
                    <div class="mb-2">
                        <span class="fw-bold">Location :</span><span class="text-muted m-2 fw-light"><?= $user->negara?></span>
                    </div>
                    <!-- /.social -->
                </div>
                <!--/.card-body -->
            </div>
            <div class="col-lg-6 ">
                <div class="card p-3 " >
                    <?php if($user->cSupplier == 1 || $user->cSupplier != NULL) : ?>
                        <div class="d-flex justify-content-between ">
                            <h4 class="fw-light">Company Information</h4>
                            <a href="<?=base_url()?>supplier/company" class="text-blue fw-light font-sm"><i class="uil uil-"></i> Manage company </a>
                        </div>
                        <div class="mb-2">
                        <img class="rounded  " style="height: 80px; width: 80px;" src="<?= base_url() ?>./assets/front/img/avatars/te1.jpg" srcset="<?= base_url() ?>./assets/front//avatars/te1@2x.jpg 2x" alt="" />
                        </div>
                        <div class="mb-2">
                            <span class="fw-bold">Company Name :</span><span class="text-muted m-2 fw-light"> PT Mencari Cinta Sejati</span>
                        </div>
                        <div class="mb-2">
                            <span class="fw-bold">About Company :</span><span class="text-muted m-2 fw-light"> We operate in the field of coconut agriculture and its derivatives. We aim to provide the best products for you.We operate in the field of coconut agriculture and its derivatives. We aim to provide the best products for you</span>
                        </div>
                        <div class="mb-2">
                            <span class="fw-bold">Products Owned :</span><span class="text-muted m-2 fw-light"> 12 product</span>
                        </div>
                        <div class="mb-2">
                            <span class="fw-bold">Location :</span><span class="text-muted m-2 fw-light"> Malang, Jawa Timur, Indonesia</span>
                        </div>
                        <div class="mb-2 row">
                            <div class="col">
                                <span class="fw-bold">Contact :</span>
                                <div class="">
                                    <li class="text-muted fw-light">cintasejati@gmail.com</li>
                                    <li class="text-muted  fw-light">+62 8988377363</li>
                                    
                                </div>
                            </div>
                            <div class="col">
                                <span class="fw-bold">Social Media :</span>
                                <nav class="nav social mb-0">
                                <a href="#"><i class="uil uil-instagram"></i></a>
                                <a href="#"><i class="uil uil-facebook-f"></i></a>
                                <a href="#"><i class="uil uil-dribbble"></i></a>
                                </nav>
                            </div>
                        </div>
                        <!-- /.social -->
                    <?php else : ?>
                        <div class="d-flex justify-content-center ">
                            <figure>
                                
                            </figure>
                        </div>
                        <!-- /.social -->
                    <?php endif;?>
                </div>
                <!--/.card-body -->
            </div>
        </div>
    </div>
    </div>
    <!-- /.container -->
</section>
<!-- /section -->
<section class="wrapper bg-light">
    <div class="container pb-14 pb-md-16">
        <div class="row">
            <div class="col mt-n19">
                <div class="card shadow-lg">
                    <div class="row gx-0 text-center">
                        <div class="col-lg-2 image-wrapper bg-image bg-cover rounded-top rounded-lg-start d-none d-md-block" data-image-src="./assets/img/photos/tm3.jpg">
                        </div>
                        <!--/column -->
                    </div>
                    <!--/.row -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /column -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>
<!-- /section -->
</div>


<?php $this->load->view($footer); ?>