<?php $this->load->view($header); ?>

<section class="wrapper bg-gradient-primary">
  <div class="container py-3 py-md-5">
    <nav class="d-inline-block" aria-label="breadcrumb">
      <ol class="breadcrumb mb-0">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Supplier</li>
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
            <h2 class="display-6 mb-1">Find All Supplier</h2>
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
            <div class=" item col-md-6 col col-xl-4  p-3  rounded" style="margin-bottom:-30px;">
            <div class="card">
                  <div class="card-body text-center">
                    <img class="rounded-circle w-15 mb-4" src="<?= base_url()?>./assets/front/img/avatars/te1.jpg" srcset="<?= base_url()?>./assets/front/img/avatars/te1@2x.jpg 2x" alt="" />
                    <h4 class="mb-1"><a href="<?= base_url('front/supplier/viewcompany')?>" class="link-dark">PT Mencari Cinta Sejati</a></h4>
                    <div class="meta mb-2"><a href=""><a href="" class="text-blue">Supplier Of Coconut </a></div>
                    <p class="mb-2">We have a variety of the best products from coconut derivatives</p>
                    <div class="text-center w100">
                    <nav class="navjustify-center social mb-0">
                      <a href="#"><i class="uil uil-instagram"></i></a>
                      <a href="#"><i class="uil uil-linkedin"></i></a>
                      <a href="#"><i class="uil uil-facebook-f"></i></a>
                      <a href="#"><i class="uil uil-dribbble"></i></a>
                    </nav>
                    </div>
                    <!-- /.social -->
                  </div>
                  <!--/.card-body -->
                </div>
                <!-- /.card -->
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
            <a href="" class="btn btn-primary rounded-pill btn-login w-100 mb-2" >Send Inquire</a>
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