<?php $this->load->view($header); ?>

<style>
  .dropend .dropdown-toggle::after{
    display: none;
  }

  .dropdown-header {
  max-width: 340px; /* Menggunakan lebar maksimum sesuai dengan parent atau viewport */
  overflow: hidden;
  white-space: nowrap;
  text-overflow: ellipsis;
  letter-spacing: 1px;
}

/* Contoh responsif menggunakan media query */
@media screen and (max-width: 1540px) {
  .dropdown-header {
    max-width: 250px; /* Ubah lebar menjadi 80% dari lebar viewport saat lebar layar kurang dari 768px */
  }
}

/* Atau untuk pengaturan lainnya */
@media screen and (max-width: 1340px) {
  .dropdown-header {
    max-width: 175px; /* Ubah lebar menjadi 90% dari lebar viewport saat lebar layar kurang dari 480px */
  }
}

/* Atau untuk pengaturan lainnya */
@media screen and (max-width: 991px) {
  .dropdown-header {
    max-width: 100%; /* Ubah lebar menjadi 90% dari lebar viewport saat lebar layar kurang dari 480px */
  }
}
/* Atau untuk pengaturan lainnya */
@media screen and (max-width: 595px) {
  .dropdown-header {
    max-width: 80%; /* Ubah lebar menjadi 90% dari lebar viewport saat lebar layar kurang dari 480px */
  }
}

.item-header {
  color: #3f78e0 !important;
}

</style>

<section class="wrapper bg-gradient-primary">
  <div class="container py-3 py-md-5">
    <nav class="d-inline-block" aria-label="breadcrumb">
      <ol class="breadcrumb mb-0">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Shop</li>
      </ol>
    </nav>
    <!-- /nav -->
  </div>
  <!-- /.container -->
