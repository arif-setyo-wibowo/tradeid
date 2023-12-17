<?php $this->load->view($header); ?>

<section class="wrapper bg-gradient-primary">
      <div class="container pt-10 pb-10 pt-md-5 pb-md-15 text-center">
        <div class="row">
          <div class="col-md-7 col-lg-6 col-xl-5 mx-auto">
            <h3 class="display-1 ">Data Buyer</h3>
            <p class="lead px-lg-5 px-xxl-8">Find you Connection</p>
            <div class="mt-3 mt-md-0 ms-auto ">
      </div> 
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
          <div class="row gx-md-8 gy-10 gy-md-13 isotope container " >
            <?php foreach($buyer as $data) : ?>
            <div class=" item col-md-12 col-xl-12  p-5  shadow-xl rounded" style="margin-bottom:-30px;">
              <div class="row">
                <div class="d-flex justify-content-between">
                  <div class="">
                    <div class="post-category text-dark h6">Wanted : <a href="" class="text-blue"><?= $data->produkBuyer?>  </a></div>
                  </div>
                  <div class="align-items-center  mt-sm-n3 d-blok col-md-3 col-lg-2">
                        <span class="text-dark fw-normal fs-18 fs-sm-12"><?= $data->tglbuyer?></span>
                    </div>
                </div>
              </div>
              <div class="row">
                <div class="d-flex">
                  <div class=" row w-100" >
                    <div class="align-items-center d-blok col-md-8 col-lg-10">
                        <span class="text-dark fw-bold fs-20">Buyer from : <?= $data->negaraBuyer?></span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="d-flex justify-content-between">
                  <div>
                    <div class="fs-18 text-ash "><?= $data->deskripsiBuyer?>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="d-flex justify-content-between mt-1">
                  <div>
                    <div class=" text-ash fw-normal text-blue"><a href="" class="text-blue"><?= $data->namaSubKategori?> | </a><a href="" class="text-blue"> <?= $data->namaSubKategori_b?>  </a></div>
                  </div>
                  <div>
                    <div class=" text-ash fw-normal text-blue"><a href="<?= base_url('databuyer/detail/'.$data->idbuyer)?>" class="text-blue">see more</a></div>
                  </div>
                </div>
              </div>
            </div>
            <?php endforeach;?>
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

<div class="modal fade" id="modal-signin" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content text-center">
            <div class="modal-body">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <h2 class="mb-3 text-start">Reply</h2>
                <p class="lead mb-6 text-start">Your message will be Post to the comment section</p>
                <form class="text-start mb-3">
                <div class="form-floating mb-4">
                    <input type="text" class="form-control" placeholder="Email" value="" >
                    <label for="loginEmail">Topic</label>
                </div>
                <div class="form-floating mb-4">
                    <textarea id="textareaExample" class="form-control" placeholder="Textarea" style="height: 150px" required></textarea>
                    <label for="textareaExample">Message</label>
                </div>
                <a href="" class="btn btn-primary rounded-pill btn-login w-100 mb-2" >Send Message</a>
                </form>
                <!-- /form -->
                <!--/.social -->
            </div>
        </div>
    </div>
</div>

<?php $this->load->view($footer); ?>