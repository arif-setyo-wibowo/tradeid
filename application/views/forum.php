<?php $this->load->view($header); ?>

<section class="wrapper bg-gradient-primary">
      <div class="container pt-10 pb-10 pt-md-5 pb-md-15 text-center">
        <div class="row">
          <div class="col-md-7 col-lg-6 col-xl-5 mx-auto">
            <h3 class="display-1 ">Forum Discussion</h3>
            <p class="lead px-lg-5 px-xxl-8">Find Solution or Question</p>
          </div>
          <!-- /column -->
        </div>
        <!-- /.row -->
      </div>
    <!-- /.container -->
</section>
    <!-- /section -->
<section class="wrapper ">
  <div class="container ">
      <div class="grid mx-auto grid-view projects-masonry shop mb-10 " style="max-width:1200px;">
          <div class="row gx-md-8 gy-10 gy-md-13 isotope container ">
            <div class=" item col-md-12 col-xl-12  p-5  shadow-xl rounded" style="margin-bottom:-30px;">
              <div class="row">
                <div class="d-flex justify-content-between">
                  <div class="">
                    <div class="post-category text-dark h4">Bagaimana cara menginstall NextJS versi 13?</div>
                  </div>
                </div>
              </div>
              <div class="row mt-3">
                <div class="d-flex">
                  <div class="">
                  <img class="rounded-circle w-12 mb-4" src="<?= base_url()?>./assets/front/img/avatars/te1.jpg" srcset="<?= base_url()?>./assets/front/img/avatars/te1@2x.jpg 2x" alt="" />
                  </div>
                  <div class="px-2 row w-100" style="margin-left:10px;">
                    <div class="align-items-center d-blok col-md-8 col-lg-10">
                        <span class="text-dark fw-bold fs-20">Ahmad Romawi</span>
                        <p class=" fw-bold fs-15">PT Hazzelnut </p>
                    </div>
                    <div class="align-items-center  mt-sm-n3 d-blok col-md-3 col-lg-2">
                        <span class="text-dark fw-normal fs-20">2 hari lalu</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="d-flex justify-content-between">
                  <div>
                    <div class="fs-18 text-ash ">Halo teman-teman semuanya.
                    Saya punya pertanyaan, tentang cara untuk menginstall NextJS versi 13, yang dimana NextJS 13 adalah versi terbaru. 
                    Saya mempunyai masalah dengan instalasi yang terbaru,</div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="d-flex justify-content-between">
                  <div>
                    <div class="fs-18 text-ash fw-normal "><a class="nav-link" href="<?= base_url()?>/forum/post"><i class="fs-20 uil uil-comment-message"></i> 10 Comment </a></div>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.item -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.grid -->
        <nav class="d-flex mx-auto" aria-label="pagination">
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
</section>
    <!-- /section -->

<?php $this->load->view($footer); ?>