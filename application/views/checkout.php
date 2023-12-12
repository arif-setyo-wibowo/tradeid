<?php $this->load->view($header); ?>
<section class="wrapper bg-gray">
      <div class="container py-3 py-md-5">
        <nav class="d-inline-block" aria-label="breadcrumb">
          <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Shop</a></li>
            <li class="breadcrumb-item"><a href="#">Cart</a></li>
            <li class="breadcrumb-item active text-muted" aria-current="page">Checkout</li>
          </ol>
        </nav>
        <!-- /nav -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /section -->
    <section class="wrapper bg-light">
      <div class="container pt-12 pt-md-14 pb-14 pb-md-16">
        <div class="row gx-md-8 gx-xl-12 gy-12">
          <div class="col-lg-8">
            <h3 class="mb-4">Billing address</h3>
            <form class="needs-validation" novalidate>
              <div class="row g-3">
                <div class="col-sm-12">
                  <div class="form-floating">
                    <input type="text" class="form-control" id="firstName" placeholder="First name" value="" required>
                    <label for="firstName" class="form-label">First name</label>
                    <div class="invalid-feedback"> Valid first name is required. </div>
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-floating">
                    <input type="email" class="form-control" id="email" placeholder="you@example.com" required>
                    <label for="email" class="form-label">Email</label>
                    <div class="invalid-feedback"> Please enter a valid email address for shipping updates. </div>
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-floating">
                    <input type="number" class="form-control" id="email" placeholder="you@example.com" required>
                    <label for="phone" class="form-label">Phone Number</label>
                    <div class="invalid-feedback"> Please enter a valid Phone Number </div>
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-floating">
                    <input type="text" class="form-control" id="address" placeholder="1234 Main St" required>
                    <label for="address" class="form-label">Address</label>
                    <div class="invalid-feedback"> Please enter your shipping address. </div>
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-floating">
                    <input type="text" class="form-control" id="address" placeholder="1234 Main St" required>
                    <label for="address" class="form-label">Company Name</label>
                    <div class="invalid-feedback"> Please enter your Company Name </div>
                  </div>
                </div>
                <div class="col-md-5">
                  <div class="form-select-wrapper">
                    <select class="form-select" id="country" required>
                      <option value="">Country</option>
                      <option>United States</option>
                    </select>
                    <div class="invalid-feedback"> Please select a valid country. </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-select-wrapper">
                    <select class="form-select" id="state" required>
                      <option value="">State</option>
                      <option>California</option>
                    </select>
                    <div class="invalid-feedback"> Please provide a valid state. </div>
                  </div>
                </div>
              </div>
              <hr class="mt-7 mb-6">
              <div class="mt- mb-6">
              </div>
          </div>
          <!-- /column -->
          <div class="col-lg-4">
            <h3 class="mb-4">Order Summary</h3>
            <div class="col-lg-12 offset-lg-1 pricing-wrapper">
            <div class="pricing-switcher-wrapper switcher justify-content-start justify-content-lg-start" >
              <p class="mb-0 pe-3">Monthly</p>
              <div class="pricing-switchers">
                <div class="pricing-switcher mx-auto pricing-switcher-active"></div>
                <div class="pricing-switcher"></div>
                <div class="switcher-button bg-primary"></div>
              </div>
              <p class="mb-0 ps-3">Yearly <span class="text-red">(Save 30%)</span></p>
            </div>
            <div class="row gy-6 position-relative mt-5">
              <div class="shape bg-dot red rellax w-16 h-18" data-rellax-speed="1" style="bottom: -0.5rem; right: -1.6rem;"></div>
              <div class="col-md-12">
                <div class="pricing card shadow-lg text-center">
                  <div class="card-body pb-12">
                    <div class="prices text-dark">
                      <div class="price price-show justify-content-center"><span class="price-currency">Rp.</span><span class="price-value"> 300 K</span> <span class="price-duration">mo</span></div>
                      <div class="price price-hide fs-45 price-hidden justify-content"><span class="price-currency">Rp.</span> 2,5 jt<span class="price-value"></span> <span class="price-duration">yr</span></div>
                    </div>
                    <!--/.prices -->
                    <h4 class="card-title mt-2">Premium Member Supplier</h4>
                    <ul class="icon-list bullet-primary mt-7 mb-8">
                      <li><i class="uil uil-check fs-21"></i><span><strong></strong> Access Forum </span></li>
                      <li><i class="uil uil-check fs-21"></i><span><strong></strong> Access Data Demain </span></li>
                      <li><i class="uil uil-check fs-21"></i><span><strong>24/7</strong> Support  </span></li>
                      
                    </ul>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.pricing -->
              </div>
            </div>
            <!--/.row -->
          </div >
            <!-- /.shopping-cart-->
            <hr class="my-4">
            
            <a href="#" class="btn btn-primary rounded w-100 mt-3 ">Place Order</a>
          </div>
          <!-- /column -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /section -->
<?php $this->load->view($footer); ?>