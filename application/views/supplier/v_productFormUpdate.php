<?php $this->load->view($header); ?>
<div class="content">
  <div class="row">
    <div class="col-10">
    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
        <li class="breadcrumb-item active"><a href="<?= base_url('supplier/product')?>">Product</a></li>
        <li class="breadcrumb-item active" aria-current="page">Add Product</li>
      </ol>
    </nav>
    </div>
    
  </div>
</div>
<!-- Page Content -->
        <div class="content">
          <form action="<?= base_url('updateproduct') ?>" enctype="multipart/form-data" method="POST">
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
                              <input type="hidden" class="form-control"  name="idproduct" value="<?= $product[0]->idproduct?>">
                              <input type="hidden" class="form-control"  name="idcompany" value="<?= $company[0]->idcompany?>">
                              <input type="text" class="form-control"  name="product" value="<?= $product[0]->namaProduk?>">
                            </div>
                            <div class="mb-4">
                              <label class="form-label">Description</label>
                              <textarea id="js-ckeditor" name="despan" required><?= $product[0]->deskripsiProduk?></textarea>
                            </div>
                            <div class="mb-4">
                              <label class="form-label" for="one-ecom-product-description-short">Short Description</label>
                              <textarea class="form-control" name="despen" rows="4" required><?= $product[0]->deskripsiPendek?></textarea>
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
                                <label class="form-label" for="one-ecom-product-category">product Category</label>
                                <select class="js-select2 form-select" id="kategori" name="kategori" onchange="loadSubkategoriA()" style="width: 100%;" data-placeholder="Pilih Kategori" required>
                                    <?php foreach ($kategori as $data) : ?>
                                        <option value="<?= $data->idkategori?>" <?= $data->idkategori == $product[0]->idkategori ? 'selected' : '' ?>><?= $data->namaKategori?></option>
                                    <?php endforeach; ?>
                                </select>
                              </div>
                              <div class="mb-4">
                                <label class="form-label" for="one-ecom-product-category">Sub-Category</label>
                                <select class="js-select2 form-select" id="subkategori_a" name="subkategori_a" onchange="loadSubkategoriB()" required style="width: 100%;" data-placeholder="Choose one..">
                                  <?php foreach ($subkategoria as $data) : ?>
                                      <option value="<?= $data->idsubkategori_a?>" <?= $data->idsubkategori_a == $product[0]->idsubkategori_a ? 'selected' : '' ?>><?= $data->namaSubKategori?></option>
                                  <?php endforeach; ?>
                                </select>
                              </div>
                              <div class="mb-4">
                                <label class="form-label" for="one-ecom-product-category">Sub-Category</label>
                                <select class="js-select2 form-select" id="subkategori_b" name="subkategori_b" required style="width: 100%;" data-placeholder="Choose one..">
                                <?php foreach ($subkategorib as $data) : ?>
                                      <option value="<?= $data->idsubkategori_b?>" <?= $data->idsubkategori_b == $product[0]->idsubkategori_b ? 'selected' : '' ?>><?= $data->namaSubKategori_b?></option>
                                  <?php endforeach; ?>
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
                                      <input type="text" class="form-control" name="harga" value="<?= $product[0]->harga?>" required>
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
                                    <?php
                                    $imageArray = explode(',', $product[0]->gambar);
                                    foreach ($imageArray as $data):
                                    ?>
                                        <div class="image-preview-container mb-2 me-2">
                                            <img class="img-avatar" style="height:150px;width:150px;" src="<?= base_url('uploads/'.$data) ?>" alt="">
                                            <span class="remove-preview" onclick="removeExistingImage('<?= $data ?>')">Remove</span>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                              <div class="mb-4 ">
                                  <input class="form-control" type="hidden" id="one" name="gambar_lama" value="<?= $product[0]->gambar?>" accept="image/*" multiple >
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

    
    function loadSubkategoriA() {
        var selectedKategori = $("#kategori").val();

        // Perform AJAX request to get subcategories based on the selected category
        $.ajax({
            url: "<?= site_url('Supplier/Product/getSubkategoriAOptions') ?>",
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
            url: "<?= site_url('Supplier/Product/getSubkategoriBOptions') ?>",
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

    
    function setupFileInput() {
        var fileInput = document.getElementById('one-profile-edit-avatar');
        var previewContainer = document.getElementById('previewContainer');

        if (!fileInput.files || fileInput.files.length === 0) {
            return;
        }


        for (var i = 0; i < fileInput.files.length; i++) {
            var reader = new FileReader();

            reader.onload = function (e) {
                var imageContainer = document.createElement('div');
                imageContainer.className = 'image-preview-container mb-2 me-2';

                var imageHtml = '<img class="img-avatar" style="height:150px;width:150px;" src="' + e.target.result + '" alt="Preview">';
                var removeButton = document.createElement('span');
                removeButton.className = 'remove-preview';
                removeButton.textContent = 'Remove';
                removeButton.onclick = function () { removeSinglePreview(this); };

                imageContainer.innerHTML = imageHtml;
                imageContainer.appendChild(removeButton);

                previewContainer.appendChild(imageContainer);
            };

            reader.readAsDataURL(fileInput.files[i]);
        }

        // Add new image values to the form
        fileInput.files.forEach(file => {
            var valueInput = document.createElement('input');
            valueInput.type = 'hidden';
            valueInput.name = 'gambar[]';
            valueInput.value = file.name; // You may want to use a unique identifier for each file
            previewContainer.appendChild(valueInput);
        });
    }

    document.addEventListener('DOMContentLoaded', function () {
        document.getElementById('one-profile-edit-avatar').addEventListener('change', function (event) {
            setupFileInput();
        });
    });

    function removeExistingImage(imageName) {
        // Create a hidden input field to store the removed image
        var input = document.createElement('input');
        input.type = 'hidden';
        input.name = 'remove_images[]';
        input.value = imageName;

        // Find the parent container of the image to be removed
        var previewContainer = document.getElementById('previewContainer');
        var imageToRemove = previewContainer.querySelector(".img-avatar[src*='" + imageName + "']");
        if (imageToRemove) {
            var parentContainer = imageToRemove.closest('.image-preview-container');
            if (parentContainer) {
                // Remove the image preview from the DOM
                parentContainer.parentNode.removeChild(parentContainer);

                // Append the hidden input field
                document.getElementById('one').parentNode.appendChild(input);
            }
        }
    }
</script>
<?php $this->load->view($footer) ?>