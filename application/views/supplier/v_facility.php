<?php $this->load->view($header); ?>

<!-- Hero -->
<div class=""></div>
<div class="">
    <div class="bg-white ">
        <div class="content content-full ">
            <div class="my-3 ">
            </div>
            <h1 class="h2  mb-0">Facilities of <?= $company[0]->namaPerusahaan?></h1>
            <a href="<?= base_url('dashboard/supplier/facilityForm') ?>" class="my-auto btn text-primary "><i class="far fa-add"></i> Add Facility</a>
        </div>
    </div>
</div>
<!-- END Hero -->

<!-- Page Content -->
<?php  $pesan = $this->session->flashdata('pesan') ?>
            <?php  if($pesan != NULL) : ?>
                <div class="alert alert-success alert-icon alert-dismissible fade show mb-2" role="alert">
                    <i class="uil uil-check-circle"></i> <?= $pesan ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php elseif($pesan = $this->session->flashdata('pesan_e')) : ?>
                <div class="alert alert-danger alert-icon alert-dismissible fade show mb-2" role="alert">
                    <i class="uil uil-times-circle"></i> <?= $pesan ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php endif;?>
<div class="bg-body-extra-light">
          <div class="content content-boxed">
            <div class="row justify-content-center">
              <div class="col-sm-8">
                <!-- Story -->
                <article class="story">
                <?php foreach ($facility as $data) : ?>
                  <div class="row g-sm items-push js-gallery push img-fluid-100">
                  <?php  $imageArray = explode(',', $data->gambarFacility);
                          foreach ($imageArray as $Image): 
                  ?>
                    <div class="col-6 animated fadeIn">
                      <a class="img-link img-link-simple img-link-zoom-in img-lightbox" href="<?= base_url('uploads/'.$Image)?>">
                        <img class="img-fluid" src="<?= base_url('uploads/'.$Image)?>" alt="">
                      </a>
                    </div>
                  <?php endforeach; ?>
                  </div>
                  <!-- END Gallery -->
                  <div class="d-flex gap-2">
                    <h3 class="fw-bold my-auto"><?= $data->namaFacility?> </h3>
                    <a href="<?= base_url('dashboard/supplier/facility/editFacility/'.$data->idfacility)?>" class=" my-auto "><i  class="far fa-edit"></i></a>
                    <a href="javascript:void(0);" onclick="confirmDelete(<?= $data->idfacility ?>)" class=" my-auto "><i  class="fa fa-trash-can"></i></a>
                  </div>
                  <p><?= $data->deskripsiFacility?></p>               
                
                <?php endforeach;?>
                </article>
                <!-- END Story -->
              </div>
            </div>
          </div>
        </div>
        <!-- END Page Content -->

<script>
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
        window.location.href = "<?= base_url('deleteFacility/') ?>" + id;
      }
    });
  }
</script>

<?php $this->load->view($footer) ?>