<?php $this->load->view($header); ?>

<!-- Main Container -->
<main id="main-container">
    <!-- Hero -->
    <div class="content">
        <div class="d-flex flex-column flex-md-row justify-content-md-between align-items-md-center py-2 text-center text-md-start">
            <div class="flex-grow-1 mb-1 mb-md-0">
                <h1 class="h3 fw-bold mb-1">
                    Dashboard
                </h1>
                <h2 class="h6 fw-medium fw-medium text-muted mb-0">
                    Welcome <a class="fw-semibold" href="be_pages_generic_profile.html">John</a>, everything looks great.
                </h2>
            </div>
            <div class="mt-3 mt-md-0 ms-md-3 space-x-1">
                <a class="btn btn-sm btn-alt-secondary space-x-1" href="be_pages_generic_profile_edit.html">
                    
                    
                </a>
                <div class="dropdown d-inline-block">
                    <button type="button" class="btn btn-sm btn-alt-secondary space-x-1" id="dropdown-analytics-overview" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  
                </button>
                    <div class="dropdown-menu dropdown-menu-end fs-sm" aria-labelledby="dropdown-analytics-overview">
                        <a class="dropdown-item fw-medium" href="javascript:void(0)">Last 30 days</a>
                        <a class="dropdown-item fw-medium" href="javascript:void(0)">Last month</a>
                        <a class="dropdown-item fw-medium" href="javascript:void(0)">Last 3 months</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item fw-medium" href="javascript:void(0)">This year</a>
                        <a class="dropdown-item fw-medium" href="javascript:void(0)">Last Year</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item fw-medium d-flex align-items-center justify-content-between" href="javascript:void(0)">
                            <span>All time</span>
                            <i class="fa fa-check"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END Hero -->

    <!-- Page Content -->
    <div class="content">
        <!-- Overview -->
        <div class="row items-push">
            <div class="col-sm-6 col-xxl-3">
                <!-- Pending Orders -->
                <div class="block block-rounded d-flex flex-column h-100 mb-0">
                    <div class="block-content block-content-full flex-grow-1 d-flex justify-content-between align-items-center">
                        <dl class="mb-0">
                            <dt class="fs-3 fw-bold"><?= $countuser?></dt>
                            <dd class="fs-sm fw-medium fs-sm fw-medium text-muted mb-0">Total User</dd>
                        </dl>
                        <div class="item item-rounded-lg bg-body-light">
                            <i class="fa fa-users fs-3 text-primary"></i>
                        </div>
                    </div>
                    <div class="bg-body-light rounded-bottom">
                        <a class="block-content block-content-full block-content-sm fs-sm fw-medium d-flex align-items-center justify-content-between" href="<?= base_url('admin/user')?>">
                            <span>View all Data</span>
                            <i class="fa fa-arrow-alt-circle-right ms-1 opacity-25 fs-base"></i>
                        </a>
                    </div>
                </div>
                <!-- END Pending Orders -->
            </div>
            <div class="col-sm-6 col-xxl-3">
                <!-- New Customers -->
                <div class="block block-rounded d-flex flex-column h-100 mb-0">
                    <div class="block-content block-content-full flex-grow-1 d-flex justify-content-between align-items-center">
                        <dl class="mb-0">
                            <dt class="fs-3 fw-bold">10</dt>
                            <dd class="fs-sm fw-medium fs-sm fw-medium text-muted mb-0">Premium Member</dd>
                        </dl>
                        <div class="item item-rounded-lg bg-body-light">
                            <i class="far fa-user-circle fs-3 text-primary"></i>
                        </div>
                    </div>
                    <div class="bg-body-light rounded-bottom">
                        <a class="block-content block-content-full block-content-sm fs-sm fw-medium d-flex align-items-center justify-content-between" href="<?= base_url('admin/premium')?>">
                            <span>View all Data</span>
                            <i class="fa fa-arrow-alt-circle-right ms-1 opacity-25 fs-base"></i>
                        </a>
                    </div>
                </div>
                <!-- END New Customers -->
            </div>
            <div class="col-sm-6 col-xxl-3">
                <!-- Messages -->
                <div class="block block-rounded d-flex flex-column h-100 mb-0">
                    <div class="block-content block-content-full flex-grow-1 d-flex justify-content-between align-items-center">
                        <dl class="mb-0">
                            <dt class="fs-3 fw-bold"><?= $countcompany?></dt>
                            <dd class="fs-sm fw-medium fs-sm fw-medium text-muted mb-0">Company Registed</dd>
                        </dl>
                        <div class="item item-rounded-lg bg-body-light">
                            <i class="fa fa-building fs-3 text-primary"></i>
                        </div>
                    </div>
                    <div class="bg-body-light rounded-bottom">
                        <a class="block-content block-content-full block-content-sm fs-sm fw-medium d-flex align-items-center justify-content-between" href="<?= base_url('admin/perusahaan')?>">
                            <span>View all Data</span>
                            <i class="fa fa-arrow-alt-circle-right ms-1 opacity-25 fs-base"></i>
                        </a>
                    </div>
                </div>
                <!-- END Messages -->
            </div>
            <div class="col-sm-6 col-xxl-3">
                <!-- Conversion Rate -->
                <div class="block block-rounded d-flex flex-column h-100 mb-0">
                    <div class="block-content block-content-full flex-grow-1 d-flex justify-content-between align-items-center">
                        <dl class="mb-0">
                            <dt class="fs-3 fw-bold"><?= $countproduct?></dt>
                            <dd class="fs-sm fw-medium fs-sm fw-medium text-muted mb-0">Total Product</dd>
                        </dl>
                        <div class="item item-rounded-lg bg-body-light">
                            <i class="fa fa-bag-shopping fs-3 text-primary"></i>
                        </div>
                    </div>
                    <div class="bg-body-light rounded-bottom">
                        <a class="block-content block-content-full block-content-sm fs-sm fw-medium d-flex align-items-center justify-content-between" href="<?= base_url('admin/product')?>">
                            <span>View All Data</span>
                            <i class="fa fa-arrow-alt-circle-right ms-1 opacity-25 fs-base"></i>
                        </a>
                    </div>
                </div>
                <!-- END Conversion Rate-->
            </div>
            <div class="col-sm-6 col-xxl-3">
                <!-- Conversion Rate -->
                <div class="block block-rounded d-flex flex-column h-100 mb-0">
                    <div class="block-content block-content-full flex-grow-1 d-flex justify-content-between align-items-center">
                        <dl class="mb-0">
                            <dt class="fs-3 fw-bold"><?= $countinquire?></dt>
                            <dd class="fs-sm fw-medium fs-sm fw-medium text-muted mb-0">Total Inquired</dd>
                        </dl>
                        <div class="item item-rounded-lg bg-body-light">
                            <i class="si si-envelope-letter fs-3 text-primary"></i>
                        </div>
                    </div>
                    <div class="bg-body-light rounded-bottom">
                        <a class="block-content block-content-full block-content-sm fs-sm fw-medium d-flex align-items-center justify-content-between" href="<?= base_url('admin/inquire')?>">
                            <span>View All Data</span>
                            <i class="fa fa-arrow-alt-circle-right ms-1 opacity-25 fs-base"></i>
                        </a>
                    </div>
                </div>
                <!-- END Conversion Rate-->
            </div>
            <div class="col-sm-6 col-xxl-3">
                <!-- Conversion Rate -->
                <div class="block block-rounded d-flex flex-column h-100 mb-0">
                    <div class="block-content block-content-full flex-grow-1 d-flex justify-content-between align-items-center">
                        <dl class="mb-0">
                            <dt class="fs-3 fw-bold"><?= $kategoriall?></dt>
                            <dd class="fs-sm fw-medium fs-sm fw-medium text-muted mb-0">Total Categories</dd>
                        </dl>
                        <div class="item item-rounded-lg bg-body-light">
                            <i class="fa fa-bars fs-3 text-primary"></i>
                        </div>
                    </div>
                    <div class="bg-body-light rounded-bottom">
                        <a class="block-content block-content-full block-content-sm fs-sm fw-medium d-flex align-items-center justify-content-between" href="<?= base_url('admin/kategori')?>">
                            <span>View All Data</span>
                            <i class="fa fa-arrow-alt-circle-right ms-1 opacity-25 fs-base"></i>
                        </a>
                    </div>
                </div>
                <!-- END Conversion Rate-->
            </div>
            <div class="col-sm-6 col-xxl-3">
                <!-- Conversion Rate -->
                <div class="block block-rounded d-flex flex-column h-100 mb-0">
                    <div class="block-content block-content-full flex-grow-1 d-flex justify-content-between align-items-center">
                        <dl class="mb-0">
                            <dt class="fs-3 fw-bold"><?= $subkategori?></dt>
                            <dd class="fs-sm fw-medium fs-sm fw-medium text-muted mb-0">Total Sub-Categories</dd>
                        </dl>
                        <div class="item item-rounded-lg bg-body-light">
                            <i class="fa fa-bars-staggered fs-3 text-primary"></i>
                        </div>
                    </div>
                    <div class="bg-body-light rounded-bottom">
                        <a class="block-content block-content-full block-content-sm fs-sm fw-medium d-flex align-items-center justify-content-between" href="<?= base_url('admin/subkategoriA')?>">
                            <span>View All Data</span>
                            <i class="fa fa-arrow-alt-circle-right ms-1 opacity-25 fs-base"></i>
                        </a>
                    </div>
                </div>
                <!-- END Conversion Rate-->
            </div>
        </div>
        <!-- END Overview -->

        <!-- Statistics -->
        <div class="row">
            <div class="col-xl-10 col-xxl-6 d-flex flex-column">
                <!-- Lines Chart -->
              <div class="block block-rounded">
                <div class="block-header block-header-default">
                  <h3 class="block-title">Total Inquire</h3>
                  <div class="block-options">
                    <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                      <i class="si si-refresh"></i>
                    </button>
                  </div>
                </div>
                <div class="block-content block-content-full text-center">
                  <div class="py-3" style="height: 360px">
                    <!-- Lines Chart Container -->
                    <canvas id="js-chartjs-lines"></canvas>
                  </div>
                </div>
              </div>
              <!-- END Lines Chart -->
            </div>
            <div class="col-xl-10 col-xxl-6 d-flex flex-column">
                <!-- Lines Chart -->
              <div class="block block-rounded">
                <div class="block-header block-header-default">
                  <h3 class="block-title">Top 7 this Month</h3>
                  <div class="block-options">
                    <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                      <i class="si si-refresh"></i>
                    </button>
                  </div>
                </div>
                <div class="block-content block-content-full text-center">
                  <div class="py-3" style="height: 360px">
                    <!-- Lines Chart Container -->
                    <canvas id="topCategoriesChart" ></canvas>
                  </div>
                </div>
              </div>
              <!-- END Lines Chart -->
            </div>
            <div class="col-xl-10 col-xxl-6 d-flex flex-column">
                <!-- Lines Chart -->
              <div class="block block-rounded">
                <div class="block-header block-header-default">
                  <h3 class="block-title">top Country</h3>
                  <div class="block-options">
                    <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                      <i class="si si-refresh"></i>
                    </button>
                  </div>
                </div>
                <div class="block-content block-content-full text-center">
                  <div class="py-3" style="height: 360px">
                    <!-- Lines Chart Container -->
                    <canvas id="chartCountry" ></canvas>
                  </div>
                </div>
              </div>
              <!-- END Lines Chart -->
            </div>
            <div class="col-xl-4 col-xxl-3 d-flex flex-column">
                <!-- Last 2 Weeks -->
                <!-- Chart.js Charts is initialized in js/pages/be_pages_dashboard.min.js which was auto compiled from _js/pages/be_pages_dashboard.js -->
                <!-- For more info and examples you can check out http://www.chartjs.org/docs/ -->
                <!-- END Last 2 Weeks -->
            </div>
        </div>
        <!-- END Statistics -->
           
    </div>
    <!-- END Page Content -->
