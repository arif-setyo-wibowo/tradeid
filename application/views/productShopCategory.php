<?php $this->load->view($header); ?>

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
  <div class="container pb-14 pb-md-16 pt-12">
    <div class="row gy-10">
        <?php if($product == null) : ?>
            <div class="col-lg-9 order-lg-2">
                <div class="row align-items-center mb-10 position-relative zindex-1">
                <div class="col-md-7 col-xl-8 pe-xl-20">
                    <h2 class="display-6 mb-1">Product </h2>
                    <!-- <p class="mb-0 text-muted">Showing 1–9 of 30 results</p> -->
                </div>
                <!--/column -->
                <div class="col-md-5 col-xl-4 ms-md-auto text-md-end mt-5 mt-md-0">
                    <div class="form-select-wrapper">
                    <!-- <select class="form-select">
                        <option value="popularity">Sort by popularity</option>
                        <option value="rating">Sort by average rating</option>
                        <option value="newness">Sort by newness</option>
                        <option value="price: low to high">Sort by price: low to high</option>
                        <option value="price: high to low">Sort by price: high to low</option>
                    </select> -->
                    </div>
                    <!--/.form-select-wrapper -->
                </div>
                <!--/column -->
                </div>
                <!--/.row -->
                <div class="grid grid-view projects-masonry shop mb-13">
                    <?= '<h2 class="display-6 mb-1">No Product </h2>'?>
                <!-- /.row -->
                </div>
                <!-- /.grid -->
                <?= $pagination; ?>
                <!-- /nav -->
            </div>
        <?php else : ?>
            <div class="col-lg-9 order-lg-2">
                <div class="row align-items-center mb-10 position-relative zindex-1">
                <div class="col-md-7 col-xl-8 pe-xl-20">
                    <h2 class="display-6 mb-1">Product <?= $product[0]->namaKategori?></h2>
                    <!-- <p class="mb-0 text-muted">Showing 1–9 of 30 results</p> -->
                </div>
                <!--/column -->
                <div class="col-md-5 col-xl-4 ms-md-auto text-md-end mt-5 mt-md-0">
                    <div class="form-select-wrapper">
                    <!-- <select class="form-select">
                        <option value="popularity">Sort by popularity</option>
                        <option value="rating">Sort by average rating</option>
                        <option value="newness">Sort by newness</option>
                        <option value="price: low to high">Sort by price: low to high</option>
                        <option value="price: high to low">Sort by price: high to low</option>
                    </select> -->
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
                            <h4 class="post-title h4 fs-18"><a href="<?= base_url('supplier/detail/'.$data->idcompany) ?>" class="link-dark"><?= $data->namaPerusahaan?></a></h4>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="d-flex mb-2">
                        <div class="">
                        <?php  $imageArray = explode(',', $data->gambar);
                            ?>
                            <a href="<?= base_url('product/productDetail/'.$data->idproduct)?>" ><img style="max-width: 150px; max-height: 150px;" src="<?= base_url('uploads/'.$imageArray[0]) ?>" srcset="./assets/img/photos/sh1@2x.jpg 2x" alt="" /></a>
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
                <?= $pagination; ?>
                <!-- /nav -->
            </div>
        <?php endif; ?>
      <!-- /column -->
        <aside class="col-lg-3 sidebar">
            <div class="widget mt-1">
                <h4 class="widget-title mb-3">Categories</h4>
                <ul class="list-unstyled ps-0">
                <?php
                $current_kategori = '';
                foreach ($kategori_structure as $kategori_row):
                    // Filter hanya kategori yang memiliki subkategori_a
                    $kategori_a_exists = false;
                    foreach ($kategori_structure as $subkategori_a_check):
                        if ($kategori_row['kategori'] == $subkategori_a_check['kategori']) {
                            $kategori_a_exists = true;
                            break;
                        }
                    endforeach;

                    if (!$kategori_a_exists) {
                        continue; // Skip kategori yang tidak memiliki subkategori_a
                    }

                    if ($current_kategori != $kategori_row['kategori']):
                        // Tutup tag </ul></li> dari subkategori_a dan subkategori_b sebelumnya
                        if ($current_kategori != ''):
                            echo '</li>';
                        endif;

                        $current_kategori = $kategori_row['kategori'];
                ?>
                        <li class="mb-1">
                            <a href="<?= base_url('product/'.$kategori_row['idkategori'])?>"  class="align-items-center rounded link-body" data-bs-target="#<?= strtodash($current_kategori) ?>-collapse" aria-expanded="true"><?= $current_kategori ?> <span class="fs-sm text-muted ms-1"></span>
                            </a>
                            <div class="collapse show mt-1" id="<?= strtodash($current_kategori) ?>-collapse" style="">
                                <ul class="btn-toggle-nav list-unstyled ps-2">
                                    <?php
                                    $current_subkategori_a = '';
                                    foreach ($kategori_structure as $subkategori_a_row):
                                        if ($current_kategori == $subkategori_a_row['kategori'] && $current_subkategori_a != $subkategori_a_row['subkategori_a']):
                                    ?>
                                            <li><a href="<?= base_url('product/'.$kategori_row['idkategori'].'/'.$subkategori_a_row['idsubkategori_a']) ?>" class="align-items-center rounded link-body" data-bs-target="#<?= strtodash($current_kategori) ?>-<?= strtodash($current_subkategori_a) ?>-collapse" aria-expanded="true"><?= $subkategori_a_row['subkategori_a'] ?></a>
                                                <div class="collapse show mt-1" id="<?= strtodash($current_kategori) ?>-<?= strtodash($current_subkategori_a) ?>-collapse" style="">
                                                    <ul class="btn-toggle-nav list-unstyled ps-2">
                                                        <?php
                                                        $current_subkategori_a = $subkategori_a_row['subkategori_a'];
                                                        $current_subkategori_b = '';
                                                        foreach ($kategori_structure as $subkategori_b_row):
                                                            if ($current_kategori == $subkategori_b_row['kategori'] && $current_subkategori_a == $subkategori_b_row['subkategori_a'] && $current_subkategori_b != $subkategori_b_row['subkategori_b']):
                                                        ?>
                                                                <li><a href="<?= base_url('product/'.$kategori_row['idkategori'].'/'.$subkategori_a_row['idsubkategori_a'].'/'.$subkategori_b_row['idsubkategori_b']) ?>" class="link-body"><?= $subkategori_b_row['subkategori_b'] ?></a></li>
                                                        <?php
                                                                $current_subkategori_b = $subkategori_b_row['subkategori_b'];
                                                            endif;
                                                        endforeach;
                                                        ?>
                                                    </ul>
                                                </div>
                                            </li>
                                    <?php
                                        endif;
                                    endforeach;
                                    ?>
                                </ul>
                            </div>
                        </li>
                    <?php endif; ?>
                <?php endforeach; ?>
            </ul>
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