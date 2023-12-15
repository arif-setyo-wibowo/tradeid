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
            <button type="button" class="nav-link" id="search-users-tab" data-bs-toggle="tab" data-bs-target="#search-users" role="tab" aria-controls="search-users" aria-selected="false">Tambah Data Demain</button>
            </li>
        </ul>
        <div class="block-content tab-content overflow-hidden">
            <!-- Projects -->
            <div class="tab-pane fade fade-up show active" id="search-projects" role="tabpanel" aria-labelledby="search-projects-tab" tabindex="0">
            <!-- Dynamic Table with Export Buttons -->
            <div class="block block-rounded ">
                <div class="block-content block-content-full">
                    <!-- DataTables init on table by adding .js-dataTable-buttons class, functionality is initialized in js/pages/be_tables_datatables.min.js which was auto compiled from _js/pages/be_tables_datatables.js -->
                    <table class="table table-bordered table-striped table-vcenter js-dataTable-buttons">
                        <thead>
                            <tr>
                                <th class="text-center" style="width: 80px;">ID</th>
                                <th>Nama Buyer</th>
                                <th>Negara</th>
                                <th>Produk</th>
                                <th>Kategori</th>
                                <th class="d-none d-sm-table-cell text-center" style="width: 15%;">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center fs-sm"></td>
                                <td class="text-center fs-sm"></td>
                                <td class="text-center fs-sm"></td>
                                <td class="text-center fs-sm"></td>
                                <td class="text-center fs-sm"></td>
                                <td class="d-nonea d-sm-table-cell text-center">
                                    <div class="btn-group">
                                    <a class="m-1" href="<?= base_url('admin/databuyer/detail')?>">
                                        <button type="button" class="btn btn-sm btn-alt-secondary" data-bs-toggle="tooltip" title="detail">
                                            <i class="fa fa-eye"></i>
                                        </button>
                                    </a>
                                    <a class="m-1" href="">
                                        <button type="button" class="btn btn-sm btn-alt-secondary" data-bs-toggle="tooltip" title="Edit">
                                            <i class="fa fa-pencil-alt"></i>
                                        </button>
                                    </a>
                                    <a class="m-1" href="">
                                        <button type="button" class="btn btn-sm btn-alt-secondary" data-bs-toggle="tooltip" title="Delete">
                                            <i class="fa fa-times"></i>
                                        </button>
                                    </a>
                                    </div>
                                </td>
                            </tr>
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
                    <div class="col-lg-2">
                        <p class="fs-sm text-muted">
                        
                        </p>
                    </div>
                    <div class="col-lg-7 space-y-5">
                        <!-- Form Labels on top - Default Style -->
                        <form action="<?= base_url('admin/subkategoriB/tambahsubkategoriB')?>" method="POST">
                            <div class="mb-4">
                                <label class="form-label">Nama Buyer</label>
                                <input type="text" class="form-control" id="namabuyer" name="namabuyer" placeholder="Nama buyer">
                            </div>
                            <div class="mb-4">
                                <label class="form-label">Email Buyer</label>
                                <input type="text" class="form-control" id="email" name="email" placeholder="Email">
                            </div>
                            <div class="mb-4">
                                <label class="form-label">Alamat</label>
                                <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat">
                            </div>
                            <div class="mb-4">
                                <label class="form-label">Negara</label>
                                <input type="text" class="form-control" id="negara" name="negara" placeholder="Negara">
                            </div>
                            <div class="mb-4">
                                <label class="form-label">Telepon</label>
                                <input type="text" class="form-control" id="no_telp" name="no_telp" placeholder="Telepon">
                            </div>
                            <div class="mb-4">
                                <label class="form-label">Produk</label>
                                <input type="text" class="form-control" id="produk" name="produk" placeholder="Nama Produk">
                            </div>
                            <div class="mb-4">
                                <label class="form-label">Deskripsi Permintaan</label>
                                <Textarea type="text" class="form-control" id="deskripsiPermintaan" name="deskripsiPermintaan" placeholder="Deskripsi Permintaan">
                                </Textarea>
                            </div>
                            <div class="mb-4">
                                <label class="form-label">Nama Kategori</label>
                                <select class="js-select2 form-select" id="idkategori" name="namaKategori" style="width: 100%;" data-placeholder="Pilih Kategori" required>
                                <option disable value=""></option>
                                </select>
                            </div>
                            <div class="mb-4">
                                <label class="form-label">Nama Sub Kategori A</label>
                                <select class="js-select2 form-select" id="idsubkategoria" name="namasubkategori_a" style="width: 100%;" data-placeholder="Pilih Kategori" required>
                                <option disable value=""></option>
                                    <option value=""></option>
                                </select>
                            </div>
                            <div class="mb-4">
                                <label class="form-label">Nama Sub Kategori b</label>
                                <select class="js-select2 form-select" id="idsubkategorib" name="namasubkategori_b" style="width: 100%;" data-placeholder="Pilih Kategori" required>
                                <option disable value=""></option>
                                    <option value=""></option>
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
            <!-- END Users -->

        </div>
        </div>
        <!-- END Results -->
    </div>
    <!-- END Page Content -->
</main>

<script>
    function loadSubkategoriA() {
        var idkategori = $("#idkategori").val();
        if (idkategori !== "") {
            $.ajax({
                url: "<?= site_url('Admin/SubKategoriB/getSubkategoriAOptions') ?>",
                type: "POST",
                data: { idkategori: idkategori },
                dataType: "json",
                success: function(data) {
                    var options = '<option value="">Pilih Subkategori A</option>';
                    $.each(data, function(index, item) {
                        options += '<option value="' + item.idsubkategori_a + '">' + item.namaSubKategori + '</option>';
                    });
                    $("#idsubkategoria").html(options).prop("disabled", false);
                }
            });
        } else {
            $("#idsubkategoria").html('<option value="">Pilih Subkategori A</option>').prop("disabled", true);
            $("#namasubkategori_b").val("").prop("disabled", true);
        }
    }
</script>

<?php $this->load->view($footer)?>