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
                        <table class="table table-bordered  table-striped table-vcenter js-dataTable-responsive js-dataTable-button">
                            <thead>
                                <tr >
                                    <th class="text-center" style="width: 80px;">ID</th>
                                    <th>User Name</th>
                                    <th class="d-none d-sm-table-cell" style="width: 30%;">Nama</th>
                                    <th class="d-none d-sm-table-cell" style="width: 25%;">Email</th>
                                    <th class="d-none d-sm-table-cell" style="width: 10%;">Phone</th>
                                    <th class="d-none d-sm-table-cell" style="width: 20%;">Negara</th>
                                    <th class="d-none " style="width: 30%;">Alamat</th>
                                    <th class="d-none d-sm-table-cell" style="width: 30%;">Supplier</th>
                                    <th class="d-none d-sm-table-cell text-center" style="width: 15%;">Detail</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php $no=1; foreach ($user as $data) :?>
                                <tr>
                                    <td class="text-center fs-sm"><?= $no++;?></td>
                                    <td class="fw-semibold fs-sm"><?= $data->username?></td>
                                    <td class="d-none d-sm-table-cell" style="width: 30%;"><?= $data->nama?></td>
                                    <td class="d-none d-sm-table-cell" style="width: 25%;"><?= $data->email?></td>
                                    <td class="d-none d-sm-table-cell" style="width: 25%;"><?= $data->telp?></td>
                                    <td class="d-none d-sm-table-cell" style="width: 20%;"><?= $data->negara?></td>
                                    <td class="d-none " style="width: 80%;"><?= $data->alamat?></td>
                                    <td class="d-none text-center d-sm-table-cell" style="width: 30%;">
                                      <?php if($data->cSupplier == 1 ):?>
                                        <button class="btn rounded-pill px-3 btn-sm btn-alt-primary">Yes</button>
                                      <?php else:?>
                                        <button class="btn rounded-pill px-3 btn-sm btn-alt-danger">No</button>
                                      <?php endif?>
                                    </td>
                                    <td class="d-none d-sm-table-cell" style="width: 30%;">
                                      <a href="" class=" rounded-pill px-3 btn-sm text-primary" data-bs-toggle="modal" data-bs-target="#modal-block-popout">Lihat</a>
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

                  <!-- Pop Out Block Modal -->
                  <div class="modal fade" id="modal-block-popout" tabindex="-1" role="dialog" aria-labelledby="modal-block-popout" aria-hidden="true">
            <div class="modal-dialog modal-dialog-popout" role="document">
              <div class="modal-content">
                <div class="block block-rounded block-transparent mb-0">
                  <div class="block-header block-header-default">
                    <h3 class="block-title">Detail User</h3>
                    <div class="block-options">
                      <button type="button" class="btn-block-option" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fa fa-fw fa-times"></i>
                      </button>
                    </div>
                  </div>
                  <div class="block-content fs-sm">
                  <table class="table table-bordered-x-none   table-vcenter ">
                            <tbody >
                                <tr >
                                    <td class="fw-semibold fs-sm p-1 ">Username : <br><span class="fw-normal ">Jumali</span></td>
                                </tr>
                                <tr >
                                    <td class="fw-semibold fs-sm p-1 ">Nama : <br><span class="fw-normal ">Jumali Ahmad</span></td>
                                </tr>
                                <tr >
                                    <td class="fw-semibold fs-sm p-1 ">Email : <br><span class="fw-normal ">Jumali@gmail.com</span></td>
                                </tr>
                                <tr >
                                    <td class="fw-semibold fs-sm p-1 ">Phone : <br><span class="fw-normal ">+76378377362</span></td>
                                </tr>
                                <tr >
                                    <td class="fw-semibold fs-sm p-1 ">Negara : <br><span class="fw-normal ">Japan</span></td>
                                </tr>
                                <tr >
                                    <td class="fw-semibold fs-sm p-1 ">Supplier :  <span class="fw-normal "><button class="btn rounded-pill px-3 btn-sm btn-alt-primary">Yes</button></span></td>
                                </tr>
                            </tbody>
                        </table>
                  </div>
                  <div class="block-content block-content-full text-end bg-body">
                    <button type="button" class="btn btn-sm btn-alt-secondary me-1" data-bs-dismiss="modal">Close</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- END Pop Out Block Modal -->
      </main>
        
<?php $this->load->view($footer)?>