</section>
<!-- /section -->
<section class="wrapper bg-light">
  <div class="container-fluid px-md-15 px-sm-8  pb-14 pb-md-16 pt-12">
    <div class="row gy-10">
      <div class="col-lg-9 order-lg-2">
        <div class="row align-items-center mb-10 position-relative zindex-1">
          <div class="col-md-7 col-xl-8 pe-xl-20">
            <h2 class="display-6 mb-1">Product </h2>
            <p class="mb-0 text-muted">Showing 1–9 of 30 results</p>
          </div>
          <!--/column -->
          <div class="col-md-5 col-xl-4 ms-md-auto text-md-end mt-5 mt-md-0">
            <div class="form-select-wrapper">
              <select class="form-select">
                <option value="popularity">Sort by popularity</option>
                <option value="rating">Sort by average rating</option>
                <option value="newness">Sort by newness</option>
                <option value="price: low to high">Sort by price: low to high</option>
                <option value="price: high to low">Sort by price: high to low</option>
              </select>
            </div>
            <!--/.form-select-wrapper -->
          </div>
          <!--/column -->
        </div>
        <!--/.row -->
        <div class="grid grid-view projects-masonry shop mb-13">
          <div class="row gx-md-8 gy-10 gy-md-13 isotope">
            <?php foreach ($product as $data) : ?>
            <div class=" item col-md-12 col-xl-12  p-3 bg-soft-sky rounded" style="margin-bottom:-30px;">
              <div class="row">
                <div class="d-flex justify-content-between">
                  <div class="">
                    <div class="post-category text-ash "><a class="text-blue" href=""><?= $data->namaProduk?></a></div>
                  </div>
                  <div class="">
                    <div class="">
                      <h4 class="post-title h4 fs-18"><a href="./shop-product.html" class="link-dark"><?= $data->namaPerusahaan?></a></h4>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="d-flex mb-2">
                  <div class="">
                  <?php  $imageArray = explode(',', $data->gambar);?>
                    <a href="<?= base_url('product/productDetail/'.$data->idproduct)?>"><img style="max-width: 150px; max-height: 150px;" src="<?= base_url('uploads/'.$imageArray[0]) ?>" srcset="<?= base_url('uploads/'.$imageArray[0]) ?>" alt="" /></a>
                  </div>
                  <div class="" style="margin-left:10px;">
                    <div class="align-items-center">
                        <span><?= $data->deskripsiProduk?>
                        </span>
                      </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="d-flex justify-content-between">
                  <div>
                    <div class="fs-16 text-ash ">Supplier From <?= $data->kota?></div>
                  </div>
                </div>
              </div>
            </div>
            <?php endforeach; ?>
            <!-- /.item -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.grid -->
        <nav class="d-flex" aria-label="pagination">
          <ul class="pagination">
            <li class="page-item disabled">
              <a class="page-link" href="#" aria-label="Previous">
                <span aria-hidden="true"><i class="uil uil-arrow-left"></i></span>
              </a>
            </li>
            <li class="page-item active"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
              <a class="page-link" href="#" aria-label="Next">
                <span aria-hidden="true"><i class="uil uil-arrow-right"></i></span>
              </a>
            </li>
          </ul>
          <!-- /.pagination -->
        </nav>
        <!-- /nav -->
      </div>
      <!-- /column -->
      <aside class="col-lg-3 sidebar">
          <div class="widget mt-1">
              <h4 class="mb-3">Categories</h4>
              <nav class="navbar list-unstyled ps-0 navbar-expand-lg navbar-expand-md navbar-expand-sm center-nav navbar-light navbar-bg-light">
                  <div class="container">
                      <div class="navbar-collapse offcanvas offcanvas-nav offcanvas-start my-auto">
                          <div class="offcanvas-body flex-column text-dark h-100">
                          <?php foreach ($kategori_structure as $row) : ?>
                            <?php if (!isset($previous_category) || $previous_category != $row['kategori']) : ?>
                              <ul class="navbar-nav ">
                                          <!-- Jika kategori sebelumnya belum di-set atau tidak sama dengan kategori saat ini -->
                                          <li class="dropdown dropdown-submenu dropend">
                                              <a class="dropdown-item dropdown-header "  ><?php echo $row['kategori']; ?></a>
                                              <ul class="dropdown-menu">
                                                  <li class="nav-item">
                                                      <a class="dropdown-item item-header" href="#"><?php echo $row['kategori']; ?></a>
                                                  </li>
                                                  <?php foreach ($kategori_structure as $subrow) : ?>
                                                      <?php if ($subrow['kategori'] == $row['kategori'] && $subrow['subkategori_a'] != null) : ?>
                                                          <!-- Jika subkategori A tidak null -->
                                                          <li class="dropdown dropdown-submenu dropend text-dark">
                                                              <a class="dropdown-item text-dark" href="#" ><?php echo $subrow['subkategori_a']; ?></a>
                                                              <ul class="dropdown-menu">
                                                                  <li class="nav-item">
                                                                      <a class="dropdown-item" href="#"><?php echo $subrow['subkategori_a']; ?></a>
                                                                  </li>
                                                                  <?php if ($subrow['subkategori_b'] != null) : ?>
                                                                      <!-- Jika subkategori B tidak null -->
                                                                      <li class="nav-item">
                                                                          <a class="dropdown-item" href="#"><?php echo $subrow['subkategori_b']; ?></a>
                                                                      </li>
                                                                  <?php endif; ?>
                                                              </ul>
                                                          </li>
                                                      <?php endif; ?>
                                                  <?php endforeach; ?>
                                              </ul>
                                          </li>
                              </ul>
                              <?php endif; ?>
                                      <?php $previous_category = $row['kategori']; // Set kategori sebelumnya untuk perbandingan selanjutnya ?>
                                  <?php endforeach; ?>
                          </div>
                          <!-- /.offcanvas-body -->
                      </div>
                      <!-- /.navbar-collapse -->
                  </div>
                  <!-- /.container -->
              </nav>
              <!-- /.navbar -->
          </div>
      </aside>
      <!-- /column .sidebar -->
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container -->
</section>
<!-- /section -->
<?php $this->load->view($footer); ?>