</main>
<!-- END Main Container -->
<script>
    document.addEventListener("DOMContentLoaded", function () {
        let data = <?php echo json_encode($inquire); ?>; 

        let bulan = [];
        let total = [];
        data.forEach(function (item) {
            bulan.push(item.bulan);
            total.push(item.total);
        });
        let ctx = document.getElementById('js-chartjs-lines').getContext('2d');
        let myChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: bulan,
                datasets: [{
                    label: 'Total Inquire',
                    data: total,
                    backgroundColor: 'rgba(171, 227, 125, 0.5)',
                    borderColor: 'rgba(171, 227, 125, 1)',
                    borderWidth: 2
                }],
            },
            options: {
                responsive: true,
                maintainAspectRatio: false
            }
        });
         // Ambil data dari PHP dan gunakan untuk membuat chart
    let categories = <?php echo json_encode(array_column($top_categories, 'category')); ?>;
    let totalInquires = <?php echo json_encode(array_column($top_categories, 'total_inquires')); ?>;

    // Buat data untuk chart
    let ct = document.getElementById('topCategoriesChart').getContext('2d');
    let topCategoriesChart = new Chart(ct, {
        type: 'bar',
        data: {
            labels:categories,
            datasets: [{
                label: 'Top Categories This Month',
                data: totalInquires,
                backgroundColor: 'rgba(54, 162, 235, 0.6)',
                borderColor: 'rgba(54, 162, 235, 1)',
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            },
            
        }
    });
    let topnegara = <?php echo json_encode($top_negara); ?>;

// Menyiapkan data untuk chart
let kategoris = [];
let negara = [];

topnegara.forEach(item => {
    kategoris.push(item.category);
    negara.push(item.total_inquires);
});

// Membuat Chart menggunakan Chart.js
let c = document.getElementById('chartCountry').getContext('2d');
let myChartCountry = new Chart(c, {
    type: 'bar',
    data: {
        labels: kategoris,
        datasets: [{
            label: 'Top Inquired Categories by Country',
            data: negara,
            backgroundColor: 'rgba(54, 162, 235, 0.5)',
            borderColor: 'rgba(54, 162, 235, 1)',
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        },
        plugins: {
            tooltip: {
                callbacks: {
                    label: function(context) {
                        let country = topnegara[context.dataIndex].negara;
                        let inquires = topnegara[context.dataIndex].total_inquires;
                        return inquires + ' inquire from ' + country;
                    }
                }
            }
        }
    }
});




        
    });
</script>

<script src="<?= base_url()?>assets/admin/js/plugins/chart.js/chart.umd.js"></script>

<?php $this->load->view($footer) ?>
