    <?php $this->load->view($header); ?>

<section class="wrapper bg-gradient-primary">
    <div class="container py-3 py-md-5">
        <nav class="d-inline-block" aria-label="breadcrumb">
            
        </nav>
        <!-- /nav -->
    </div>
    <!-- /.container -->
</section>

<section class="wrapper bg-light">
    <div class="container py-14 py-md-16">
        <div class="row gx-md-8 gx-xl-12 gy-8">
            <div class="col-lg-6">
                <div class="swiper-container swiper-thumbs-container" data-margin="10" data-dots="false" data-nav="true" data-thumbs="true">
                    <div class="swiper">
                        <div class="swiper-wrapper">
                        <?php  $imageArray = explode(',', $product[0]->gambar);
                                foreach ($imageArray as $data): 
                                ?>
                            <div class="swiper-slide">
                                <figure class="rounded"><img src="<?= base_url('uploads/'.$data) ?>" srcset="<?= base_url('uploads/'.$data) ?>" alt="" /><a class="item-link" href="./assets/img/photos/shs1@2x.jpg" data-glightbox data-gallery="product-group"><i class="uil uil-focus-add"></i></a></figure>
                            </div>
                        <?php endforeach;?>
                        </div>
                        <!--/.swiper-wrapper -->
                    </div>
                    <!-- /.swiper -->
                    <div class="swiper swiper-thumbs">
                        <div class="swiper-wrapper">
                        <?php  $imageArray = explode(',', $product[0]->gambar);
                                foreach ($imageArray as $data): 
                                ?>
                            <div class="swiper-slide"><img src="<?= base_url('uploads/'.$data) ?>" srcset="<?= base_url('uploads/'.$data) ?>" class="rounded" alt="" /></div>
                            <?php endforeach;?>
                        </div>
                        <!--/.swiper-wrapper -->
                    </div>
                    <!-- /.swiper -->
                </div>
                <!-- /.swiper-container -->
            </div>
            <!-- /column -->
            <div class="col-lg-6">
                <div class="post-header mb-4">
                    <h2 class="post-title display-5"><?= $product[0]->namaProduk?></h2>
                    <p class="price fs-20 mb-2 text-blue">category : <a href="<?= base_url('product/'.$product[0]->idkategori.'/'.$product[0]->idsubkategori_a )?>" class="link-dark"><span class="amount"><?= $product[0]->namaSubKategori?></span> </a>, <a href="<?= base_url('product/'.$product[0]->idkategori.'/'.$product[0]->idsubkategori_a.'/'.$product[0]->idsubkategori_b )?>" class="link-dark"><span class="amount"> <?= $product[0]->namaSubKategori_b?></span></a></p>
                    <div class="fs">
                       <?= $product[0]->deskripsiProduk?>
                    </div>
                    <p class="text-blue">Price  :</p>
                    <div class="row">
                        <div class="col">
                            <p><span class="fw-bold">Price FOB in $USD :</span>  <?= $product[0]->harga?></p>
                            <!-- <p><span class="fw-bold">Production Capacity :</span>  100Mt/day</p> -->
                        </div>
                        <div class="col">
                            <!-- <p><span class="fw-bold">Minimum Order Qty : </span>  12ton</p>
                            <p><span class="fw-bold">Packaging : </span>  Gunny Bag</p> -->
                        </div>
                    </div>
                    <div class="post-body mb-5 d-flex">
                        <div class="m-5">
                            <a href="<?= base_url('supplier/detail/'.$product[0]->idcompany) ?>"><img style="max-width: 70px; max-height: 70px;" src="<?= base_url('uploads/'.$product[0]->gambarCompany) ?>" srcset="./assets/img/photos/sh1@2x.jpg 2x" alt="" /></a>
                        </div>
                        <div class="my-auto">
                            <p class=" price fs-20 mb-2"><a href="" class="link-dark"><span class="amount"><a href="<?= base_url('supplier/detail/'.$product[0]->idcompany)?>"><?= $product[0]->namaPerusahaan?></a></span></p>
                        </div>
                        
                    </div>
                    <div class="flex-grow-1 mx-2">
                        <a href="" class="btn btn-primary btn-icon btn-icon-start  rounded w-100 " data-bs-toggle="modal" data-bs-target="#modal-signin">
                            <i class="uil uil-envelope"></i> Inquire Now
                        </a>
                    </div>
                    
                </div>
                <!-- /.post-header -->
            </div>
            <!-- /column -->
        </div>
        <!-- /.row -->
        <!-- /.nav-tabs -->
        <!-- <div class="tab-content mt-0 mt-md-5">
            <div class="tab-pane fade show active" id="tab1-1">
                <h4>More Product similar to Coconut, Agriculture :</h4>
            </div>
            <div class=" item col-md-12 col-xl-12  p-3 bg-soft-sky rounded" style="margin-bottom:-30px;">
              <div class="row">
                <div class="d-flex justify-content-between">
                  <div class="">
                    <div class="post-category text-ash "><a class="text-blue" href="">Semi-Husked Coconut</a></div>
                  </div>
                  <div class="">
                    <div class="">
                      <h4 class="post-title h4 fs-18"><a href="./assets/admin/img/shop-product.html" class="link-dark">PT.Indo Coco</a></h4>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="d-flex mb-2">
                  <div class="">
                    <a href="<?= base_url() ?>Front/product/productDetail"><img style="max-width: 150px; max-height: 150px;" src="<?= base_url() ?>./assets/front/img/produk/fiber.jpg" srcset="./assets/img/photos/sh1@2x.jpg 2x" alt="" /></a>
                  </div>
                  <div class="" style="margin-left:10px;">
                    <div class="align-items-center">
                        <span>We have a different type of Coconut Briquette Charcoal 100% pure charcoal briquettes made from
                        the shell of coconut fruit and its dried pulp.
                        Specification Information: Moisture MAX 6% Ash Content MAX 2,4% Volatile Matter MAX 13% Fix Carbon
                        MIN 85% Calorific Value UP TO 7500 Kcal / kg
                        Heat Content UP TO 600 C Ignition Time MAX 10 minutes Glowing Time MIN 2 hours Size Cubes : 22 mm x
                        25 mm Size Hexagonal : 22 mm x 50 mm, 25 mm x
                        50 mm
                        </span>
                      </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="d-flex justify-content-between">
                  <div>
                    <div class="fs-16 text-ash ">Supplier From Jawa Timur, Malang</div>
                  </div>
                  <div >
                    <div>
                    <a href="" class="text-blue fs-sm" data-bs-toggle="modal" data-bs-target="#modal-signin"><i class="uil uil-envelope"></i> Inquire now</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            /.item 
        </div> -->
        <!-- /.tab-content -->
    </div>
    <!-- /.container -->

    <div class="modal fade" id="modal-signin" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content text-center">
        <?php if ($this->session->userdata('iduser') == null) : ?>
            <div class="modal-body">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <h2 class="mb-3 text-start">Contact Supplier</h2>
                <p class="lead mb-6 text-start">Your message will be sent to the supplier</p>
                <form class="text-start mb-3">
                <div class="form-floating mb-4">
                    <input type="text" class="form-control" placeholder="Email" value="" >
                    <label for="loginEmail">Your Name</label>
                </div>
                <div class="form-floating mb-4">
                    <input type="text" class="form-control" placeholder="Email" value="" >
                    <label for="loginEmail">Your Email</label>
                </div>
                <div class="form-floating mb-4">
                    <input type="text" class="form-control" placeholder="Email" value="">
                    <label for="loginEmail">Phone (Country And Area Code)</label>
                </div>
                <div class="form-floating mb-4">
                    <input type="text" class="form-control" placeholder="Email" value="">
                    <label for="loginEmail">Country</label>
                </div>
                <div class="form-floating mb-4">
                    <textarea id="textareaExample" class="form-control" placeholder="Textarea" style="height: 150px" required></textarea>
                    <label for="textareaExample">Message to Supplier</label>
                </div>
                <a href="" class="btn btn-primary rounded-pill btn-login w-100 mb-2" >Send Inquire</a>
                </form>
                <!-- /form -->
                <!--/.social -->
            </div>
        <?php else : ?>
            <div class="modal-body">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <h2 class="mb-3 text-start">Contact Supplier</h2>
                <p class="lead mb-6 text-start">Your message will be sent to the supplier</p>
                <form class="text-start mb-3" action="<?= base_url('inquireProduct/'.$product[0]->idproduct) ?>" method="POST">
                <div class="form-floating mb-4">
                    <input type="hidden" class="form-control" name="idproduct" value="<?= $product[0]->idproduct?>" >
                    <input type="hidden" class="form-control" name="idcompany" value="<?= $product[0]->idcompany?>" >
                    <input type="hidden" class="form-control" name="iduser" value="<?= $user->iduser?>" >
                    <input type="text" class="form-control" placeholder="Email" name="namaInquire" value="<?= $user->nama?>" >
                    <label for="loginEmail">Your Name</label>
                </div>
                <div class="form-floating mb-4">
                    <input type="text" class="form-control" placeholder="Email" name="emailInquire" value="<?= $user->email?>" >
                    <label for="loginEmail">Your Email</label>
                </div>
                <div class="form-floating mb-4">
                    <input type="text" class="form-control" placeholder="Email" name="telpInquire" value="<?= $user->telp?>">
                    <label for="loginEmail">Phone (Country And Area Code)</label>
                </div>
                <div class="form-floating mb-4">
                    <div class="form-select-wrapper">
                        <select class="form-select" name="negaraInquire" id="negaraDropdown">
                            <option  disabled value="">Choose Country</option>
                            <option value="Afghanistan" <?php if ($user->negara === "Afghanistan") echo "selected"; ?>>Afghanistan</option>
                            <option value="Albania" <?php if ($user->negara === "Albania") echo "selected"; ?>>Albania</option>
                            <option value="Algeria" <?php if ($user->negara === "Algeria") echo "selected"; ?>>Algeria</option>
                            <option value="Andorra" <?php if ($user->negara === "Andorra") echo "selected"; ?>>Andorra</option>
                            <option value="Angola" <?php if ($user->negara === "Angola") echo "selected"; ?>>Angola</option>
                            <option value="Argentina" <?php if ($user->negara === "Argentina") echo "selected"; ?>>Argentina</option>
                            <option value="Armenia" <?php if ($user->negara === "Armenia") echo "selected"; ?>>Armenia</option>
                            <option value="Australia" <?php if ($user->negara === "Australia") echo "selected"; ?>>Australia</option>
                            <option value="Austria" <?php if ($user->negara === "Austria") echo "selected"; ?>>Austria</option>
                            <option value="Azerbaijan" <?php if ($user->negara === "Azerbaijan") echo "selected"; ?>>Azerbaijan</option>
                            <option value="Bahrain" <?php if ($user->negara === "Bahrain") echo "selected"; ?>>Bahrain</option>
                            <option value="Bangladesh" <?php if ($user->negara === "Bangladesh") echo "selected"; ?>>Bangladesh</option>
                            <option value="Belgium" <?php if ($user->negara === "Belgium") echo "selected"; ?>>Belgium</option>
                            <option value="Bhutan" <?php if ($user->negara === "Bhutan") echo "selected"; ?>>Bhutan</option>
                            <option value="Bosnia and Herzegovina" <?php if ($user->negara === "Bosnia and Herzegovina") echo "selected"; ?>>Bosnia and Herzegovina</option>
                            <option value="Brazil" <?php if ($user->negara === "Brazil") echo "selected"; ?>>Brazil</option>
                            <option value="Brunei" <?php if ($user->negara === "Brunei") echo "selected"; ?>>Brunei</option>
                            <option value="Bulgaria" <?php if ($user->negara === "Bulgaria") echo "selected"; ?>>Bulgaria</option>
                            <option value="Cambodia" <?php if ($user->negara === "Cambodia") echo "selected"; ?>>Cambodia</option>
                            <option value="Canada" <?php if ($user->negara === "Canada") echo "selected"; ?>>Canada</option>
                            <option value="Chile" <?php if ($user->negara === "Chile") echo "selected"; ?>>Chile</option>
                            <option value="China" <?php if ($user->negara === "China") echo "selected"; ?>>China</option>
                            <option value="Colombia" <?php if ($user->negara === "Colombia") echo "selected"; ?>>Colombia</option>
                            <option value="Costa Rica" <?php if ($user->negara === "Costa Rica") echo "selected"; ?>>Costa Rica</option>
                            <option value="Croatia" <?php if ($user->negara === "Croatia") echo "selected"; ?>>Croatia</option>
                            <option value="Cuba" <?php if ($user->negara === "Cuba") echo "selected"; ?>>Cuba</option>
                            <option value="Czech Republic" <?php if ($user->negara === "Czech Republic") echo "selected"; ?>>Czech Republic</option>
                            <option value="Denmark" <?php if ($user->negara === "Denmark") echo "selected"; ?>>Denmark</option>
                            <option value="Dominica" <?php if ($user->negara === "Dominica") echo "selected"; ?>>Dominica</option>
                            <option value="Ecuador" <?php if ($user->negara === "Ecuador") echo "selected"; ?>>Ecuador</option>
                            <option value="Egypt" <?php if ($user->negara === "Egypt") echo "selected"; ?>>Egypt</option>
                            <option value="Estonia" <?php if ($user->negara === "Estonia") echo "selected"; ?>>Estonia</option>
                            <option value="Ethiopia" <?php if ($user->negara === "Ethiopia") echo "selected"; ?>>Ethiopia</option>
                            <option value="Fiji" <?php if ($user->negara === "Fiji") echo "selected"; ?>>Fiji</option>
                            <option value="Finland" <?php if ($user->negara === "Finland") echo "selected"; ?>>Finland</option>
                            <option value="France" <?php if ($user->negara === "France") echo "selected"; ?>>France</option>
                            <option value="Georgia" <?php if ($user->negara === "Georgia") echo "selected"; ?>>Georgia</option>
                            <option value="Germany" <?php if ($user->negara === "Germany") echo "selected"; ?>>Germany</option>
                            <option value="Ghana" <?php if ($user->negara === "Ghana") echo "selected"; ?>>Ghana</option>
                            <option value="Greece" <?php if ($user->negara === "Greece") echo "selected"; ?>>Greece</option>
                            <option value="Guatemala" <?php if ($user->negara === "Guatemala") echo "selected"; ?>>Guatemala</option>
                            <option value="Honduras" <?php if ($user->negara === "Honduras") echo "selected"; ?>>Honduras</option>
                            <option value="Hungary" <?php if ($user->negara === "Hungary") echo "selected"; ?>>Hungary</option>
                            <option value="Iceland" <?php if ($user->negara === "Iceland") echo "selected"; ?>>Iceland</option>
                            <option value="India" <?php if ($user->negara === "India") echo "selected"; ?>>India</option>
                            <option value="Indonesia" <?php if ($user->negara === "Indonesia") echo "selected"; ?>>Indonesia</option>
                            <option value="Iran" <?php if ($user->negara === "Iran") echo "selected"; ?>>Iran</option>
                            <option value="Iraq" <?php if ($user->negara === "Iraq") echo "selected"; ?>>Iraq</option>
                            <option value="Ireland" <?php if ($user->negara === "Ireland") echo "selected"; ?>>Ireland</option>
                            <option value="Italy" <?php if ($user->negara === "Italy") echo "selected"; ?>>Italy</option>
                            <option value="Jamaica" <?php if ($user->negara === "Jamaica") echo "selected"; ?>>Jamaica</option>
                            <option value="Japan" <?php if ($user->negara === "Japan") echo "selected"; ?>>Japan</option>
                            <option value="Jordan" <?php if ($user->negara === "Jordan") echo "selected"; ?>>Jordan</option>
                            <option value="Kazakhstan" <?php if ($user->negara === "Kazakhstan") echo "Kazakhstan"; ?>>Indonesia</option>
                            <option value="Kosovo" <?php if ($user->negara === "Kosovo") echo "selected"; ?>>Kosovo</option>
                            <option value="Kuwait" <?php if ($user->negara === "Kuwait") echo "selected"; ?>>Kuwait</option>
                            <option value="Kyrgyzstan" <?php if ($user->negara === "Kyrgyzstan") echo "selected"; ?>>Kyrgyzstan</option>
                            <option value="Laos" <?php if ($user->negara === "Laos") echo "selected"; ?>>Laos</option>
                            <option value="Latvia" <?php if ($user->negara === "Latvia") echo "selected"; ?>>Latvia</option>
                            <option value="Lebanon" <?php if ($user->negara === "Lebanon") echo "selected"; ?>>Lebanon</option>
                            <option value="Libya" <?php if ($user->negara === "Libya") echo "selected"; ?>>Libya</option>
                            <option value="Liechtenstein" <?php if ($user->negara === "Liechtenstein") echo "selected"; ?>>Liechtenstein</option>
                            <option value="Lithuania" <?php if ($user->negara === "Lithuania") echo "selected"; ?>>Lithuania</option>
                            <option value="Luxembourg" <?php if ($user->negara === "Luxembourg") echo "selected"; ?>>Luxembourg</option>
                            <option value="Malaysia" <?php if ($user->negara === "Malaysia") echo "selected"; ?>>Malaysia</option>
                            <option value="Maldives" <?php if ($user->negara === "Maldives") echo "selected"; ?>>Maldives</option>
                            <option value="Mexico" <?php if ($user->negara === "Mexico") echo "selected"; ?>>Mexico</option>
                            <option value="Monaco" <?php if ($user->negara === "Monaco") echo "selected"; ?>>Monaco</option>
                            <option value="Mongolia" <?php if ($user->negara === "Mongolia") echo "selected"; ?>>Mongolia</option>
                            <option value="Morocco" <?php if ($user->negara === "Morocco") echo "selected"; ?>>Morocco</option>
                            <option value="Myanmar" <?php if ($user->negara === "Myanmar") echo "selected"; ?>>Myanmar</option>
                            <option value="Nepal" <?php if ($user->negara === "Nepal") echo "selected"; ?>>Nepal</option>
                            <option value="Netherlands" <?php if ($user->negara === "Netherlands") echo "selected"; ?>>Netherlands</option>
                            <option value="New Zealand" <?php if ($user->negara === "New Zealand") echo "selected"; ?>>New Zealand</option>
                            <option value="Nigeria" <?php if ($user->negara === "Nigeria") echo "selected"; ?>>Nigeria</option>
                            <option value="Oman" <?php if ($user->negara === "Oman") echo "selected"; ?>>Oman</option>
                            <option value="Pakistan" <?php if ($user->negara === "Pakistan") echo "selected"; ?>>Pakistan</option>
                            <option value="Paraguay" <?php if ($user->negara === "Paraguay") echo "selected"; ?>>Paraguay</option>
                            <option value="Peru" <?php if ($user->negara === "Peru") echo "selected"; ?>>Peru</option>
                            <option value="Philippines" <?php if ($user->negara === "Philippines") echo "selected"; ?>>Philippines</option>
                            <option value="Poland" <?php if ($user->negara === "Poland") echo "selected"; ?>>Poland</option>
                            <option value="Portugal" <?php if ($user->negara === "Portugal") echo "selected"; ?>>Portugal</option>
                            <option value="Qatar" <?php if ($user->negara === "Qatar") echo "selected"; ?>>Qatar</option>
                            <option value="Russia" <?php if ($user->negara === "Russia") echo "selected"; ?>>Russia</option>
                            <option value="Saudi Arabia" <?php if ($user->negara === "Saudi Arabia") echo "selected"; ?>>Saudi Arabia</option>
                            <option value="Serbia" <?php if ($user->negara === "Serbia") echo "selected"; ?>>Serbia</option>
                            <option value="Singapore" <?php if ($user->negara === "Singapore") echo "selected"; ?>>Singapore</option>
                            <option value="Spain" <?php if ($user->negara === "Spain") echo "selected"; ?>>Spain</option>
                            <option value="Sweden" <?php if ($user->negara === "Sweden") echo "selected"; ?>>Sweden</option>
                            <option value="Switzerland" <?php if ($user->negara === "Switzerland") echo "Switzerland"; ?>>Saudi Arabia</option>
                            <option value="Taiwan" <?php if ($user->negara === "Taiwan") echo "selected"; ?>>Taiwan</option>
                            <option value="Thailand" <?php if ($user->negara === "Thailand") echo "Thailand"; ?>>Saudi Arabia</option>
                            <option value="Turkey" <?php if ($user->negara === "Turkey") echo "selected"; ?>>Turkey</option>
                            <option value="United Arab Emirates" <?php if ($user->negara === "United Arab Emirates") echo "selected"; ?>>United Arab Emirates</option>
                            <option value="United Kingdom" <?php if ($user->negara === "United Kingdom") echo "selected"; ?>>United Kingdom</option>
                            <option value="Uzbekistan" <?php if ($user->negara === "Uzbekistan") echo "selected"; ?>>Uzbekistan</option>
                            <option value="Vietnam" <?php if ($user->negara === "Vietnam") echo "selected"; ?>>Vietnam</option>
                            <option value="Yemen" <?php if ($user->negara === "Yemen") echo "selected"; ?>>Yemen</option>
                            <option value="Zambia" <?php if ($user->negara === "Zambia") echo "selected"; ?>>Zambia</option>
                            <option value="Zimba`bwe" <?php if ($user->negara === "Zimbabwe") echo "selected"; ?>>Zimbabwe</option>
                        </select>
                    </div>
                </div>
                <div class="form-floating mb-4">
                    <textarea id="textareaExample" class="form-control" placeholder="Textarea" name="pesanInquire" style="height: 150px" required></textarea>
                    <label for="textareaExample">Message to Supplier</label>
                </div>
                    <button type="submit" class="btn btn-primary rounded-pill btn-login w-100 mb-2" >Send Inquire</button>
                </form>
                <!-- /form -->
                <!--/.social -->
            </div>
        <?php endif; ?>
        <!--/.modal-content -->
        </div>
        <!--/.modal-body -->
    </div>
    <!--/.modal-dialog -->
    </div>
    <!--/.modal -->
</section>
<!-- /section -->

<script>
    const selectElement = document.getElementById('negaraDropdown');
const maxVisibleOptions = 10; 

selectElement.addEventListener('click', function() {
    this.size = (this.size === maxVisibleOptions) ? 1 : maxVisibleOptions;
});

selectElement.addEventListener('blur', function() {
    this.size = 1;
});
</script>

<?php $this->load->view($footer); ?>