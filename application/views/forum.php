<?php $this->load->view($header); ?>

<section class="wrapper bg-gradient-primary">
      <div class="container pt-10 pb-10 pt-md-5 pb-md-15 text-center">
        <div class="row">
          <div class="col-md-7 col-lg-6 col-xl-5 mx-auto">
            <h3 class="display-1 ">Forum Discussion</h3>
            <p class="lead px-lg-5 px-xxl-8">Find Solution or Question</p>
            <div class="mt-3 mt-md-0 ms-auto ">
            <button class="btn btn-soft-ash  btn-sm rounded-pill btn-icon btn-icon-start mb-0" data-bs-toggle="modal" data-bs-target="#modal-signin">
            <i class="uil uil-comment-message"></i> Add Posting
          </a>
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
          <div class="row gx-md-8 gy-10 gy-md-13 isotope container ">
            <?php foreach ($posting as $data) : ?>
              <div class=" item col-md-12 col-xl-12  p-5  shadow-xl rounded" style="margin-bottom:-30px;">
                <div class="row">
                  <div class="d-flex justify-content-between">
                    <div class="">
                      <div class="post-category text-dark h4"><?= $data->topic?></div>
                    </div>
                  </div>
                </div>
                <div class="row mt-3">
                  <div class="d-flex">
                    <div class="">
                    <img class="rounded-circle w-12 mb-4" src="<?= base_url('uploads/'.$data->gambarCompany)?>"alt="" />
                    </div>
                    <div class="px-2 row w-100" style="margin-left:10px;">
                      <div class="align-items-center d-blok col-md-8 col-lg-10">
                          <span class="text-dark fw-bold fs-20"><?= $data->nama ?></span>
                          <p class=" fw-bold fs-15"><?= $data->namaPerusahaan ?> </p>
                      </div>
                      <div class="align-items-center  mt-sm-n3 d-blok col-md-3 col-lg-2">
                          <span class="text-dark fw-normal fs-20"><?= waktuTerakhir($data->created_at_posting)?></span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="d-flex justify-content-between">
                    <div>
                      <div class="fs-18 text-ash "><?= $data->pesan?></div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="d-flex justify-content-between">
                    <div>
                      <div class="fs-18 text-ash fw-normal "><a class="nav-link" href="<?= base_url('forum/post/'.$data->idposting)?>"><i class="fs-20 uil uil-comment-message"></i>Comment </a></div>
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
                <form class="text-start mb-3" action="<?= base_url('tambahPosting')?>" method="POST">
                <div class="form-floating mb-4">
                    <input type="hidden" class="form-control" name="idcompany" value="<?= $company[0]->idcompany ?>" >
                    <input type="text" class="form-control" name="topic" required>
                    <label for="loginEmail">Topic</label>
                </div>
                <div class="form-floating mb-4">
                    <textarea id="textareaExample" class="form-control" name="pesan" placeholder="Textarea" style="height: 150px" required></textarea>
                    <label for="textareaExample">Message</label>
                </div>
                <button type="submit" class="btn btn-primary rounded-pill btn-login w-100 mb-2" >Send Message</button>
                </form>
                <!-- /form -->
                <!--/.social -->
            </div>
        </div>
    </div>
</div>

<?php $this->load->view($footer); ?>