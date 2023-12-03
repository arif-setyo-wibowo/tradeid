<?php $this->load->view($header); ?>



<div class="content">
  <div class="row">
    <div class="col-10">
    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
        <li class="breadcrumb-item active"><a href="">Product</a></li>
        <li class="breadcrumb-item active" aria-current="page">Add Product</li>
      </ol>
    </nav>
    </div>
    
  </div>
</div>
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
                          <h3>General information</h3>
                            <div class="mb-4">
                              <label class="form-label" for="one-ecom-product-name">Name your product</label>
                              <input type="text" class="form-control" id="one-ecom-product-name" name="one-ecom-product-name" value="">
                            </div>
                            <div class="mb-4">
                              <!-- CKEditor (js-ckeditor-inline + js-ckeditor ids are initialized in Helpers.jsCkeditor()) -->
                              <!-- For more info and examples you can check out http://ckeditor.com -->
                              <label class="form-label">Description</label>
                              <textarea id="js-ckeditor" name="one-ecom-product-description"></textarea>
                            </div>
                            <div class="mb-4">
                              <label class="form-label" for="one-ecom-product-description-short">Short Description</label>
                              <textarea class="form-control" id="one-ecom-product-description-short" name="one-ecom-product-description-short" rows="4"></textarea>
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
                                <select class="js-select2 form-select" id="" name="one-ecom-product-category" style="width: 100%;" data-placeholder="Choose one..">
                                  <option></option><!-- Required for data-placeholder attribute to work with Select2 plugin -->
                                  <option value="1">Cables</option>
                                  <option value="2" >Video Games</option>
                                  <option value="3">Tablets</option>
                                  <option value="4">Laptops</option>
                                  <option value="5">PC</option>
                                  <option value="6">Home Cinema</option>
                                  <option value="7">Sound</option>
                                  <option value="8">Office</option>
                                  <option value="9">Adapters</option>
                                </select>
                              </div>
                              <div class="mb-4">
                                <!-- Select2 (.js-select2 class is initialized in Helpers.jqSelect2()) -->
                                <!-- For more info and examples you can check out https://github.com/select2/select2 -->
                                <label class="form-label" for="one-ecom-product-category">Sub-Category</label>
                                <select class="js-select2 form-select" id="one-ecom-product" name="one" style="width: 100%;" data-placeholder="Choose one..">
                                  <option></option><!-- Required for data-placeholder attribute to work with Select2 plugin -->
                                  <option value="1">Cables</option>
                                  <option value="2" >Video Games</option>
                                  <option value="3">Tablets</option>
                                  <option value="4">Laptops</option>
                                  <option value="5">PC</option>
                                  <option value="6">Home Cinema</option>
                                  <option value="7">Sound</option>
                                  <option value="8">Office</option>
                                  <option value="9">Adapters</option>
                                </select>
                              </div>
                              <div class="mb-4">
                                <!-- Select2 (.js-select2 class is initialized in Helpers.jqSelect2()) -->
                                <!-- For more info and examples you can check out https://github.com/select2/select2 -->
                                <label class="form-label" for="one-ecom-product-category">Sub-Category</label>
                                <select class="js-select2 form-select" id="one-ecom-product-category" name="one-ecom-product-" style="width: 100%;" data-placeholder="Choose one..">
                                  <option></option><!-- Required for data-placeholder attribute to work with Select2 plugin -->
                                  <option value="1">Cables</option>
                                  <option value="2" >Video Games</option>
                                  <option value="3">Tablets</option>
                                  <option value="4">Laptops</option>
                                  <option value="5">PC</option>
                                  <option value="6">Home Cinema</option>
                                  <option value="7">Sound</option>
                                  <option value="8">Office</option>
                                  <option value="9">Adapters</option>
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
                                      <input type="text" class="form-control" id="one-ecom-product-price" name="one-ecom-product-price" value=" ">
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
                            <div class="row mb-4">
                              <div class="col-md-6 col-lg-12">
                              <label class="form-label" for="one-ecom-product-price">Image Product</label>
                              <div class="dropzone" action="/"></div>
                              </div>
                            </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
          
          <!-- END Info -->
        
        </div>
        </form>
        <!-- END Page Content -->
<?php $this->load->view($footer) ?>