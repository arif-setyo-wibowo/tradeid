<?php $this->load->view($header); ?>
<section class="wrapper bg-gradient-primary pt-10 px-3">
  <div class="container rounded bg-white pt-10  px-md-10 pb-10 pt-md-5 pb-md-15 ">
    <div class="author-info d-md-flex align-items-center mb-3">
      <div class="d-flex align-items-center">
        <div>
          <h6>Wanted  <?= $buyer[0]->produkBuyer?></h6>
          
        </div>
      </div>
      <div class="mt-3 mt-md-0 ms-auto">
      <span class="h6">Buyer From : <?= $buyer[0]->negaraBuyer?></span>
            </div>
    </div>
    <!-- /.author-info -->
    <p><?= $buyer[0]->deskripsiBuyer?></p>
    <nav class="nav social mb-n14">
      <p><?= $buyer[0]->tglbuyer?></p>
    </nav>
    <!-- /.social -->
    <hr />
    <div class="mt-n13" id="comments">
      <h3 class="mb-6 mt-n3">Contact Buyer</h3>
      <ol id="singlecomments" class="commentlist">
        <li class="comment">
          <div class="comment-header d-md-flex align-items-center">
            <div class="d-flex align-items-center">
              <div>
                <h6 class="comment-author">Email :<span class="fw-normal"> <?= $buyer[0]->emailBuyer?></span></h6>
                <h6 class="comment-author">Phone :<span class="fw-normal"> <?= $buyer[0]->telpBuyer?></span></h6>
                <h6 class="comment-author">Address :<span class="fw-normal"> <?= $buyer[0]->alamatBuyer?></span></h6>
                <!-- /.post-meta -->
              </div>
              <!-- /div -->
            </div>
            <!-- /div -->
            <div class="mt-3 mt-md-0 ms-auto">
              
            </div>
            <!-- /div -->
          </div>
          <!-- /.comment-header -->
        </li>
      </ol>
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
                <form class="text-start mb-3">
                <div class="form-floating mb-4">
                    <input type="text" class="form-control" placeholder="Email" value="" >
                    <label for="loginEmail">Your Name</label>
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