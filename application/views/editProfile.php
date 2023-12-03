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
                            <input type="text" class="form-control" placeholder="Email" name="nama" value="<?= $user[0]->nama?>"  id="loginEmail">
                            <label for="loginEmail">Full Name</label>
                        </div>
                        <div class="form-floating mb-4">
                            <input type="email" class="form-control" placeholder="Email" name="email" value="<?= $user[0]->email?>"  id="loginEmail">
                            <label for="loginEmail">Email</label>
                        </div>
                        <div class="form-floating mb-4">
                                <textarea id="textareaExample" class="form-control" placeholder="Address" name="alamat"  style="height: 150px" ><?= $user[0]->alamat?></textarea>
                                <label for="textareaExample">Address</label>
                        </div>
                            <div class="form-floating mb-4">
                                <input type="text" class="form-control" placeholder="Name" name="telp" value="<?= $user[0]->telp ?>" id="loginName">
                                <label for="loginName">Phone</label>
                            </div>
                            <div class="form-select-wrapper mb-4">
                                <select class="form-select" id="countrySelect" name="negara" >

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
    