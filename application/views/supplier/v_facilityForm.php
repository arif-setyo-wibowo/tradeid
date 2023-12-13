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
          <form action="">
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
                                <input class="form-control" type="file" name="upgambar" id="one-profile-edit-avatar">
                                <input type="hidden" class="form-control" name="lastgambar" value="">
                            </div>
                        </div>
                      </div>
                          </div>
                            <div class="mb-4">
                              <label class="form-label" for="one-ecom-product-name">Name of Facility</label>
                              <input type="text" class="form-control" id="one-ecom-product-name" name="one-ecom-product-name" value="">
                            </div>
                            <div class="mb-4">
                              <label class="form-label" for="one-ecom-product-description-short">Description</label>
                              <textarea class="form-control" id="one-ecom-product-description-short" name="one-ecom-product-description-short" rows="4"></textarea>
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
                          <a href="<?= base_url()?>supplier/facility" class="btn bg-gray-light ">cancel</a>
                          <button type="submit"  class="btn bg-amethyst text-white ">Add product</button>
                        </div>
                    </div>
                  </div>
                </div>
            </div>    
          <!-- END Info -->
        
        </div>
        </form>

<?php $this->load->view($footer) ?>