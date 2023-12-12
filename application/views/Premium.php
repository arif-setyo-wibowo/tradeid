<?php $this->load->view($header); ?>
<div class="h-10 bg-gradient-primary"></div>
<section class="wrapper mb-0 bg-gradient-reverse-primary">
      <div class="container py-14 pt-md-14 pb-md-18">
        <div class="row gy-6 mb-14 mb-md-18">
          <div class="col-lg-4">
            <h2 class="fs-16 text-uppercase text-muted mt-lg-18 mb-3">Our Pricing</h2>
            <h3 class="display-4 mb-3">We offer great and premium prices.</h3>
            <p>We provide additional services for you and experience full service. No credit card required! <a href="#" class="hover"></a></p>
            <a href="#benefit" class="btn btn-primary rounded-pill mt-2">See What You Get</a>
          </div>
          <!--/column -->
          <div class="col-lg-7 offset-lg-1 pricing-wrapper">
            <div class="pricing-switcher-wrapper switcher justify-content-start justify-content-lg-start" style="margin-left:20px;">
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
              <div class="col-md-6">
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
                    <a href="<?= base_url()?>checkout" class="btn btn-primary rounded-pill">Get Now</a>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.pricing -->
              </div>
            </div>
            <!--/.row -->
          </div >
          <!--/column -->
        </div>
        <!--/.row -->
    
        <section id="benefit">
        <div  class="row gx-lg-8 gx-xl-12 gy-10 mb-10  align-items-center">
          <div class="col-lg-7">
            <figure><img class="w-auto" src="<?= base_url()?>./assets/front/img/illustrations/i5.png" srcset="<?= base_url()?>./assets/front/img/illustrations/i5@2x.png 2x" alt="" /></figure>
          </div>
          <!--/column -->
          <div class="col-lg-5">
            <h2 class="fs-16 text-uppercase text-muted mb-3">Let’s Talk</h2>
            <h3 class="display-4 mb-3">Let's make something great together. We are trusted by over 5000+ clients.</h3>
            <p>Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Maecenas faucibus mollis interdum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
            <a href="#" class="btn btn-primary rounded-pill mt-2">Join Us</a>
          </div>
          <!--/column -->
        </div>
        <!--/.row -->
        </section>
      </div>
      <!-- /.container -->
    </section>
    <!-- /section -->
  </div>
  <?php $this->load->view($footer); ?>