<?php $this->load->view($header); ?>

<!-- Hero -->
<div class=""></div>
<div class="">
    <div class="bg-white ">
        <div class="content content-full text-center ">
            <div class="my-3 ">
                <?php if($cekdata == null) : ?>
                    <img class="img-avatar img-avatar-thumb" src="<?= base_url() ?>./assets/admin/media/avatars/avatar13.jpg" alt="">
                <?php else :?>
                    <img class="img-avatar img-avatar-thumb" src="<?= base_url('uploads/'.$cekdata[0]->gambarCompany) ?>" alt="">
                <?php endif;?>
            </div>
            <h1 class="h2  mb-0">
                <?= $supplier[0]->namaPerusahaan?></h1>
            <h2 class="h4 fw-normal-75">
                <?= $supplier[0]->nama?>
            </h2>
        </div>
    </div>
</div>
<!-- END Hero -->

<!-- Page Content -->
<div class="content content-boxed">
    <!-- User Profile -->
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
            &nbsp;
    <div class="block block-rounded">
        <div class="block-header block-header-default">
            <h3 class="block-title">Company Information</h3>
        </div>
        <div class="block-content">
        <?php if($cekdata == null) : ?>
            <form action="<?= base_url('tambahcompany')?>" method="POST" enctype="multipart/form-data">
                <div class="row push">
                    <div class="col-lg-4">
                        <p class="fs-sm text-muted">
                            Your companys’s vital info. Your Company will be publicly visible.
                        </p>
                    </div>
                    <div class="col-lg-8 col-xl-5">
                        <div class="mb-4">
                            <label class="form-label" for="one-profile-edit-username">Company Name</label>
                            <input type="hidden" class="form-control" placeholder="" name="idsupplier"  value="<?= $supplier[0]->idsupplier?>">
                            <input type="text" class="form-control" id="one-profile-edit-username" placeholder="" name="company" value="<?= $supplier[0]->namaPerusahaan?>">
                        </div>
                        <div class="mb-4">
                            <label class="form-label" for="one-profile-edit-username">Address Company</label>
                            <textarea id="textareaExample" class="form-control" name="alamat" style="height: 150px" required></textarea>
                        </div>
                        <div class="form-select-wrapper mb-4">
                            <?php 
                                $daftarKota = array(
                                    "Ambon", "Balikpapan", "Banda Aceh", "Bandar Lampung", "Bandung", "Banjar", "Banjarbaru", "Banjarmasin",
                                    "Batam", "Batu", "Baubau", "Bekasi", "Bengkulu", "Bima", "Binjai", "Blitar", "Bogor", "Bontang",
                                    "Bukittinggi", "Cilegon", "Cimahi", "Cirebon", "Denpasar", "Depok", "Dumai", "Gorontalo", "Gunungsitoli",
                                    "Jakarta Barat", "Jakarta Pusat", "Jakarta Selatan", "Jakarta Timur", "Jakarta Utara", "Jambi", "Jayapura",                              
                                    "Kediri", "Kendari", "Kotamobagu", "Kupang", "Langsa", "Lhokseumawe", "Lubuklinggau", "Madiun", "Magelang",
                                    "Makassar", "Malang", "Manado", "Mataram", "Medan", "Metro", "Mojokerto", "Padang", "Padang Panjang", 
                                    "Padang Sidempuan", "Pagar Alam", "Palangka Raya", "Palembang", "Palopo", "Palu", "Pangkalpinang", 
                                    "Parepare", "Pariaman", "Pasuruan", "Payakumbuh", "Pekalongan", "Pekanbaru", "Pematangsiantar", 
                                    "Pontianak", "Prambulih", "Probolinggo", "Sabang", "Salatiga", "Samarinda", "Sawahlunto", "Semarang",
                                    "Serang", "Sibolga", "Singkawang", "Solok", "Sorong", "Subulussalam", "Sukabumi", "Sungai Penuh", 
                                    "Surabaya", "Surakarta", "Tangerang Selatan", "Tangerang", "Tanjungbalai", "Tanjungpinang", "Tarakan",
                                    "Tasikmalaya", "Tebing Tinggi", "Tegal", "Ternate", "Tidore Kepulauan", "Tomohon", "Tual", "Yogyakarta"
                                );

                                sort($daftarKota);
                            ?>
                            <select class="form-select" aria-label="Default select example" name="kota">
                                <option disabled selected>Choose City</option>
                                    <?php foreach ($daftarKota as $kota) : ?>
                                        <option value="<?= $kota ?>"><?= $kota ?></option>
                                    <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="mb-4">
                            <label class="form-label">Your Logo</label>
                            <div class="mb-4">
                                <img id="previewAvatar" class="img-avatar" style="height:150px;width:150px;" src="<?= base_url() ?>./assets/admin/media/avatars/avatar13.jpg" alt="">
                            </div>
                            <div class="mb-4">
                                <label for="one-profile-edit-avatar" class="form-label">Choose a new Logo</label>
                                <input class="form-control" type="file" name="gambarCompany" id="one-profile-edit-avatar">
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
        <?php else : ?>
            <form action="<?= base_url('updatecompany')?>" method="POST" enctype="multipart/form-data">
                <div class="row push">
                    <div class="col-lg-4">
                        <p class="fs-sm text-muted">
                            Your companys’s
                        </p>
                    </div>
                    <div class="col-lg-8 col-xl-5">
                        <div class="mb-4">
                            <label class="form-label" for="one-profile-edit-username">Company Name</label>
                            <input type="hidden" name="idsupplier" value="<?= $cekdata[0]->idsupplier?>">
                            <input type="text" class="form-control" placeholder="" name="ucompany" value="<?= $cekdata[0]->namaPerusahaan?>">
                        </div>
                        <div class="mb-4">
                            <label class="form-label" for="one-profile-edit-username">Address Company</label>
                            <textarea id="textareaExample" class="form-control" name="ualamat" style="height: 150px" required><?= $cekdata[0]->alamat?></textarea>
                        </div>
                        <div class="form-select-wrapper mb-4">
                            <select class="form-select" aria-label="Default select example" name="ukota">
                                <option disabled selected>Choose City</option>
                                <div class="form-select-wrapper mb-4">
                                    <?php 
                                        $daftarKota = array(
                                            "Ambon", "Balikpapan", "Banda Aceh", "Bandar Lampung", "Bandung", "Banjar", "Banjarbaru", "Banjarmasin",
                                            "Batam", "Batu", "Baubau", "Bekasi", "Bengkulu", "Bima", "Binjai", "Blitar", "Bogor", "Bontang",
                                            "Bukit tinggi", "Cilegon", "Cimahi", "Cirebon", "Denpasar", "Depok", "Dumai", "Gorontalo", "Gunungsitoli",
                                            "Jakarta Barat", "Jakarta Pusat", "Jakarta Selatan", "Jakarta Timur", "Jakarta Utara", "Jambi", "Jayapura",                              
                                            "Kediri", "Kendari", "Kotamobagu", "Kupang", "Langsa", "Lhokseumawe", "Lubuklinggau", "Madiun", "Magelang",
                                            "Makassar", "Malang", "Manado", "Mataram", "Medan", "Metro", "Mojokerto", "Padang", "Padang Panjang", 
                                            "Padang Sidempuan", "Pagar Alam", "Palangka Raya", "Palembang", "Palopo", "Palu", "Pangkalpinang", 
                                            "Parepare", "Pariaman", "Pasuruan", "Payakumbuh", "Pekalongan", "Pekanbaru", "Pematangsiantar", 
                                            "Pontianak", "Prambulih", "Probolinggo", "Sabang", "Salatiga", "Samarinda", "Sawahlunto", "Semarang",
                                            "Serang", "Sibolga", "Singkawang", "Solok", "Sorong", "Subulussalam", "Sukabumi", "Sungai Penuh", 
                                            "Surabaya", "Surakarta", "Tangerang Selatan", "Tangerang", "Tanjungbalai", "Tanjungpinang", "Tarakan",
                                            "Tasikmalaya", "Tebing Tinggi", "Tegal", "Ternate", "Tidore Kepulauan", "Tomohon", "Tual", "Yogyakarta"
                                        );

                                        sort($daftarKota);
                                    ?>
                                        <?php foreach ($daftarKota as $kota) : ?>
                                            <option value="<?= $kota ?>" <?php if ($cekdata[0]->kota === $kota) echo "selected"; ?>><?= $kota ?></option>
                                        <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="mb-4">
                            <label class="form-label">Your Logo</label>
                            <div class="mb-4">
                                <img class="img-avatar" id="previewAvatar"  style="height:250px;width:250px;" src='<?php echo base_url() ?>uploads/<?php echo $cekdata[0]->gambarCompany ?>'>
                            </div>
                            <div class="mb-4">
                                <label for="one-profile-edit-avatar" class="form-label">Choose a new Logo</label>
                                <input class="form-control" type="file" name="upgambar" id="one-profile-edit-avatar">
                                <input type="hidden" class="form-control" name="lastgambar" value="<?= $cekdata[0]->gambarCompany ?>">
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
        <?php endif;?>
        </div>
    </div>
    <!-- END User Profile -->

    <!-- Billing Information -->
    <div class="block block-rounded">
        <div class="block-header block-header-default">
            <h3 class="block-title">Description Company</h3>
        </div>
        <div class="block-content">
        <?php if($cekdata == null) : ?>
            <form action="<?= base_url('tambahdeskripsi')?>" method="POST" >
                <div class="row push">
                    <div class="col-lg-4">
                    </div>
                    <div class="col-lg-12 col-xl-12">
                        <div class="mb-4">
                            <label class="form-label" for="one-ecom-product-description-short">Short Description</label>
                            <p class="fs-sm text-muted">
                                Your short Description information about your companys’s 
                            </p>
                            <input type="hidden" class="form-control" placeholder="" name="idsupplier" value="<?= $supplier[0]->idsupplier?>">
                            <textarea class="form-control" id="one-ecom-product-description-short"
                                name="despen" rows="4" maxlength="70"><?= $supplier[0]->deskripsiPerusahaan ?></textarea>
                        </div>
                        <div class="mb-4">
                            <label class="form-label">Description</label>
                            <p class="fs-sm text-muted">
                                Your Full Description information about your companys’s
                            </p>
                            <textarea id="js-ckeditor" name="despan"></textarea>
                        </div>
                        <div class="mb-4">
                            <button type="submit" class="btn btn-alt-primary">
                                Update
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        <?php else : ?>
            <form action="<?= base_url('updatedeskripsi')?>" method="POST" >
                <div class="row push">
                    <div class="col-lg-4">
                    </div>
                    <div class="col-lg-12 col-xl-12">
                        <div class="mb-4">
                            <label class="form-label" for="one-ecom-product-description-short">Short Description</label>
                            <p class="fs-sm text-muted">
                                Your short Description information about your companys’s 
                            </p>
                            <input type="hidden" name="idsupplier" value="<?= $cekdata[0]->idsupplier?>">
                            <textarea class="form-control"
                                name="udespen" rows="4" maxlength="70"><?= $cekdata[0]->deskripsiPendek?></textarea>
                        </div>
                        <div class="mb-4">
                            <label class="form-label">Description</label>
                            <p class="fs-sm text-muted">
                                Your Full Description information about your companys’s
                            </p>
                            <textarea id="js-ckeditor" name="udespan"><?= $cekdata[0]->deskripsiPanjang?></textarea>
                        </div>
                        <div class="mb-4">
                            <button type="submit" class="btn btn-alt-primary">
                                Update
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        <?php endif;?>
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
                <?php if($cekdata == null) : ?>
                    <form action="<?= base_url('tambahsosmed')?>" method="POST">
                        <input type="hidden" class="form-control" name="idsupplier" value="<?= $supplier[0]->idsupplier?>">
                        <div class="mb-4 col-sm-10 col-md-8 col-xl-6 text-primary">
                            <label class="form-label" for="one-profile-edit-street-1"><i class="fab fa-fw fa-facebook  me-1"></i> Connect to Facebook </label>
                            <input type="text" class="form-control" name="facebook">
                        </div>
                        <div class="mb-4 col-sm-10 col-md-8 col-xl-6 text-smooth">
                            <label class="form-label" for="one-profile-edit-street-1"><i class="fab fa-fw fa-instagram  me-1"></i> Connect to Instagram </label>
                            <input type="text" class="form-control" name="instagram">
                        </div>
                        <div class="mb-4 col-sm-10 col-md-8 col-xl-6 text-modern">
                            <label class="form-label" for="one-profile-edit-street-1"><i class="fab fa-fw fa-linkedin  me-1"></i> Connect to LinkedIn </label>
                            <input type="text" class="form-control" name="linkedin">
                        </div>
                        <div class="mb-4 col-sm-10 col-md-8 col-xl-6 text-city">
                            <label class="form-label" for="one-profile-edit-street-1"><i class="fab fa-fw fa-dribbble  me-1"></i> Connect to Website </label>
                            <input type="text" class="form-control" name="website">
                        </div>
                        <div class="mb-4 col-sm-10 col-md-8 col-xl-6">
                            <button type="submit" class="btn btn-alt-primary">
                                Update
                            </button>
                        </div>
                    </form>
                <?php else : ?>
                    <form action="<?= base_url('updatesosmed')?>" method="POST">
                    <input type="hidden" class="form-control" placeholder="" name="idsupplier" value="<?= $cekdata[0]->idsupplier?>">
                        <div class="mb-4 col-sm-10 col-md-8 col-xl-6 text-primary">
                            <label class="form-label" for="one-profile-edit-street-1"><i class="fab fa-fw fa-facebook  me-1"></i> Connect to Facebook </label>
                            <input type="text" class="form-control" name="ufacebook" value="<?= $cekdata[0]->facebook?>">
                        </div>
                        <div class="mb-4 col-sm-10 col-md-8 col-xl-6 text-smooth">
                            <label class="form-label" for="one-profile-edit-street-1"><i class="fab fa-fw fa-instagram  me-1"></i> Connect to Instagram </label>
                            <input type="text" class="form-control" name="uinstagram" value="<?= $cekdata[0]->instagram?>">
                        </div>
                        <div class="mb-4 col-sm-10 col-md-8 col-xl-6 text-modern">
                            <label class="form-label" for="one-profile-edit-street-1"><i class="fab fa-fw fa-linkedin  me-1"></i> Connect to LinkedIn </label>
                            <input type="text" class="form-control" name="ulinkedin" value="<?= $cekdata[0]->linkedin?>">
                        </div>
                        <div class="mb-4 col-sm-10 col-md-8 col-xl-6 text-city">
                            <label class="form-label" for="one-profile-edit-street-1"><i class="fab fa-fw fa-dribbble  me-1"></i> Connect to Website </label>
                            <input type="text" class="form-control" name="uwebsite" value="<?= $cekdata[0]->website?>">
                        </div>
                        <div class="mb-4 col-sm-10 col-md-8 col-xl-6">
                            <button type="submit" class="btn btn-alt-primary">
                                Update
                            </button>
                        </div>
                    </form>
                <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
    <!-- END Connections -->
</div>
<!-- END Page Content -->
<script>
    document.getElementById('one-profile-edit-avatar').addEventListener('change', function (event) {
        var fileInput = event.target;
        var previewImage = document.getElementById('previewAvatar');

        if (fileInput.files && fileInput.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                previewImage.src = e.target.result;
            };

            reader.readAsDataURL(fileInput.files[0]);
        }
    });
</script>
<?php $this->load->view($footer) ?>