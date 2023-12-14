<?php $this->load->view($header); ?>



<div class="content">
  <div class="row">
    <div class="col-10">
    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?= base_url('dashboard/supplier')?>">Dashboard</a></li>
        <li class="breadcrumb-item active"><a href="<?= base_url('dashboard/supplier/product')?>">Product</a></li>
        <li class="breadcrumb-item active" aria-current="page">Add Product</li>
      </ol>
    </nav>
    </div>
    
  </div>
</div>
<!-- Page Content -->
        <div class="content">
          <form action="<?= base_url('tambahproduct') ?>" enctype="multipart/form-data" method="POST">
          <!-- Info -->
            <div class="row ">
                <div class="col-lg-8">
                  <div class="block block-rounded">
                    <div class="block-content">
                      <div class="row justify-content-center">
                        <div class="col-md-10 col-lg-12">
                          <h3>General information</h3>
                            <div class="mb-4">
                              <label class="form-label" for="one-ecom-product-name">Name your product</label>
                              <input type="hidden" class="form-control"  name="idcompany" value="<?= $company[0]->idcompany?>">
                              <input type="text" class="form-control"  name="product" value="">
                            </div>
                            <div class="mb-4">
                              <!-- CKEditor (js-ckeditor-inline + js-ckeditor ids are initialized in Helpers.jsCkeditor()) -->
                              <!-- For more info and examples you can check out http://ckeditor.com -->
                              <label class="form-label">Description</label>
                              <textarea id="js-ckeditor" name="despan" required></textarea>
                            </div>
                            <div class="mb-4">
                              <label class="form-label" for="one-ecom-product-description-short">Short Description</label>
                              <textarea class="form-control" name="despen" rows="4" required></textarea>
                            </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4">
                <div class="block block-rounded">
                    <div class="block-content">
                      <div class="row justify-content-center">
                        <div class="col-md-10 col-lg-12">
                          <h3>Category</h3>
                            <div class="mb-4">
                                <!-- Select2 (.js-select2 class is initialized in Helpers.jqSelect2()) -->
                                <!-- For more info and examples you can check out https://github.com/select2/select2 -->
                                <label class="form-label" for="one-ecom-product-category">product Category</label>
                                <select class="js-select2 form-select" id="kategori" name="kategori" onchange="loadSubkategoriA()" required style="width: 100%;" data-placeholder="Choose one..">
                                    <option value="">Choose Category</option>
                                    <?php foreach ($kategori as $data) : ?>
                                        <option value="<?= $data->idkategori?>"><?= $data->namaKategori?></option>
                                    <?php endforeach; ?>
                                </select>
                              </div>
                              <div class="mb-4">
                                <!-- Select2 (.js-select2 class is initialized in Helpers.jqSelect2()) -->
                                <!-- For more info and examples you can check out https://github.com/select2/select2 -->
                                <label class="form-label" for="one-ecom-product-category">Sub-Category</label>
                                <select class="js-select2 form-select" id="subkategori_a" name="subkategori_a" onchange="loadSubkategoriB()" required style="width: 100%;" data-placeholder="Choose one..">
                                  <option  value="">Choose Sub Category A</option>
                                </select>
                              </div>
                              <div class="mb-4">
                                <!-- Select2 (.js-select2 class is initialized in Helpers.jqSelect2()) -->
                                <!-- For more info and examples you can check out https://github.com/select2/select2 -->
                                <label class="form-label" for="one-ecom-product-category">Sub-Category</label>
                                <select class="js-select2 form-select" id="subkategori_b" name="subkategori_b" required style="width: 100%;" data-placeholder="Choose one..">
                                  <option  value="">Choose Sub Category B</option>
                                </select>
                              </div>
                        </div>
                      </div>
                      <div class="col-lg-8">
                        <div class="block block-rounded">
                          <div class="block-content">
                            <div class="row justify-content-center">
                              <div class="col-md-10 col-lg-12">
                                <h3>Pricing</h3>
                                  <div class="row mb-4">
                                    <div class="col-md-12">
                                      <label class="form-label" for="one-ecom-product-price">Price FOB USD ($)</label>
                                      <input type="text" class="form-control" name="harga" required>
                                    </div>
                                  </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                        <div class="">
                        <div class="flex justify-between mb-3">
                          <a href="<?= base_url()?>supplier/product" class="btn bg-gray-light ">cancel</a>
                          <button type="submit" style="margin-left: 8px;" class="btn bg-amethyst text-white ">Add product</button>
                        </div>
                        </div>
                    </div>
                  </div>
                </div>
            </div>
            <div class="row">
            <div class="col-lg-8">
              <div class="block block-rounded">
                <div class="block-content">
                  <div class="row justify-content-center">
                    <div class="col-md-10 col-lg-12">
                      <h3>Media</h3>
                        <div class="row mb-4" >
                          <div class="col-md-6 col-lg-12">
                          <label class="form-label" for="one-ecom-product-price">Image Product</label>
                          <div class="mb-4 image-preview">
                          <div class="d-flex flex-wrap mt-2" id="previewContainer">
                              <img id="previewAvatar" class="img-avatar" style="height:150px;width:150px;" src="<?= base_url() ?>./assets/admin/media/avatars/avatar13.jpg" alt="">
                              <span class="remove-preview" onclick="removePreview()">Remove</span>
                          </div>
                          <div class="mb-4 mt-3">
                              <input class="form-control" type="file" name="gambar[]" accept="image/*" multiple id="one-profile-edit-avatar">
                          </div>
                        </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
    </div>
  </form>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <script>

    $(document).ready(function () {
        setupFileInput();
    });

    function loadSubkategoriA() {
        var idkategori = $("#kategori").val();
        if (idkategori !== "") {
            // Lakukan permintaan Ajax untuk mendapatkan opsi Subkategori A
            $.ajax({
                url: "<?= site_url('Supplier/Product/getSubkategoriAOptions') ?>",
                type: "POST",
                data: { idkategori: idkategori },
                dataType: "json",
                success: function(data) {
                    var options = '<option value="">Choose SubCategory A</option>';
                    $.each(data, function(index, item) {
                        options += '<option value="' + item.idsubkategori_a + '">' + item.namaSubKategori + '</option>';
                    });
                    $("#subkategori_a").html(options);

                    loadSubkategoriB();
                }
            });
        } else {
            $("#subkategori_a").html('<option value="">Choose SubCategory A/option>');
            $("#subkategori_b").html('<option value="">Choose SubCategory B</option>').prop("disabled", true);
        }
    }

    function loadSubkategoriB() {
        var idsubkategoria = $("#subkategori_a").val();
        if (idsubkategoria !== "") {
            $.ajax({
                url: "<?= site_url('Supplier/Product/getSubkategoriBOptions') ?>",
                type: "POST",
                data: { idsubkategoria: idsubkategoria },
                dataType: "json",
                success: function(data) {
                console.log(data);
                    var options = '<option value="">Choose SubCategory B</option>';
                    $.each(data, function(index, item) {
                        options += '<option value="' + item.idsubkategori_b + '">' + item.namaSubKategori_b + '</option>';
                    });
                    $("#subkategori_b").html(options).prop("disabled", false);
                }
            });
        } else {
            $("#subkategori_b").html('<option value="">Choose SubCategory B</option>').prop("disabled", true);
        }
    }

    function setupFileInput() {
        $('#one-profile-edit-avatar').on('change', function (event) {
            var fileInput = event.target;
            var previewContainer = $('#previewContainer');

            // Hapus pratinjau gambar sebelumnya
            previewContainer.empty();

            if (fileInput.files && fileInput.files.length > 0) {
                for (var i = 0; i < fileInput.files.length; i++) {
                    var reader = new FileReader();

                    reader.onload = function (e) {
                        var imageHtml = '<div class="image-preview mb-2 me-2">' +
                            '<img class="img-avatar" style="height:150px;width:150px;" src="' + e.target.result + '" alt="Preview">' +
                            '<span class="remove-preview" onclick="removePreview(this)">Remove</span>' +
                            '</div>';
                        previewContainer.append(imageHtml);
                    };

                    reader.readAsDataURL(fileInput.files[i]);
                }
            }
        });
    }

    function removePreview(element) {
        // Hapus pratinjau gambar yang terkait dengan tombol Remove yang ditekan
        $(element).parent().remove();
        // Bersihkan file input
        $('#one-profile-edit-avatar').val('');
    }
</script>
<?php $this->load->view($footer) ?>