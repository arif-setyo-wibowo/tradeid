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
                <button type="button" class="nav-link active" id="search-users-tab" data-bs-toggle="tab" data-bs-target="#search-users" role="tab" aria-controls="search-users" aria-selected="false">Update Sub Kategori</button>
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
                            <div class="col-lg-5 space-y-5"><!-- Form Labels on top - Default Style -->
                            <form action="<?= base_url('admin/subkategoriA/updatesubkategoriA')?>" method="POST">
                                <div class="mb-4">
                                    <label class="form-label">Nama Kategori</label>
                                    <select class="js-select2 form-select" id="example-select2" name="namaKategoriUpdate" style="width: 100%;" data-placeholder="Pilih Kategori" required>
                                        <option disable value=""></option>
                                        <?php foreach ($kategori as $data) : ?>
                                            <option value="<?= $data->idkategori ?>"  <?= $data->idkategori == $subkategoria[0]->idkategori ? 'selected' : '' ?>><?= $data->namaKategori?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Nama Sub Kategori</label>
                                    <input type="hidden" class="form-control"  name="idsubkategori_a" value="<?= $subkategoria[0]->idsubkategori_a?>" placeholder="Sub Kategori A">
                                    <input type="text" class="form-control"  name="namaSubKategoriUpdate" value="<?= $subkategoria[0]->namaSubKategori?>" placeholder="Sub Kategori A">
                                </div>
                                <div class="mb-4">
                                    <button type="button" onclick="confirmUpdate()" class="btn btn-alt-primary">Update</button>
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

<script>
  function confirmUpdate() {
      Swal.fire({
        title: 'Are you sure to update?',
        text: 'You are about to update the Subkategori A',
        icon: 'question',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, update it!'
      }).then((result) => {
        if (result.isConfirmed) {
          // Submit the form for update
          $('form').submit();
        }
      });
    }
</script>
        
<?php $this->load->view($footer)?>