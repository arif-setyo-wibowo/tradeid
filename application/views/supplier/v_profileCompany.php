<?php $this->load->view($header); ?>

<!-- Hero -->
<div class=""></div>
<div class="">
    <div class="bg-white ">
        <div class="content content-full text-center ">
            <div class="my-3 ">
                <img class="img-avatar img-avatar-thumb" src="<?= base_url() ?>./assets/admin/media/avatars/avatar13.jpg" alt="">
            </div>
            <h1 class="h2  mb-0">PT Mencari Cinta Sejati</h1>
            <h2 class="h4 fw-normal-75">
                Arif Setyo
            </h2>
        </div>
    </div>
</div>
<!-- END Hero -->

<!-- Page Content -->
<div class="content content-boxed">
    <!-- User Profile -->
    <div class="block block-rounded">
        <div class="block-header block-header-default">
            <h3 class="block-title">Company Information</h3>
        </div>
        <div class="block-content">
            <form action="be_pages_projects_edit.html" method="POST" enctype="multipart/form-data"
                onsubmit="return false;">
                <div class="row push">
                    <div class="col-lg-4">
                        <p class="fs-sm text-muted">
                            Your companys’s vital info. Your Company will be publicly visible.
                        </p>
                    </div>
                    <div class="col-lg-8 col-xl-5">
                        <div class="mb-4">
                            <label class="form-label" for="one-profile-edit-username">Company Name</label>
                            <input type="text" class="form-control" id="one-profile-edit-username"
                                name="one-profile-edit-username" placeholder="" value="<?= $supplier[0]->namaPerusahaan?>">
                        </div>
                        <div class="mb-4">
                            <label class="form-label" for="one-profile-edit-username">Address</label>
                            <textarea id="textareaExample" class="form-control" style="height: 150px" required></textarea>
                        </div>
                        <div class="mb-4">
                            <label class="form-label">Your Logo</label>
                            <div class="mb-4">
                                <img class="img-avatar" src="<?= base_url() ?>./assets/admin/media/avatars/avatar13.jpg" alt="">
                            </div>
                            <div class="mb-4">
                                <label for="one-profile-edit-avatar" class="form-label">Choose a new Logo</label>
                                <input class="form-control" type="file" id="one-profile-edit-avatar">
                            </div>
                        </div>
                        <div class="mb-4">
                            <button type="submit" class="btn btn-alt-primary">
                                Update
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- END User Profile -->

    <!-- Billing Information -->
    <div class="block block-rounded">
        <div class="block-header block-header-default">
            <h3 class="block-title">Description Company</h3>
        </div>
        <div class="block-content">
            <form action="be_pages_projects_edit.html" method="POST" onsubmit="return false;">
                <div class="row push">
                    <div class="col-lg-4">
                    </div>
                    <div class="col-lg-12 col-xl-12">
                        <div class="mb-4">
                            <label class="form-label" for="one-ecom-product-description-short">Short Description</label>
                            <p class="fs-sm text-muted">
                                Your short Description information about your companys’s 
                            </p>
                            <textarea class="form-control" id="one-ecom-product-description-short"
                                name="one-ecom-product-description-short" rows="4" maxlength="70"></textarea>
                        </div>
                        <div class="mb-4">
                            <!-- CKEditor (js-ckeditor-inline + js-ckeditor ids are initialized in Helpers.jsCkeditor()) -->
                            <!-- For more info and examples you can check out http://ckeditor.com -->
                            <label class="form-label">Description</label>
                            <p class="fs-sm text-muted">
                                Your Full Description information about your companys’s
                            </p>
                            <textarea id="js-ckeditor" name="one-ecom-product-description"></textarea>
                        </div>
                        <div class="mb-4">
                            <button type="submit" class="btn btn-alt-primary">
                                Update
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- END Billing Information -->

    <!-- Connections -->
    <div class="block block-rounded">
        <div class="block-header block-header-default">
            <h3 class="block-title">Social Media</h3>
        </div>
        <div class="block-content">
            <div class="row push">
                <div class="col-lg-4">
                    <p class="fs-sm text-muted">
                        Copy and Paste Link your social media
                    </p>
                </div>
                <div class="col-lg-8 col-xl-7">
                        <div class="mb-4 col-sm-10 col-md-8 col-xl-6 text-primary">
                            <label class="form-label" for="one-profile-edit-street-1"><i class="fab fa-fw fa-facebook  me-1"></i> Connect to Facebook </label>
                            <input type="text" class="form-control" id="one-profile-edit-street-1" name="one-profile-edit-street-1">
                        </div>
                        <div class="mb-4 col-sm-10 col-md-8 col-xl-6 text-smooth">
                            <label class="form-label" for="one-profile-edit-street-1"><i class="fab fa-fw fa-instagram  me-1"></i> Connect to Intagram </label>
                            <input type="text" class="form-control" id="one-profile-edit-street-1" name="one-profile-edit-street-1">
                        </div>
                        <div class="mb-4 col-sm-10 col-md-8 col-xl-6 text-modern">
                            <label class="form-label" for="one-profile-edit-street-1"><i class="fab fa-fw fa-linkedin  me-1"></i> Connect to LinkedIn </label>
                            <input type="text" class="form-control" id="one-profile-edit-street-1" name="one-profile-edit-street-1">
                        </div>
                        <div class="mb-4 col-sm-10 col-md-8 col-xl-6 text-city">
                            <label class="form-label" for="one-profile-edit-street-1"><i class="fab fa-fw fa-dribbble  me-1"></i> Connect to Website </label>
                            <input type="text" class="form-control" id="one-profile-edit-street-1" name="one-profile-edit-street-1">
                        </div>
                        <div class="mb-4 col-sm-10 col-md-8 col-xl-6">
                            <button type="submit" class="btn btn-alt-primary">
                                Update
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END Connections -->
</div>
<!-- END Page Content -->

<?php $this->load->view($footer) ?>