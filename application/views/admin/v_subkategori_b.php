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
            <button type="button" class="nav-link" id="search-users-tab" data-bs-toggle="tab" data-bs-target="#search-users" role="tab" aria-controls="search-users" aria-selected="false">Tambah Sub Kategori B</button>
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
                                <th>Sub Kategori B</th>
                                <th>Sub Kategori A</th>
                                <th>Kategori</th>
                                <th class="d-none d-sm-table-cell" style="width: 15%;">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no=1; foreach ($subkategori_b as $data) :?>
                            <tr>
                                <td class="text-center fs-sm"><?= $no++;?></td>
                                <td class="fw-semibold fs-sm"><?= $data->namaSubKategori_b?></td>
                                <td class="fw-semibold fs-sm"><?= $data->namaSubKategori?></td>
                                <td class="fw-semibold fs-sm"><?= $data->namaKategori?></td>
                                <td class="d-nonea d-sm-table-cell text-center">
                                    <div class="btn-group">
                                    <a href="<?= base_url('admin/subkategoriB/updatesubkategoriB/'.$data->idsubkategori_b)?>">
                                        <button type="button" class="btn btn-sm btn-alt-secondary" data-bs-toggle="tooltip" title="Edit">
                                            <i class="fa fa-pencil-alt"></i>
                                        </button>
                                    </a>
                                    <a href="javascript:void(0);" onclick="confirmDelete(<?= $data->idsubkategori_b ?>)">
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
                        <form action="<?= base_url('admin/subkategoriB/tambahsubkategoriB')?>" method="POST">
                            <div class="mb-4">
                                <label class="form-label">Nama Kategori</label>
                                <select class="js-select2 form-select" id="idkategori" name="namaKategori" onchange="loadSubkategoriA()" style="width: 100%;" data-placeholder="Pilih Kategori" required>
                                <option disable value=""></option>
                                <?php foreach ($kategori as $data) : ?>
                                    <option value="<?= $data->idkategori?>"><?= $data->namaKategori?></option>
                                <?php endforeach; ?>
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
                                <label class="form-label">Nama Sub Kategori B</label>
                                <input type="text" class="form-control" id="namasubkategori_b" name="namasubkategori_b" placeholder="Sub Kategori B">
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

    function confirmDelete(id) {
        Swal.fire({
        title: 'Are you sure to delete?',
        text: 'Once deleted, you will not be able to recover this data!',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
        if (result.isConfirmed) {
            // Send the delete request
            window.location.href = "<?= base_url('admin/subkategoriB/deletesubkategoriB/') ?>" + id;
        }
        });
    }

</script>



<?php $this->load->view($footer)?>