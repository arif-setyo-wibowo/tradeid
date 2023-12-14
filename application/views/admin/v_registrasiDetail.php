<?php $this->load->view($header)?>
<!-- Main Container -->
<main id="main-container">
            <!-- Page Content -->
            <div class="content">
                
            </div>
            <!-- END Page Content -->
            <div class="content">
          <!-- Discussion -->
          <div class="block block-rounded">
            <div class="block-header block-header-default">
              <h3 class="block-title">Hey all! I just registed my company!</h3>
              <div class="block-options">
                <a class="btn-block-option me-2" href="#forum-reply-form">
                  
                </a>
                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="fullscreen_toggle"></button>
                <button  type="button" class="btn-block-option" >
                  <a href="<?= base_url('admin/supplier')?>">
                  <i class="fa fa-reply text-muted"></i>
                  </a>
                </button>
              </div>
            </div>
            <div class="block-content">
              <table class="table table-borderless">
                <tbody>
                  <tr class="bg-body-light">
                    <td class="d-none d-sm-table-cell"></td>
                    <td class="fs-sm text-muted">
                      <a class="fw-semibold" href="be_pages_generic_profile.html"><?= $supplier[0]->nama?></a> on <span class="text-muted"><?= $supplier[0]->tgl?></span>
                    </td>
                  </tr>
                  <tr>
                    <td class="d-none d-sm-table-cell text-center" style="width: 140px;">
                      <p>
                        <a href="be_pages_generic_profile.html">
                          <!-- <img class="img-avatar" src="<?= base_url() ?>assets/admin/media/avatars/avatar3.jpg" alt=""> -->
                        </a>
                      </p>
                      <p class="fs-sm fw-medium"><?= $supplier[0]->namaUsaha?></p>
                    </td>
                    <td>
                      <p><?= $supplier[0]->deskripsiPerusahaan ?></p>
                      <hr>
                      <div class="d-flex justify-content-between">
                          <div></div>
                          <div class="d-flex justify-content-between gap-2">
                            <a href="<?= base_url('admin/supplier/update/'.$supplier[0]->idsupplier.'/'.$supplier[0]->iduser)?>">
                              <button class="btn btn-sm  btn-outline-success"> Accept</button>
                            </a>
                            <a href="<?= base_url('admin/supplier/update_d/'.$supplier[0]->idsupplier.'/'.$supplier[0]->iduser)?>">
                              <button class="btn btn-sm btn-outline-danger"> Decline</button>
                            </a>  
                        </div>
                      </div>
                      <!-- <p class="fs-sm text-muted">There is only one way to avoid criticism: do nothing, say nothing, and be nothing.</p> -->
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <!-- END Discussion -->
        </div>
        <!-- END Page Content -->
      </main>
        
<?php $this->load->view($footer)?>