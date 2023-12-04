<?php $this->load->view($header)?>
<!-- Main Container -->
<!-- Page Content -->
<div class="content content-boxed">
    <!-- User Profile -->
   
    <div class="block block-rounded">
        <div class="block-header block-header-default">
            <h3 class="block-title">Company Information</h3>
        </div>
        <div class="block-content">
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="row push container">
                    <div class="col-lg-12 col-xl-8">
                        <div class="mb-4 text-center">
                            <label class="form-label">Your Logo</label>
                            <div class="mb-4">
                                <img id="previewAvatar" class="img-avatar" style="height:150px;width:150px;" src="<?= base_url() ?>./assets/admin/media/avatars/avatar13.jpg" alt="">
                            </div>
                            <div class="mb-4">
                                <label for="one-profile-edit-avatar" class="form-label">Choose a new Logo</label>
                                <input class="form-control" type="file" name="gambar" id="one-profile-edit-avatar">
                            </div>
                        </div>
                        <div class="mb-4">
                            <label class="form-label" for="one-profile-edit-username">Nama</label>
                            <input type="hidden" class="form-control" placeholder="" name="iduser" >
                            <input type="text" class="form-control" id="one-profile-edit-username" placeholder="" name="company" value="">
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
        
<?php $this->load->view($footer)?>