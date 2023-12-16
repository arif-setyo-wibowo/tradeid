<?php $this->load->view($header); ?>



<!-- Hero -->
<div class=""></div>
<div class="">
    <div class="bg-white ">
        <div class="content content-full ">
            <div class="my-3 ">
            </div>
            <h1 class="h2  mb-0">Add New Facilities</h1>
        </div>
    </div>
</div>
<!-- END Hero -->

<!-- Page Content -->
<div class="content">
          <form action="<?= base_url('tambahFacility') ?>" method="POST" enctype="multipart/form-data">
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
                                <label for="one-profile-edit-avatar" class="form-label">Choose a new Image</label>
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
                            <div class="mb-4">
                              <label class="form-label" for="one-ecom-product-name">Name of Facility</label>
                              <input type="hidden" class="form-control" id="one-ecom-product-name" name="idcompany" value="<?= $company[0]->idcompany?>">
                              <input type="text" class="form-control" id="one-ecom-product-name" name="nama">
                            </div>
                            <div class="mb-4">
                              <label class="form-label" for="one-ecom-product-description-short">Description</label>
                              <textarea class="form-control" id="one-ecom-product-description-short" name="deskripsi" rows="4"></textarea>
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
                          <button type="submit"  class="btn bg-amethyst text-white ">Add Facility</button>
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