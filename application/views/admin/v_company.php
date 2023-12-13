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
                <button type="button" class="nav-link active" id="search-projects-tab" data-bs-toggle="tab" data-bs-target="#search-projects" role="tab" aria-controls="search-projects" aria-selected="true">Data Perusahaan Terdaftar</button>
              </li>
            </ul>
            <div class="block-content tab-content overflow-hidden">
              <!-- Projects -->
              <div class="tab-pane fade fade-up show active" id="search-projects" role="tabpanel" aria-labelledby="search-projects-tab" tabindex="0">
                <!-- Dynamic Table with Export Buttons -->
                <div class="block block-rounded">
                    <div class="block-content block-content-full">
                        <!-- DataTables init on table by adding .js-dataTable-buttons class, functionality is initialized in js/pages/be_tables_datatables.min.js which was auto compiled from _js/pages/be_tables_datatables.js -->
                        <table class="table table-bordered table-striped table-vcenter js-dataTable-buttons">
                            <thead>
                                <tr>
                                    <th class="text-center" style="width: 80px;">ID</th>
                                    <th class="text-center" style="width: 20%;">Nama Perusahaan</th>
                                    <th class="text-center" style="width: 15%;">Kota</th>
                                    <th>Deskripsi</th>
                                    <!-- <th class="d-none d-sm-table-cell" style="width: 15%;">Action</th> -->
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                <?php $no=1; foreach ($company as $data) :?>
                                    <td class="text-center fs-sm"><?= $no++;?></td>
                                    <td class="fw-semibold fs-sm">
                                      <a href="<?= base_url('admin/detailPerusahaan/'.$data->idcompany)?>">
                                    <div class="my-auto text-center">
                                        <img class="img-avatar  img-avatar-thumb" src="<?php echo base_url() ?>uploads/<?php echo $data->gambarCompany ?>" alt=""><br>
                                        <span class="my-auto mt-2"><?= $data->namaPerusahaan?></span>
                                    </div> 
                                    </a>
                                    </td>
                                    <td class="fw-semibold text-center "><?= $data->kota?></td>
                                    <td class="fw-semibold "><?= $data->deskripsiPendek?></td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- END Dynamic Table with Export Buttons -->
              </div>
              <!-- END Projects -->

              <!-- Users -->
              <div class="tab-pane fade fade-up" id="search-users" role="tabpanel" aria-labelledby="search-users-tab" tabindex="0">
              <div class="block-content block-content-full">
              <div class="row">
                <div class="col-lg-4">
                  <p class="fs-sm text-muted">
                    
                  </p>
                </div>
                <div class="col-lg-5 space-y-5">
                  <!-- Form Labels on top - Default Style -->
                  <form action="<?= base_url('admin/kategori/tambahkategori')?>" method="POST">
                    <div class="mb-4">
                      <label class="form-label">Nama Kategori</label>
                      <input type="kategori" class="form-control"  name="namaKategori" placeholder="kategori" required>
                    </div>
                    <div class="mb-4">
                      <button type="submit" class="btn btn-alt-primary">Submit</button>
                    </div>
                  </form>
                  <!-- END Form Labels on top - Default Style -->
                </div>
              </div>
            </div>

              </div>
              <!-- END Users -->

            </div>
          </div>
          <!-- END Results -->
        </div>
        <!-- END Page Content -->
      </main>
        
<?php $this->load->view($footer)?>