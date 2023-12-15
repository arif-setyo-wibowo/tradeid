<?php $this->load->view($header)?>
<!-- Main Container -->
<main id="main-container">
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
                        <div class="col-lg-5 space-y-5">
                            <!-- Form Labels on top - Default Style -->
                            <form action="<?= base_url('admin/subkategoriB/updatesubkategoriB')?>" method="POST">
                                <div class="mb-4">
                                    <label class="form-label">Nama Kategori</label>
                                    <select class="js-select2 form-select" id="idkategori" name="namaKategori" onchange="loadSubkategoriA()" style="width: 100%;" data-placeholder="Pilih Kategori" required>
                                    <option disable value=""></option>
                                    <?php foreach ($kategori as $data) : ?>
                                        <option value="<?= $data->idkategori?>" <?= $data->idkategori == $subkategorib[0]->idkategori ? 'selected' : '' ?>><?= $data->namaKategori?></option>
                                    <?php endforeach; ?>
                                    </select>
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Nama Sub Kategori A</label>
                                    <select class="js-select2 form-select" id="idsubkategoria" name="namasubkategori_a" style="width: 100%;" data-placeholder="Pilih Kategori" required>
                                    <option disable value=""></option>
                                    <?php foreach ($subkategoria as $data) : ?>
                                        <option value="<?= $data->idsubkategori_a?>" <?= $data->idsubkategori_a == $subkategorib[0]->idsubkategori_a ? 'selected' : '' ?>><?= $data->namaSubKategori?></option>
                                    <?php endforeach; ?>
                                    </select>
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Nama Sub Kategori B</label>
                                    <input type="hidden" class="form-control"  name="idsubkategori_b" value="<?= $subkategorib[0]->idsubkategori_b?>" placeholder="Sub Kategori B">
                                    <input type="text" class="form-control" id="namasubkategori_b" name="namasubkategori_b" value="<?= $subkategorib[0]->namaSubKategori_b ?>" placeholder="Sub Kategori B">
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


<script>
     $(document).ready(function() {
        // Pemanggilan pertama kali saat halaman dimuat
        loadSubkategoriA();
        loadSubkategoriB();
    });

    function loadSubkategoriA() {
        var idkategori = $("#idkategori").val();
        if (idkategori !== "") {
            // Lakukan permintaan Ajax untuk mendapatkan opsi Subkategori A
            $.ajax({
                url: "<?= site_url('Admin/SubKategoriB/getSubkategoriAOptions') ?>",
                type: "POST",
                data: { idkategori: idkategori },
                dataType: "json",
                success: function(data) {
                    var options = '<option value="">Choose SubCategory A</option>';
                    $.each(data, function(index, item) {
                        options += '<option value="' + item.idsubkategori_a + '">' + item.namaSubKategori + '</option>';
                    });
                    $("#idsubkategoria").html(options);

                    // Tambahkan baris ini untuk mereset Subkategori B setiap kali Kategori diubah
                    $("#idsubkategoria").val("").trigger("change");

                }
            });
        } else {
            $("#idsubkategoria").html('<option value="">Choose SubCategory A</option>');
            // Tambahkan baris ini untuk mereset Subkategori B ketika Kategori dipilih ulang
            $("#idsubkategoria").val("").trigger("change");
        }
    }

    function loadSubkategoriB() {
        var idsubkategoria = $("#idsubkategoria").val();
        if (idsubkategoria !== "") {
            $("#namasubkategori_b").prop("disabled", false);
        } else {
            $("#namasubkategori_b").prop("disabled", true).val("");
        }
    }
</script>

<?php $this->load->view($footer)?>