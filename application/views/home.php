<?php $this->load->view($header); ?>
<style>
  .form-control{
    margin-right: 30px;
  }
@media only screen and (max-width: 767px){
  .form-control{
    margin-right: 0px;
  }

  
}

</style>
<section class="wrapper bg-gradient-primary">
    <div class="container pt-7 pt-md-11 pb-8">
        <div class="row gx-0 gy-10 align-items-center">
          <div class="col-lg-6" data-cues="slideInDown" data-group="page-title" data-delay="600">
            <h1 class="display-1  mb-4">Connecting the World, Sourcing Indonesia's  <span class="underline-3 style-3 primary">Finest.</span></h1>
            <p class="lead fs-24 lh-sm  mb-7 pe-md-18 pe-lg-0 pe-xxl-15">Find Company, Product, Supplier what u need</p>
            <div>
            <div class="row">
              <div class="col-12 col-md-8">
                <form action="<?= base_url('search')?>" method="get">
                  <div class="form-floating input-group" >
                    <input type="text" class="form-control border-0 rounded" name="search" placeholder="Find Supplier, Product" id="analyze" style="">
                    <label for="analyze">Find Supplier, Product</label>
                    <div class=""></div>
                  </div>
              </div>
              <div class="col-12 col-md-4 mt-3 mt-md-0">
                  <div class="d-grid gap-1 d-md-flex justify-content-md-end">
                    <button class="btn btn-md btn-primary rounded me-md-2 mb-2 mb-md-0"  type="submit" name="search_type" value="supplier">Supplier</button>
                    <button class="btn btn-md btn-primary rounded" type="submit" name="search_type" value="product">Product</button>
                  </div>
                </form>
              </div>
            </div>
            </div>
          </div>
          <!-- /column -->
          <div class="col-lg-5 offset-lg-1 mb-n13" data-cues="slideInDown">
            <div class="position-relative">
              <figure class="rounded shadow-lg"><img src="<?= base_url()?>./assets/front/img/photos/about7.jpg" srcset="<?= base_url()?>./assets/front/img/photos/about13@2x.jpg 2x" alt=""></figure>
            </div>
            <!-- /div -->
          </div>
          <!-- /column -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /section -->
    <section class="wrapper bg-light mt-7">
      <div class="container pt-14 pt-md-16">
        <div class="row text-center">
          <div class="col-md-10 offset-md-1 col-lg-8 offset-lg-2">
            <h2 class="fs-16 text-uppercase text-muted mb-3"></h2>
            <h3 class="display-4 mb-10 px-xl-10">Best Commodity In Indonesia</h3>
          </div>
          <!-- /column -->
        </div>
        <!-- /.row -->
        <div class="position-relative">
          <div class="shape rounded-circle bg-soft-blue rellax w-16 h-16" data-rellax-speed="1" style="bottom: -0.5rem; right: -2.2rem; z-index: 0;"></div>
          <div class="shape bg-dot primary rellax w-16 h-17" data-rellax-speed="1" style="top: -0.5rem; left: -2.5rem; z-index: 0;"></div>
          <div class="row gx-md-5 gy-5 text-center">
            <div class="col-md-6 col-xl-3">
              <div class="card shadow-lg">
                <div class="card-body">
                  <img src="<?= base_url()?>./assets/front/img/icons/kopi.png" class="svg-inject icon-svg icon-svg-md text-yellow mb-3" alt="" />
                  <h4>Coffe</h4>
                  <p class="mb-2"> Coffee is one of Indonesia's agricultural products which is a leading export commodity.</p>
                  <a href="#" class="more hover link-blue">Find Supplier</a>
                </div>
                <!--/.card-body -->
              </div>
              <!--/.card -->
            </div>
            <!--/column -->
            <div class="col-md-6 col-xl-3">
              <div class="card shadow-lg">
                <div class="card-body">
                  <img src="<?= base_url()?>./assets/front/img/icons/udang.png" class="svg-inject icon-svg icon-svg-md text-red mb-3" alt="" />
                  <h4>Shrimp</h4>
                  <p class="mb-2">Memberikan anda pembelajaran tentang pembuatan web front-end dan back-end </p>
                  <a href="#" class="more hover link-blue">Find Supplier</a>
                </div>
                <!--/.card-body -->
              </div>
              <!--/.card -->
            </div>
            <!--/column -->
            <div class="col-md-6 col-xl-3">
              <div class="card shadow-lg">
                <div class="card-body">
                  <img src="<?= base_url()?>./assets/front/img/icons/minyak-kelapa.png" class="svg-inject icon-svg icon-svg-md text-green mb-3" alt="" />
                  <h4>Coconut Oil</h4>
                  <p class="mb-2">Pembelajaran tentang pembuatan aplikasi mobile dengan framework yang kekinian</p>
                  <a href="#" class="more hover link-blue">Find Supplier</a>
                </div>
                <!--/.card-body -->
              </div>
              <!--/.card -->
            </div>
            <!--/column -->
            <div class="col-md-6 col-xl-3">
              <div class="card shadow-lg">
                <div class="card-body">
                  <img src="<?= base_url()?>./assets/front/img/icons/kakao.png" class="svg-inject icon-svg icon-svg-md text-blue mb-3" alt="" />
                  <h4>Cacao</h4>
                  <p class="mb-2">Pembelajaran tentang Pembelajaran mesin dan deploy model A dengan Python</p>
                  <a href="#" class="more hover link-blue">Find Supplier</a>
                </div>
                <!--/.card-body -->
              </div>
              <!--/.card -->
            </div>
            <!--/column -->
          </div>
          <!--/.row -->
        </div>
        <!-- /.position-relative -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /section -->
    <section class="wrapper bg-gradient-reverse-primary">
    
      <!-- /.container -->
      <div class="container py-16 py-md-18">
        <div class="row gx-md-8 gx-xl-12 gy-10 mb-14 mb-md-18 align-items-center">
          <div class="col-lg-6 order-lg-2">
            <div class="card shadow-lg me-lg-6">
              <div class="card-body p-6">
                <div class="d-flex flex-row">
                  <div>
                    <span class="icon btn btn-circle btn-lg btn-soft-primary pe-none me-4"><span class="number">01</span></span>
                  </div>
                  <div>
                    <h4 class="mb-1">Search for products and suppliers</h4>
                    <p class="mb-0">Find products and suppliers according to your preferences.</p>
                  </div>
                </div>
              </div>
              <!--/.card-body -->
            </div>
            <!--/.card -->
            <div class="card shadow-lg ms-lg-13 mt-6">
              <div class="card-body p-6">
                <div class="d-flex flex-row">
                  <div>
                    <span class="icon btn btn-circle btn-lg btn-soft-primary pe-none me-4"><span class="number">02</span></span>
                  </div>
                  <div>
                    <h4 class="mb-1">Choose Product or Supplier</h4>
                    <p class="mb-0">Select a Supplier and Product by examining their relevant details that suit your needs.</p>
                  </div>
                </div>
              </div>
              <!--/.card-body -->
            </div>
            <!--/.card -->
            <div class="card shadow-lg mx-lg-6 mt-6">
              <div class="card-body p-6">
                <div class="d-flex flex-row">
                  <div>
                    <span class="icon btn btn-circle btn-lg btn-soft-primary pe-none me-4"><span class="number">03</span></span>
                  </div>
                  <div>
                    <h4 class="mb-1">Contact Your Chosen Supplier</h4>
                    <p class="mb-0">Inquire directly with your preferred supplier so they can reach out to you further.</p>
                  </div>
                </div>
              </div>
              <!--/.card-body -->
            </div>
            <!--/.card -->
          </div>
          <!--/column -->
          <div class="col-lg-6">
            <h2 class="fs-16 text-uppercase text-muted mb-3"></h2>
            <h3 class="display-4 mb-5">Here are 3 work steps to connect you with suppliers.</h3>
            <p>We help you find the best products and connect you with product suppliers from Indonesia easily</p>
            <a href="#" class="btn btn-primary rounded-pill mb-0">Find Now</a>
          </div>
          <!--/column -->
        </div>
        <!--/.row -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /section -->
    <section class="wrapper bg-light angled upper-start lower-start">
      <div class="container   pb-md-15">
        
      </div>
      <!-- /.container -->
    </section>
    <!-- /section -->
   
    <section class="wrapper bg-light">
      <div class="container">
        <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center">
          <div class="col-lg-7 order-lg-2">
            <figure><img class="w-auto" src="<?= base_url()?>./assets/front/img/illustrations/i8.png" srcset="<?= base_url()?>./assets/front/img/illustrations/i8@2x.png 2x" alt="" /></figure>
          </div>
          <!--/column -->
          <div class="col-lg-5">
            <h2 class="fs-16 text-uppercase text-muted mb-3">Our Solutions</h2>
            <h3 class="display-4 mb-5">We make your spending stress-free for you to have the perfect control.</h3>
            <p class="mb-6">Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Praesent commodo cursus.</p>
            <div class="row gy-3">
              <div class="col-xl-6">
                <ul class="icon-list bullet-bg bullet-soft-primary mb-0">
                  <li><span><i class="uil uil-check"></i></span><span>Aenean quam ornare. Curabitur blandit.</span></li>
                  <li class="mt-3"><span><i class="uil uil-check"></i></span><span>Nullam quis risus eget urna mollis ornare.</span></li>
                </ul>
              </div>
              <!--/column -->
              <div class="col-xl-6">
                <ul class="icon-list bullet-bg bullet-soft-primary mb-0">
                  <li><span><i class="uil uil-check"></i></span><span>Etiam porta euismod malesuada mollis.</span></li>
                  <li class="mt-3"><span><i class="uil uil-check"></i></span><span>Vivamus sagittis lacus vel augue rutrum.</span></li>
                </ul>
              </div>
              <!--/column -->
            </div>
            <!--/.row -->
          </div>
          <!--/column -->
        </div>
        <!--/.row -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /section -->
    <section class="wrapper bg-gradient-reverse-primary">
      <div class="container py-14 py-md-18">
        <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center">
          <div class="col-lg-7">
            <div class="row gx-md-5 gy-5">
              <div class="col-md-6 col-xl-5 align-self-end">
                <div class="card shadow-lg">
                  <div class="card-body">
                    <blockquote class="icon mb-0">
                      <p>“Cum sociis natoque penatibus et magnis dis parturient montes.”</p>
                      <div class="blockquote-details">
                        <div class="info p-0">
                          <h5 class="mb-1">Coriss Ambady</h5>
                          <p class="mb-0">Financial Analyst</p>
                        </div>
                      </div>
                    </blockquote>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.card -->
              </div>
              <!--/column -->
              <div class="col-md-6 align-self-end">
                <div class="card shadow-lg">
                  <div class="card-body">
                    <blockquote class="icon mb-0">
                      <p>“Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Vestibulum id ligula porta felis euismod.”</p>
                      <div class="blockquote-details">
                        <div class="info p-0">
                          <h5 class="mb-1">Cory Zamora</h5>
                          <p class="mb-0">Marketing Specialist</p>
                        </div>
                      </div>
                    </blockquote>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.card -->
              </div>
              <!--/column -->
              <div class="col-md-6 col-xl-5 offset-xl-1">
                <div class="card shadow-lg">
                  <div class="card-body">
                    <blockquote class="icon mb-0">
                      <p>“Donec id elit non porta gravida at eget metus. Duis mollis est luctus commodo nisi erat.”</p>
                      <div class="blockquote-details">
                        <div class="info p-0">
                          <h5 class="mb-1">Barclay Widerski</h5>
                          <p class="mb-0">Sales Specialist</p>
                        </div>
                      </div>
                    </blockquote>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.card -->
              </div>
              <!--/column -->
              <div class="col-md-6 align-self-start">
                <div class="card shadow-lg">
                  <div class="card-body">
                    <blockquote class="icon mb-0">
                      <p>“Nisi erat porttitor ligula, eget lacinia odio sem nec elit. Aenean eu leo pellentesque.”</p>
                      <div class="blockquote-details">
                        <div class="info p-0">
                          <h5 class="mb-1">Jackie Sanders</h5>
                          <p class="mb-0">Investment Planner</p>
                        </div>
                      </div>
                    </blockquote>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.card -->
              </div>
              <!--/column -->
            </div>
            <!--/.row -->
          </div>
          <!--/column -->
          <div class="col-lg-5">
            <h2 class="fs-16 text-uppercase text-muted mb-3 mt-lg-n6">Our Community</h2>
            <h3 class="display-4 mb-5">Don't take our word for it. See what customers are saying about us.</h3>
            <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Nulla vitae elit libero, a pharetra augue. Maecenas faucibus mollis interdum. Vestibulum id ligula porta felis euismod.</p>
            <a href="#" class="btn btn-primary rounded-pill mt-3">All Testimonials</a>
          </div>
          <!--/column -->
        </div>
        <!--/.row -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /section -->
    <section class="wrapper bg-light angled upper-end lower-end">
      <div class="container py-14 pt-md-14 pb-md-18">
        <div class="row gx-lg-8 gx-xl-12 gy-10 mb-10 mb-md-14 align-items-center">
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
        <div class="px-lg-5">
          <div class="row gx-0 gx-md-8 gx-xl-12 gy-8 align-items-center">
            <div class="col-4 col-md-2">
              <figure class="px-5 px-md-0 px-lg-2 px-xl-3 px-xxl-4"><img src="<?= base_url()?>./assets/front/img/brands/c1.png" alt="" /></figure>
            </div>
            <!--/column -->
            <div class="col-4 col-md-2">
              <figure class="px-5 px-md-0 px-lg-2 px-xl-3 px-xxl-4"><img src="<?= base_url()?>./assets/front/img/brands/c2.png" alt="" /></figure>
            </div>
            <!--/column -->
            <div class="col-4 col-md-2">
              <figure class="px-5 px-md-0 px-lg-2 px-xl-3 px-xxl-4"><img src="<?= base_url()?>./assets/front/img/brands/c3.png" alt="" /></figure>
            </div>
            <!--/column -->
            <div class="col-4 col-md-2">
              <figure class="px-5 px-md-0 px-lg-2 px-xl-3 px-xxl-4"><img src="<?= base_url()?>./assets/front/img/brands/c4.png" alt="" /></figure>
            </div>
            <!--/column -->
            <div class="col-4 col-md-2">
              <figure class="px-5 px-md-0 px-lg-2 px-xl-3 px-xxl-4"><img src="<?= base_url()?>./assets/front/img/brands/c5.png" alt="" /></figure>
            </div>
            <!--/column -->
            <div class="col-4 col-md-2">
              <figure class="px-5 px-md-0 px-lg-2 px-xl-3 px-xxl-4"><img src="<?= base_url()?>./assets/front/img/brands/c6.png" alt="" /></figure>
            </div>
            <!--/column -->
          </div>
          <!--/.row -->
        </div>
        <!-- /div -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /section -->
  </div>
  <!-- /.content-wrapper -->
  <?php $this->load->view($footer); ?>
  