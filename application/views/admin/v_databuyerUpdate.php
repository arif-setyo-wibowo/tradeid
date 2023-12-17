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
                <button type="button" class="nav-link active" id="search-users-tab" data-bs-toggle="tab" data-bs-target="#search-users" role="tab" aria-controls="search-users" aria-selected="false">Update Data Buyer</button>
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
                                <form action="<?= base_url('admin/databuyer/update')?>" method="POST">
                                    <div class="mb-4">
                                        <label class="form-label">Nama Buyer</label>
                                        <input type="hidden" class="form-control" id="namabuyer" name="idbuyer" value="<?= $buyer[0]->idbuyer ?>" placeholder="Nama buyer">
                                        <input type="text" class="form-control" id="namabuyer" name="nama" value="<?= $buyer[0]->namaBuyer ?>" placeholder="Nama buyer">
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label">Email Buyer</label>
                                        <input type="text" class="form-control" id="email" name="email" value="<?= $buyer[0]->emailBuyer ?>" placeholder="Email">
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label">Alamat</label>
                                        <input type="text" class="form-control" id="alamat" name="alamat" value="<?= $buyer[0]->alamatBuyer ?>" placeholder="Alamat">
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label">Negara</label>
                                        <input type="text" class="form-control" id="negara" name="negara" value="<?= $buyer[0]->negaraBuyer ?>" placeholder="Negara">
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label">Telepon</label>
                                        <input type="text" class="form-control" id="no_telp" name="telp" value="<?= $buyer[0]->telpBuyer ?>" placeholder="Telepon">
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label">Produk</label>
                                        <input type="text" class="form-control" id="produk" name="produk" value="<?= $buyer[0]->produkBuyer ?>" placeholder="Nama Produk">
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label">Deskripsi Permintaan</label>
                                        <Textarea type="text" class="form-control" id="deskripsiPermintaan"  name="deskripsi" placeholder="Deskripsi Permintaan"><?= $buyer[0]->deskripsiBuyer ?>    
                                    </Textarea>
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label">Nama Kategori</label>
                                        <select class="js-select2 form-select" id="kategori" name="kategori" onchange="loadSubkategoriA()" style="width: 100%;" data-placeholder="Pilih Kategori" required>
                                            
                                            <?php foreach ($kategori as $data) : ?>
                                                <option value="<?= $data->idkategori?>" <?= $data->idkategori == $buyer[0]->idkategori ? 'selected' : '' ?>><?= $data->namaKategori?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label">Nama Sub Kategori A</label>
                                        <select class="js-select2 form-select" id="subkategori_a" name="subkategori_a" onchange="loadSubkategoriB()" style="width: 100%;" data-placeholder="Pilih Kategori" required>
                                            
                                            <?php foreach ($subkategoria as $data) : ?>
                                                <option value="<?= $data->idsubkategori_a?>" <?= $data->idsubkategori_a == $buyer[0]->idsubkategori_a ? 'selected' : '' ?>><?= $data->namaSubKategori?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label">Nama Sub Kategori b</label>
                                        <select class="js-select2 form-select" id="subkategori_b" name="subkategori_b" style="width: 100%;" data-placeholder="Pilih Kategori" required>
                                           
                                            <?php foreach ($subkategorib as $data) : ?>
                                                <option value="<?= $data->idsubkategori_b?>" <?= $data->idsubkategori_b == $buyer[0]->idsubkategori_b ? 'selected' : '' ?>><?= $data->namaSubKategori_b?></option>
                                            <?php endforeach; ?>
                                        </select>
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
                <!-- END Dynamic Table with Export Buttons -->
              </div>
              <!-- END Projects -->
            </div>
          </div>
          <!-- END Results -->
        </div>
        <!-- END Page Content -->
      </main>

      
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>

function loadSubkategoriA() {
    var selectedKategori = $("#kategori").val();

    // Perform AJAX request to get subcategories based on the selected category
    $.ajax({
        url: "<?= site_url('Admin/Databuyer/getSubkategoriAOptions') ?>",
        type: "POST",
        data: { idkategori: selectedKategori },
        dataType: "json",
        success: function(data) {
            // Populate the subkategori_a dropdown with the received data
            var options = '<option value="">Choose Sub-Category A</option>';
            $.each(data, function(index, item) {
                options += '<option value="' + item.idsubkategori_a + '">' + item.namaSubKategori + '</option>';
            });
            $("#subkategori_a").html(options);

            // Reset subkategori_b
            $("#subkategori_b").html('<option value="">Choose Sub-Category B</option>');
        }
    });
}

function loadSubkategoriB() {
    var selectedSubkategoriA = $("#subkategori_a").val();

    // Perform AJAX request to get subcategories_b based on the selected subkategori_a
    $.ajax({
        url: "<?= site_url('Admin/Databuyer/getSubkategoriBOptions') ?>",
        type: "POST",
        data: { idsubkategoria: selectedSubkategoriA },
        dataType: "json",
        success: function(data) {
            // Populate the subkategori_b dropdown with the received data
            var options = '<option value="">Choose Sub-Category B</option>';
            $.each(data, function(index, item) {
                options += '<option value="' + item.idsubkategori_b + '">' + item.namaSubKategori_b + '</option>';
            });
            $("#subkategori_b").html(options);
        }
    });
}

// Reset subkategori_a and subkategori_b on change of the category
$("#kategori").on("change", function() {
    // Reset subkategori_a
    $("#subkategori_a").html('<option value="">Choose Sub-Category A</option>');

    // Reset subkategori_b
    $("#subkategori_b").html('<option value="">Choose Sub-Category B</option>');

    // Load new subkategori_a options
    loadSubkategoriA();
});
</script>
<?php $this->load->view($footer)?>