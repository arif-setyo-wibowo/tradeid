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
                <button type="button" class="nav-link active" id="search-projects-tab" data-bs-toggle="tab" data-bs-target="#search-projects" role="tab" aria-controls="search-projects" aria-selected="true">Data Registed Supplier</button>
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
                                <tr >
                                    <th class="text-center" style="width: 80px;">ID</th>
                                    <th>Nama Perusahaan</th>
                                    <th>tanggal</th>
                                    <!-- <th>Deskripsi Perusahaan</th> -->
                                    <th class="text-center">Status</th>
                                    <th class="d-none d-sm-table-cell text-center" style="width: 15%;">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no=1; foreach ($supplier as $data) :?>
                                <tr>
                                    <td class="text-center fs-sm"><?= $no++;?></td>
                                    <td class="fw-semibold fs-sm"><?= $data->namaUsaha?></td>
                                    <td><?=  date('d-m-Y', strtotime($data->tgl))?></td>
                                    <!-- <td class="fw-semibold fs-sm"><?= $data->deskripsiPerusahaan?></td> -->
                                    <!-- <td class="fw-semibold fs-sm"><?= $data->deskripsiPerusahaan?></td> -->
                                    <td class="d-nonea d-sm-table-cell text-center">
                                        <div class="btn-group">
                                        <?php if($data->verify == 1):?>
                                            <button type="button" class="btn btn-alt-danger"  title="Tidak Diterima">
                                                Tidak Diterima
                                            </button>
                                        <?php elseif($data->verify == 2):?>
                                            <button type="button" class="btn btn-sm btn-alt-success"  title="Diterima">
                                                Diterima
                                            </button>
                                          <?php else:?>
                                            <button type="button" class="btn btn-sm btn-alt-primary"  title="menunggu">
                                                Menuggu
                                            </button>
                                        <?php endif;?>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                          <a href="<?= base_url('admin/supplier/'.$data->idsupplier)?>" class=" px-3">lihat detail</a>
                                    </td>
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