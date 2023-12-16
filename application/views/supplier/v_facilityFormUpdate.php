<?php $this->load->view($header); ?>



<!-- Hero -->
<div class=""></div>
<div class="">
    <div class="bg-white ">
        <div class="content content-full ">
            <div class="my-3 ">
            </div>
            <h1 class="h2  mb-0">update Facilities</h1>
        </div>
    </div>
</div>
<!-- END Hero -->

<!-- Page Content -->
<div class="content">
          <form action="<?= base_url('updateFacility') ?>" method="POST" enctype="multipart/form-data">
          <!-- Info -->
            <div class="row ">
                <div class="col-lg-8">
                  <div class="block block-rounded">
                    <div class="block-content">
                      <div class="row justify-content-center">
                        <div class="col-md-10 col-lg-12">
                          <h3>Facility Information</h3>
                          <div class="mb-4">
                          <div class="row justify-content-center">
                        <div class="col-md-10 col-lg-12">
                            <div class="mb-4">
                                <label for="one-profile-edit-avatar" class="form-label">Update Image</label>
                                <div class="d-flex flex-wrap mt-2" id="previewContainer">
                                <?php
                                        $imageArray = explode(',', $facility[0]->gambarFacility);
                                        foreach ($imageArray as $data):
                                    ?>
                                        <div class="image-preview-container mb-2 me-2">
                                            <img class="img-avatar" style="height:150px;width:150px;" src="<?= base_url('uploads/'.$data) ?>" alt="">
                                            <span class="remove-preview" onclick="removeExistingImage('<?= $data ?>')">Remove</span>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                                <div class="mb-4 mt-3">
                                  <input class="form-control" type="hidden" id="one" name="gambar_lama" value="<?= $facility[0]->gambarFacility?>" accept="image/*" multiple >
                                  <input class="form-control" type="file" name="gambar[]" accept="image/*" multiple id="one-profile-edit-avatar">
                                </div>
                            </div>
                        </div>
                      </div>
                          </div>
                            <div class="mb-4">
                              <label class="form-label" for="one-ecom-product-name">Name of Facility</label>
                              <input type="hidden" class="form-control" id="one-ecom-product-name" name="idfacility" value="<?= $facility[0]->idfacility?>">
                              <input type="hidden" class="form-control" id="one-ecom-product-name" name="idcompany" value="<?= $company[0]->idcompany?>">
                              <input type="text" class="form-control" id="one-ecom-product-name" name="nama" value="<?= $facility[0]->namaFacility ?>">
                            </div>
                            <div class="mb-4">
                              <label class="form-label" for="one-ecom-product-description-short">Description</label>
                              <textarea class="form-control" id="one-ecom-product-description-short" name="deskripsi" rows="4"><?= $facility[0]->deskripsiFacility ?></textarea>
                            </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3">
                <div class="block block-rounded ">
                    <div class="block-content">
                        <div class="d-flex justify-between mb-3 gap-3">
                          <a href="<?= base_url()?>dashboard/supplier/facility" class="btn bg-gray-light ">cancel</a>
                          <button type="submit"  class="btn bg-amethyst text-white ">Update facility</button>
                        </div>
                    </div>
                  </div>
                </div>
            </div>    
          <!-- END Info -->
        
        </div>
        </form>


  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <script>

    $(document).ready(function () {
        setupFileInput();
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