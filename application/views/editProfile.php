<?php $this->load->view($header); ?>
<section class="wrapper bg-gradient-primary">
      <div class="container pt-11 pt-md-13 pb-11 pb-md-19 pb-lg-22 text-center">
        <div class="row">
          
          <!-- /column -->
        </div>
        <!-- /.row -->
        <div class="row">
          <div class="col">
            <!-- /.tab-content -->
                <div class="card shadow-lg p-3">
                <ul class="nav nav-tabs nav-tabs-basic">
                    <li class="nav-item"> <a class="nav-link active" data-bs-toggle="tab" href="#tab3-1">Edit Profile</a> </li>
                </ul>
                <!-- /.nav-tabs -->
                <form class="text-start mb-3" action="<?= base_url('editprofil')?>" method="POST">
                <div class="tab-content mt-0 mt-md-5">
                    <div class="tab-pane fade show active" id="tab3-1">
                    <div class="p p-md-3 p-lg-3">
                        <div class="form-floating mb-4">
                            <input type="text" class="form-control" placeholder="Email" name="nama" value="<?= $user->nama?>"  id="loginEmail">
                            <label for="loginEmail">Full Name</label>
                        </div>
                        <div class="form-floating mb-4">
                            <input type="email" class="form-control" placeholder="Email" name="email" value="<?= $user->email?>"  id="loginEmail">
                            <label for="loginEmail">Email</label>
                        </div>
                        <div class="form-floating mb-4">
                                <textarea id="textareaExample" class="form-control" placeholder="Address" name="alamat"  style="height: 150px" ><?= $user->alamat?></textarea>
                                <label for="textareaExample">Address</label>
                        </div>
                            <div class="form-floating mb-4">
                                <input type="text" class="form-control" placeholder="Name" name="telp" value="<?= $user->telp ?>" id="loginName">
                                <label for="loginName">Phone</label>
                            </div>
                            <div class="form-select-wrapper mb-4">
                                <select class="form-select" name="negara" >
                                    <option disabled value="">Choose Country</option>
                                    <option value="Afghanistan" <?php if ($user->negara === "Afghanistan") echo "selected"; ?>>Afghanistan</option>
                                    <o`ption value="Albania" <?php if ($user->negara === "Albania") echo "selected"; ?>>Albania</option>
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
                    <!--/div -->
                    </div>
                        <button type="submit" class="btn btn-primary rounded-pill btn-login w-20 mb-2 ml-12">Submit</button>
                    <!--/.tab-pane -->
                    </div>
                </div>
                <!-- /.card -->
            
            <!-- /.form -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
      
      <!-- /.container -->
</section>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
    // Function to fetch data from the CountryController
    async function fetchCountries() {
        const response = await fetch('<?php echo base_url("Front/User/get_countries"); ?>');
        const countries = await response.json();
        return countries;
    }

    // Function to sort countries alphabetically by name
    function sortCountriesByName(countries) {
        return countries.sort((a, b) => a.name.common.localeCompare(b.name.common));
    }

    // Fetch country data and populate the select element
    fetchCountries()
        .then(countries => {
            const sortedCountries = sortCountriesByName(countries);
            const selectElement = $('#countrySelect');

            // Add default option
            selectElement.append($('<option>', {
                value: '',
                text: 'Select a country',
                disabled: true,
                selected: true
            }));

            const userCountry = <?php echo json_encode($user[0]->negara); ?>;

            // Add sorted countries to the select element
            sortedCountries.forEach(country => {
                const option = $('<option>', {
                    value: country.name.common,
                    text: country.name.common
                });
                if (userCountry === country.name.common) {
                    option.prop('selected', true);
                }

                selectElement.append(option);
            });
        })
        .catch(error => {
            console.error('Error fetching country data:', error);
        });
</script>
<?php $this->load->view($footer); ?>
    