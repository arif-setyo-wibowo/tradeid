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
<?php  $pesan = $this->session->flashdata('pesan') ?>
            <?php  if($pesan != NULL) : ?>
                <div class="alert alert-success alert-icon alert-dismissible fade show mb-2" role="alert">
                    <i class="uil uil-check-circle"></i> <?= $pesan ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php elseif($pesan = $this->session->flashdata('pesan_e')) : ?>
                <div class="alert alert-danger alert-icon alert-dismissible fade show mb-2" role="alert">
                    <i class="uil uil-times-circle"></i> <?= $pesan ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php endif;?>
    <div class="row">
      <!-- Story -->
      <?php foreach ($product as $data) : ?>
        <div class="col-lg-4 col-md-4">
          <a class="block block-rounded block-link-pop overflow-hidden" href="<?= base_url('supplier/product/productDetail/'.$data->idproduct)?>">
            <img class="img-fluid"  src="<?= base_url() ?>./assets/front/img/produk/husked.jpg" alt="">
            <div class="block-content">
              <h4 class="mb-1">
                <?= $data->namaProduk?>
              </h4>
              <p class="fs-sm fw-medium mb-2">
                <span class="text-primary">Category : </span> <?= $data->namaSubKategori ?> , <?= $data->namaSubKategori_b ?>
              </p>
              <p class="fs-sm text-muted">
                  <?= $data->deskripsiPendek?>     
              </p>
            </div>
          </a>
        </div>
      <?php endforeach;?>
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