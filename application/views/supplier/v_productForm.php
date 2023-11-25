<?php $this->load->view($header); ?>

<!-- Hero Content -->
<div class="bg-primary-dark">
    <div class="content content-full overflow-hidden pt-7 pb-6 text-center">
        <h1 class="h2 text-white mb-2">
            Manage Your Product
        </h1>
        <h2 class="h4 fw-normal text-white-75 mb-0">
            Feel free to create and Edit.
        </h2>
    </div>
</div>
<!-- END Hero Content -->

<!-- Page Content -->
<div class="content">

          <!-- Info -->
          <div class="block block-rounded">
            <div class="block-header block-header-default">
              <h3 class="block-title">Product</h3>
            </div>
            <div class="block-content">
              <div class="row justify-content-center">
                <div class="col-md-10 col-lg-8">
                  <form action="be_pages_ecom_product_edit.html" method="POST" onsubmit="return false;">
                    <div class="mb-4">
                      <label class="form-label" for="one-ecom-product-name">Name your product</label>
                      <input type="text" class="form-control" id="one-ecom-product-name" name="one-ecom-product-name" value="">
                    </div>
                    <div class="mb-4">
                      <!-- CKEditor (js-ckeditor-inline + js-ckeditor ids are initialized in Helpers.jsCkeditor()) -->
                      <!-- For more info and examples you can check out http://ckeditor.com -->
                      <label class="form-label">Description</label>
                      <textarea class="form-control" id="one-ecom-product-description-short" name="one-ecom-product-description-short" rows="4"></textarea>
                      
                    </div>
                    <div class="mb-4">
                      <label class="form-label" for="one-ecom-product-description-short">Short Description</label>
                      <textarea class="form-control" id="one-ecom-product-description-short" name="one-ecom-product-description-short" rows="4"></textarea>
                    </div>
                    <div class="mb-4">
                      <!-- Select2 (.js-select2 class is initialized in Helpers.jqSelect2()) -->
                      <!-- For more info and examples you can check out https://github.com/select2/select2 -->
                      <label class="form-label" for="one-ecom-product-meta-keywords">Category</label>
                      <select class="js-select2 form-select" id="one-ecom-product-meta-keywords" name="one-ecom-product-meta-keywords" style="width: 100%;" data-placeholder="Choose many.." multiple>
                        <option></option><!-- Required for data-placeholder attribute to work with Select2 plugin -->
                        <option value="1" selected>Action</option>
                        <option value="2" selected>RPG</option>
                        <option value="3">Racing</option>
                        <option value="4">Strategy</option>
                        <option value="5">Adventure</option>
                        <option value="6">Strategy</option>
                        <option value="7">Puzzle</option>
                        <option value="8">Horror</option>
                        <option value="9">MMO</option>
                      </select>
                    </div>
                    <div class="row mb-4">
                      <div class="col-md-6">
                        <label class="form-label" for="one-ecom-product-price">Price FOB USD ($)</label>
                        <input type="text" class="form-control" id="one-ecom-product-price" name="one-ecom-product-price" value=" ">
                      </div>
                    </div>
                    <div class="row mb-4">
                      <div class="col-md-6">
                      <label class="form-label" for="one-ecom-product-price">Image Product</label>
                      <div class="dropzone" action="/"></div>
                      </div>
                    </div>
                    <div class="mb-4">
                      <button type="submit" class="btn btn-alt-primary">Insert</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <!-- END Info -->
        </div>
        <!-- END Page Content -->
<?php $this->load->view($footer) ?>