<?php $this->load->view($header)?>
<!-- Main Container -->
<main id="main-container">
            <!-- Page Content -->
            <div class="content">
                
            </div>
            <!-- END Page Content -->
        <!-- Page Content -->
        <div class="content">
          <!-- Results -->
          <div class="block block-rounded overflow-hidden">
            <ul class="nav nav-tabs nav-tabs-block" role="tablist">
              <li class="nav-item">
                <button type="button" class="nav-link active" id="search-users-tab" data-bs-toggle="tab" data-bs-target="#search-users" role="tab" aria-controls="search-users" aria-selected="false">Update Kategori</button>
              </li>
            </ul>
            <div class="block-content tab-content overflow-hidden">
              <!-- Projects -->
              <div class="tab-pane fade fade-up show active" id="search-projects" role="tabpanel" aria-labelledby="search-projects-tab" tabindex="0">
                <!-- Dynamic Table with Export Buttons -->
                <div class="block block-rounded">
                    <div class="block-content block-content-full">
                    <div class="row">
                            <div class="col-lg-4">
                            <p class="fs-sm text-muted">
                                
                            </p>
                            </div>
                            <div class="col-lg-5 space-y-5">
                            <!-- Form Labels on top - Default Style -->
                            <form action="<?= base_url('admin/premium/update')?>" method="POST">
                                <div class="mb-4">
                                    <label class="form-label">Premium</label>
                                    <input type="hidden" class="form-control" id="premium" name="idpremium" value="<?= $premium[0]->idpremium ?>" placeholder="Preimum">
                                    <input type="text" class="form-control" id="premium" name="namaPremium" value="<?= $premium[0]->namaPremium ?>" placeholder="Preimum">
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Harga</label>
                                    <input type="number" class="form-control" id="harga" name="hargaPremium" value="<?= $premium[0]->hargaPremium ?>" placeholder="harga layanan">
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Waktu</label>
                                    <input type="text" class="form-control" id="waktu" name="waktuPremium" value="<?= $premium[0]->waktuPremium ?>" placeholder="waktu (bulan)">
                                </div>
                                <div class="mb-4">
                                    <button type="submit" class="btn btn-alt-primary">Update</button>
                                </div>
                            </form>
                            <!-- END Form Labels on top - Default Style -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END Dynamic Table with Export Buttons -->
              </div>
              <!-- END Projects -->
            </div>
          </div>
          <!-- END Results -->
        </div>
        <!-- END Page Content -->
      </main>
        
<?php $this->load->view($footer)?>