<?php $this->load->view($header)?>
<!-- Main Container -->
<main id="main-container">
        <!-- Page Content -->
        <div class="content">
          <!-- Results -->
          <div class="block block-rounded overflow-hidden">
            <ul class="nav nav-tabs nav-tabs-block" role="tablist">
              <li class="nav-item">
                <button type="button" class="nav-link active" id="search-projects-tab" data-bs-toggle="tab" data-bs-target="#search-projects" role="tab" aria-controls="search-projects" aria-selected="true">Data</button>
              </li>
              <li class="nav-item">
                <button type="button" class="nav-link" id="search-users-tab" data-bs-toggle="tab" data-bs-target="#search-users" role="tab" aria-controls="search-users" aria-selected="false">Tambah Sub Kategori A</button>
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
                                    <th>Sub Kategori A</th>
                                    <th>Kategori</th>
                                    <th class="d-none d-sm-table-cell" style="width: 15%;">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no=1; foreach ($subkategori_a as $data) :?>
                                <tr>
                                    <td class="text-center fs-sm"><?= $no++;?></td>
                                    <td class="fw-semibold fs-sm"><?= $data->namaSubKategori?></td>
                                    <td class="fw-semibold fs-sm"><?= $data->namaKategori?></td>
                                    <td class="d-nonea d-sm-table-cell text-center">
                                        <div class="btn-group">
                                        <a href="<?= base_url('admin/subkategoriA/updatesubkategoriA/'.$data->idsubkategori_a)?>">
                                          <button type="button" class="btn btn-sm btn-alt-secondary" data-bs-toggle="tooltip" title="Edit">
                                              <i class="fa fa-pencil-alt"></i>
                                          </button>
                                        </a>
                                        <a href="<?= base_url('admin/subkategoriA/deletesubkategoriA/'.$data->idsubkategori_a)?>">
                                            <button type="button" class="btn btn-sm btn-alt-secondary" data-bs-toggle="tooltip" title="Delete">
                                                <i class="fa fa-times"></i>
                                            </button>
                                        </a>
                                        </div>
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
                  <form action="<?= base_url('admin/subkategoriA/tambahsubkategoriA')?>" method="POST">
                    <div class="mb-4">
                        <label class="form-label">Nama Kategori</label>
                        <select class="js-select2 form-select" id="example-select2" name="namaKategori" style="width: 100%;" data-placeholder="Pilih Kategori" required>
                        <option disable value=""></option>
                        <?php foreach ($kategori as $data) : ?>
                            <option value="<?= $data->idkategori?>"><?= $data->namaKategori?></option>
                        <?php endforeach; ?>
                      </select>
                    </div>
                    <div class="mb-4">
                      <label class="form-label">Nama Sub Kategori</label>
                      <input type="text" class="form-control"  name="namaSubKategori" placeholder="Sub Kategori A">
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