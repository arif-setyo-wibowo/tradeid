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
                                    <th class="text-center" style="width: 80px;">No</th>
                                    <th class="text-center" >Product</th>
                                    <th class="text-center" >Supplier</th>
                                    <th class="text-center" >Kategori</th>
                                    <th class="text-center" >Sub Kategori A</th>
                                    <th class="text-center" >Sub Kategori B</th>
                                    <th class="text-center" >Action</th>
                                    <!-- <th class="d-none d-sm-table-cell" style="width: 15%;">Action</th> -->
                                </tr>
                            </thead>
                            <tbody>
                            <?php $no=1; foreach ($product as $data) :?>
                                <tr>
                                    <td class="text-center" style="width: 80px;"><?= $no++?></td>
                                    <td class="text-center" ><?= $data->namaProduk?></td>
                                    <td class="text-center" ><?= $data->namaPerusahaan?></td>
                                    <td class="text-center" ><?= $data->namaKategori?></td>
                                    <td class="text-center" ><?= $data->namaSubKategori?></td>
                                    <td class="text-center" ><?= $data->namaSubKategori_b?></td>
                                    <td  class="text-center">
                                      <a class="btn btn-sm btn-alt-secondary" href="<?= base_url('admin/detailProduct/'.$data->idproduct)?>" data-bs-toggle="tooltip" title="View">
                                        <i class="fa fa-fw fa-eye"></i>
                                      </a>
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