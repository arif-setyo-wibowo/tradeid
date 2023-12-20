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
                <button type="button" class="nav-link active" id="search-projects-tab" data-bs-toggle="tab" data-bs-target="#search-projects" role="tab" aria-controls="search-projects" aria-selected="true">Data</button>
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
                                    <th>Nama Member</th>
                                    <th>Tgl Mulai</th>
                                    <th>Tgl Akhir</th>
                                    <th class="d-none d-sm-table-cell" style="width: 15%;">Status Member</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no=1; foreach ($member as $data) :?>
                                <tr>
                                    <td class="text-center fs-sm"><?= $no++;?></td>
                                    <td class="fw-semibold fs-sm"><?= $data->namaPerusahaan?></td>
                                    <td class="fw-semibold fs-sm"><?= $data->tglstart?></td>
                                    <td class="fw-semibold fs-sm"><?= $data->tglakhir?></td>
                                    <td class="d-nonea d-sm-table-cell text-center">
                                    <?php if ($data->statusMember == 0) : ?>
                                        <button class="btn rounded-pill px-3 btn-sm btn-alt-primary">Berakhir </button>
                                    <?php else : ?>
                                        <button class="btn rounded-pill px-3 btn-sm btn-alt-primary">Aktif </button>
                                    <?php endif; ?>
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