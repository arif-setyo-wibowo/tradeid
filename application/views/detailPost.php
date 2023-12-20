<?php $this->load->view($header); ?>
<section class="wrapper bg-gradient-primary pt-10">
  <div class="container rounded bg-white pt-10 px-md-10 pb-10 pt-md-5 pb-md-15 mb-3 ">
    <div class="author-info d-md-flex align-items-center mb-3">
      <div class="d-flex align-items-center">
        <figure class="user-avatar"><img class="rounded-circle" alt="" src="<?= base_url('uploads/'.$posting[0]->gambarCompany)?>" /></figure>
        <div>
          <h6><a href="#" class="link-dark"><?= $posting[0]->nama?></a></h6>
          <span class="post-meta fs-15"><?= $posting[0]->namaPerusahaan ?></span>
        </div>
      </div>
      <div class="mt-3 mt-md-0 ms-auto">
              <button class="btn btn-soft-ash  btn-sm rounded-pill btn-icon btn-icon-start mb-0" data-id="<?= $posting[0]->idposting ?>" data-bs-toggle="modal" data-bs-target="#modal-signin"><i
                  class="uil uil-comments" ></i> Reply</button>
            </div>
    </div>
    <!-- /.author-info -->
    <p><?= $posting[0]->pesan?></p>
    <nav class="nav social mb-n12">
      <p><?= $posting[0]->created_at_posting?></p>
    </nav>
    <!-- /.social -->
    <hr />
    <div class="" id="comments">
      <h3 class="mb-6"><?= $countcomment?> Comments</h3>
        <?php if ($countcomment == 0) : ?>
        
        <?php else :?>
        <ol id="singlecomments" class="commentlist">
          <?php foreach($komen as $data) : ?>
            <?php if ($data->idbalas == null) : ?>
              <li class="comment">
                <div class="comment-header d-md-flex align-items-center">
                  <div class="d-flex align-items-center">
                    <figure class="user-avatar"><img class="rounded-circle" alt="" src="<?= base_url('uploads/'.$data->gambarCompany)?>" />
                    </figure>
                    <div>
                      <h6 class="comment-author"><?= $data->nama ?></h6>
                      <ul class="post-meta">
                        <li><i class="uil uil-calendar-alt"></i><?= $data->namaPerusahaan ?></li>
                      </ul>
                      <!-- /.post-meta -->
                    </div>
                    <!-- /div -->
                  </div>
                  <!-- /div -->
                  <div class="mt-3 mt-md-0 ms-auto">
                    <button class="btn btn-soft-ash  btn-sm rounded-pill btn-icon btn-icon-start mb-0" data-id="<?= $data->idkomen ?>" data-bs-toggle="modal" data-bs-target="#modal-balas" ><i
                        class="uil uil-comments"></i> Reply</button>
                  </div>
                  <!-- /div -->
                </div>
                <!-- /.comment-header -->
                <p><?= $data->pesankomen ?></p>
                <span class="text-dark fw-normal fs-12"><?= waktuTerakhir($data->created_at_komen)?></span>
                        
              </li>
            <?php elseif ($data->idkomen = $data->idbalas) : ?>
                <ul class="children">
                  <li class="comment">
                    <div class="comment-header d-md-flex align-items-center">
                      <div class="d-flex align-items-center">
                        <figure class="user-avatar"><img class="rounded-circle" alt="" src="<?= base_url('uploads/'.$data->gambarCompany)?>" />
                        </figure>
                        <div>
                          <h6 class="comment-author"><?= $data->nama ?></h6>
                          <ul class="post-meta">
                            <li><i class="uil uil-calendar-alt"></i><?= $data->idcompany ?></li>
                          </ul>
                          <!-- /.post-meta -->
                        </div>
                        <!-- /div -->
                      </div>
                      <!-- /div -->
                      <div class="mt-3 mt-md-0 ms-auto">
                        <button class="btn btn-soft-ash  btn-sm rounded-pill btn-icon btn-icon-start mb-0" data-id="<?= $data->idkomen ?>" data-bs-toggle="modal" data-bs-target="#modal-balas" ><i
                            class="uil uil-comments"></i> Reply</button>
                      </div>
                      <!-- /div -->
                    </div>
                    <!-- /.comment-header -->
                    <p><?= $data->pesankomen ?></p>
                    <span class="text-dark fw-normal fs-12"><?= waktuTerakhir($data->created_at_komen)?></span>
                  </li>
                </ul>
            <?php endif; ?>
          <?php endforeach; ?>
        </ol>
        <?php endif;?>
    </div>
    <!-- /#comments -->
  </div>
  <!-- /.container -->
</section>
<!-- /section -->

<div class="modal fade" id="modal-signin" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content text-center">
            <div class="modal-body">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <h2 class="mb-3 text-start">Reply</h2>
                <p class="lead mb-6 text-start">Your message will be sent to the comment section</p>
                <form class="text-start mb-3" action="<?= base_url('tambahKomen')?>" method="POST">
                  <div class="form-floating mb-4">
                      <input type="hidden" id="dataIdInput" name="idposting" class="form-control">
                  </div>
                  <div class="form-floating mb-4">
                      <textarea id="textareaExample" class="form-control" placeholder="Textarea" name="pesan" style="height: 150px" required></textarea>
                      <label for="textareaExample">Message</label>
                  </div>
                  <button type="submit" class="btn btn-primary rounded-pill btn-login w-100 mb-2" >Send Message</a>
                </form>
                <!-- /form -->
                <!--/.social -->
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modal-balas" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content text-center">
            <div class="modal-body">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <h2 class="mb-3 text-start">Reply</h2>
                <p class="lead mb-6 text-start">Your message will be sent to the comment section</p>
                <form class="text-start mb-3" action="<?= base_url('balasKomen')?>" method="POST">
                  <div class="form-floating mb-4">
                    <input type="hidden" name="idcompany" value="<?= $company[0]->idcompany ?>" class="form-control">
                      <input type="hidden" name="idposting" value="<?= $posting[0]->idposting ?>" class="form-control">
                      <input type="hidden" id="dataIdInpu" name="idkomen" class="form-control">
                  </div>
                  <div class="form-floating mb-4">
                      <textarea id="textareaExample" class="form-control" placeholder="Textarea" name="pesan" style="height: 150px" required></textarea>
                      <label for="textareaExample">Message</label>
                  </div>
                  <button type="submit" class="btn btn-primary rounded-pill btn-login w-100 mb-2" >Send Message</a>
                </form>
                <!-- /form -->
                <!--/.social -->
            </div>
        </div>
    </div>
</div>

<script>

document.getElementById('modal-signin').addEventListener('show.bs.modal', function (event) {
    var button = event.relatedTarget; // Button that triggered the modal
    var dataId = button.getAttribute('data-id'); // Extract data-id attribute
    document.getElementById('dataIdInput').value = dataId; // Set the value of the text input
  });

document.getElementById('modal-balas').addEventListener('show.bs.modal', function (event) {
    var button = event.relatedTarget; // Button that triggered the modal
    var dataId = button.getAttribute('data-id'); // Extract data-id attribute
    document.getElementById('dataIdInpu').value = dataId; // Set the value of the text input
  });
</script>

<?php $this->load->view($footer); ?>