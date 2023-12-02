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
      <div class="col-lg-9 order-lg-2">
        <div class="row align-items-center mb-10 position-relative zindex-1">
          <div class="col-md-7 col-xl-8 pe-xl-20">
            <h2 class="display-6 mb-1">Product Wapik</h2>
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
            <div class=" item col-md-12 col-xl-12  p-3 bg-gradient-primary rounded" style="margin-bottom:-30px;">
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
                    <a href=""><img style="max-width: 150px; max-height: 150px;" src="<?= base_url() ?>./assets/front/img/produk/fiber.jpg" srcset="./assets/img/photos/sh1@2x.jpg 2x" alt="" /></a>
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
                    <a href="" class="text-blue fs-sm"><i class="uil uil-envelope"></i> Inquire now</a>
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
          <h4 class="widget-title mb-3">Categories</h4>
          <ul class="list-unstyled ps-0">
            <li class="mb-1">
              <a href="#" class="align-items-center rounded link-body" data-bs-toggle="collapse" data-bs-target="#clothing-collapse" aria-expanded="true"> Clothing <span class="fs-sm text-muted ms-1">(21)</span>
              </a>
              <div class="collapse show mt-1" id="clothing-collapse" style="">
                <ul class="btn-toggle-nav list-unstyled ps-2">
                  <li><a href="#" class="link-body">Dresses</a></li>
                  <li><a href="#" class="link-body">Knitwear</a></li>
                  <li><a href="#" class="link-body">Jeans</a></li>
                </ul>
              </div>
            </li>
            <li class="mb-1">
              <a href="#" class="align-items-center rounded collapsed link-body" data-bs-toggle="collapse" data-bs-target="#electronics-collapse" aria-expanded="false"> Electronics <span class="fs-sm text-muted ms-1">(19)</span>
              </a>
              <div class="collapse mt-1" id="electronics-collapse" style="">
                <ul class="btn-toggle-nav list-unstyled ps-2">
                  <li><a href="#" class="link-body">Headphones</a></li>
                  <li><a href="#" class="link-body">Computers</a></li>
                  <li><a href="#" class="link-body">Cameras</a></li>
                  <li><a href="#" class="link-body">Annually</a></li>
                </ul>
              </div>
            </li>
            <li class="mb-1">
              <a href="#" class="align-items-center rounded collapsed link-body" data-bs-toggle="collapse" data-bs-target="#shoes-collapse" aria-expanded="false"> Shoes <span class="fs-sm text-muted ms-1">(12)</span>
              </a>
              <div class="collapse mt-1" id="shoes-collapse" style="">
                <ul class="btn-toggle-nav list-unstyled ps-2">
                  <li><a href="#" class="link-body">Sneakers</a></li>
                  <li><a href="#" class="link-body">Sandals</a></li>
                  <li><a href="#" class="link-body">Boots</a></li>
                </ul>
              </div>
            </li>
            <li class="mb-1">
              <a href="#" class="align-items-center rounded collapsed link-body" data-bs-toggle="collapse" data-bs-target="#home-collapse" aria-expanded="false"> Home & Kitchen <span class="fs-sm text-muted ms-1">(16)</span>
              </a>
              <div class="collapse mt-1" id="home-collapse" style="">
                <ul class="btn-toggle-nav list-unstyled ps-2">
                  <li><a href="#" class="link-body">Clocks</a></li>
                  <li><a href="#" class="link-body">Kettles</a></li>
                  <li><a href="#" class="link-body">Kitchenware</a></li>
                </ul>
              </div>
            </li>
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