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
                    <i class="fa fa-cogs opacity-50"></i>
                    <span>Settings</span>
                </a>
                <div class="dropdown d-inline-block">
                    <button type="button" class="btn btn-sm btn-alt-secondary space-x-1" id="dropdown-analytics-overview" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="fa fa-fw fa-calendar-alt opacity-50"></i>
                  <span>All time</span>
                  <i class="fa fa-fw fa-angle-down"></i>
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
                            <dt class="fs-3 fw-bold">32</dt>
                            <dd class="fs-sm fw-medium fs-sm fw-medium text-muted mb-0">Total User</dd>
                        </dl>
                        <div class="item item-rounded-lg bg-body-light">
                            <i class="fa fa-users fs-3 text-primary"></i>
                        </div>
                    </div>
                    <div class="bg-body-light rounded-bottom">
                        <a class="block-content block-content-full block-content-sm fs-sm fw-medium d-flex align-items-center justify-content-between" href="javascript:void(0)">
                            <span>View all orders</span>
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
                            <dt class="fs-3 fw-bold">1</dt>
                            <dd class="fs-sm fw-medium fs-sm fw-medium text-muted mb-0">Premium Member</dd>
                        </dl>
                        <div class="item item-rounded-lg bg-body-light">
                            <i class="far fa-user-circle fs-3 text-primary"></i>
                        </div>
                    </div>
                    <div class="bg-body-light rounded-bottom">
                        <a class="block-content block-content-full block-content-sm fs-sm fw-medium d-flex align-items-center justify-content-between" href="javascript:void(0)">
                            <span>View all customers</span>
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
                            <dt class="fs-3 fw-bold">45</dt>
                            <dd class="fs-sm fw-medium fs-sm fw-medium text-muted mb-0">Company Registed</dd>
                        </dl>
                        <div class="item item-rounded-lg bg-body-light">
                            <i class="fa fa-building fs-3 text-primary"></i>
                        </div>
                    </div>
                    <div class="bg-body-light rounded-bottom">
                        <a class="block-content block-content-full block-content-sm fs-sm fw-medium d-flex align-items-center justify-content-between" href="javascript:void(0)">
                            <span>View all messages</span>
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
                            <dt class="fs-3 fw-bold">4</dt>
                            <dd class="fs-sm fw-medium fs-sm fw-medium text-muted mb-0">Total Product</dd>
                        </dl>
                        <div class="item item-rounded-lg bg-body-light">
                            <i class="fa fa-bag-shopping fs-3 text-primary"></i>
                        </div>
                    </div>
                    <div class="bg-body-light rounded-bottom">
                        <a class="block-content block-content-full block-content-sm fs-sm fw-medium d-flex align-items-center justify-content-between" href="javascript:void(0)">
                            <span>View statistics</span>
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
                            <dt class="fs-3 fw-bold">4</dt>
                            <dd class="fs-sm fw-medium fs-sm fw-medium text-muted mb-0">Total Inquired</dd>
                        </dl>
                        <div class="item item-rounded-lg bg-body-light">
                            <i class="si si-envelope-letter fs-3 text-primary"></i>
                        </div>
                    </div>
                    <div class="bg-body-light rounded-bottom">
                        <a class="block-content block-content-full block-content-sm fs-sm fw-medium d-flex align-items-center justify-content-between" href="javascript:void(0)">
                            <span>View statistics</span>
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
                            <dt class="fs-3 fw-bold">4</dt>
                            <dd class="fs-sm fw-medium fs-sm fw-medium text-muted mb-0">Total Categories</dd>
                        </dl>
                        <div class="item item-rounded-lg bg-body-light">
                            <i class="fa fa-bars fs-3 text-primary"></i>
                        </div>
                    </div>
                    <div class="bg-body-light rounded-bottom">
                        <a class="block-content block-content-full block-content-sm fs-sm fw-medium d-flex align-items-center justify-content-between" href="javascript:void(0)">
                            <span>View statistics</span>
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
                            <dt class="fs-3 fw-bold">4</dt>
                            <dd class="fs-sm fw-medium fs-sm fw-medium text-muted mb-0">Total Sub-Categories</dd>
                        </dl>
                        <div class="item item-rounded-lg bg-body-light">
                            <i class="fa fa-bars-staggered fs-3 text-primary"></i>
                        </div>
                    </div>
                    <div class="bg-body-light rounded-bottom">
                        <a class="block-content block-content-full block-content-sm fs-sm fw-medium d-flex align-items-center justify-content-between" href="javascript:void(0)">
                            <span>View statistics</span>
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
            <div class="col-xl-8 col-xxl-9 d-flex flex-column">
                <!-- Earnings Summary -->
                <div class="block block-rounded flex-grow-1 d-flex flex-column">
                    <div class="block-header block-header-default">
                        <h3 class="block-title">Earnings Summary</h3>
                        <div class="block-options">
                            <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                      <i class="si si-refresh"></i>
                    </button>
                            <button type="button" class="btn-block-option">
                      <i class="si si-settings"></i>
                    </button>
                        </div>
                    </div>
                    <div class="block-content block-content-full flex-grow-1 d-flex align-items-center">
                        <!-- Earnings Chart Container -->
                        <!-- Chart.js Chart is initialized in js/pages/be_pages_dashboard.min.js which was auto compiled from _js/pages/be_pages_dashboard.js -->
                        <!-- For more info and examples you can check out http://www.chartjs.org/docs/ -->
                        <canvas id="js-chartjs-earnings"></canvas>
                    </div>
                    <div class="block-content bg-body-light">
                        <div class="row items-push text-center w-100">
                            <div class="col-sm-4">
                                <dl class="mb-0">
                                    <dt class="fs-3 fw-bold d-inline-flex align-items-center space-x-2">
                          <i class="fa fa-caret-up fs-base text-success"></i>
                          <span>2.5%</span>
                        </dt>
                                    <dd class="fs-sm fw-medium text-muted mb-0">Customer Growth</dd>
                                </dl>
                            </div>
                            <div class="col-sm-4">
                                <dl class="mb-0">
                                    <dt class="fs-3 fw-bold d-inline-flex align-items-center space-x-2">
                          <i class="fa fa-caret-up fs-base text-success"></i>
                          <span>3.8%</span>
                        </dt>
                                    <dd class="fs-sm fw-medium text-muted mb-0">Page Views</dd>
                                </dl>
                            </div>
                            <div class="col-sm-4">
                                <dl class="mb-0">
                                    <dt class="fs-3 fw-bold d-inline-flex align-items-center space-x-2">
                          <i class="fa fa-caret-down fs-base text-danger"></i>
                          <span>1.7%</span>
                        </dt>
                                    <dd class="fs-sm fw-medium text-muted mb-0">New Products</dd>
                                </dl>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END Earnings Summary -->
            </div>
            <div class="col-xl-4 col-xxl-3 d-flex flex-column">
                <!-- Last 2 Weeks -->
                <!-- Chart.js Charts is initialized in js/pages/be_pages_dashboard.min.js which was auto compiled from _js/pages/be_pages_dashboard.js -->
                <!-- For more info and examples you can check out http://www.chartjs.org/docs/ -->
                <div class="row items-push flex-grow-1">
                    <div class="col-md-6 col-xl-12">
                        <div class="block block-rounded d-flex flex-column h-100 mb-0">
                            <div class="block-content flex-grow-1 d-flex justify-content-between">
                                <dl class="mb-0">
                                    <dt class="fs-3 fw-bold">570</dt>
                                    <dd class="fs-sm fw-medium text-muted mb-0">Total Orders</dd>
                                </dl>
                                <div>
                                    <div class="d-inline-block px-2 py-1 rounded-3 fs-xs fw-semibold text-danger bg-danger-light">
                                        <i class="fa fa-caret-down me-1"></i> 2.2%
                                    </div>
                                </div>
                            </div>
                            <div class="block-content p-1 text-center overflow-hidden">
                                <!-- Total Orders Chart Container -->
                                <canvas id="js-chartjs-total-orders" style="height: 90px;"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-12">
                        <div class="block block-rounded d-flex flex-column h-100 mb-0">
                            <div class="block-content flex-grow-1 d-flex justify-content-between">
                                <dl class="mb-0">
                                    <dt class="fs-3 fw-bold">$5,234.21</dt>
                                    <dd class="fs-sm fw-medium text-muted mb-0">Total Earnings</dd>
                                </dl>
                                <div>
                                    <div class="d-inline-block px-2 py-1 rounded-3 fs-xs fw-semibold text-success bg-success-light">
                                        <i class="fa fa-caret-up me-1"></i> 4.2%
                                    </div>
                                </div>
                            </div>
                            <div class="block-content p-1 text-center overflow-hidden">
                                <!-- Total Earnings Chart Container -->
                                <canvas id="js-chartjs-total-earnings" style="height: 90px;"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12">
                        <div class="block block-rounded d-flex flex-column h-100 mb-0">
                            <div class="block-content flex-grow-1 d-flex justify-content-between">
                                <dl class="mb-0">
                                    <dt class="fs-3 fw-bold">264</dt>
                                    <dd class="fs-sm fw-medium text-muted mb-0">New Customers</dd>
                                </dl>
                                <div>
                                    <div class="d-inline-block px-2 py-1 rounded-3 fs-xs fw-semibold text-success bg-success-light">
                                        <i class="fa fa-caret-up me-1"></i> 9.3%
                                    </div>
                                </div>
                            </div>
                            <div class="block-content p-1 text-center overflow-hidden">
                                <!-- New Customers Chart Container -->
                                <canvas id="js-chartjs-new-customers" style="height: 90px;"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END Last 2 Weeks -->
            </div>
        </div>
        <!-- END Statistics -->
           
    </div>
    <!-- END Page Content -->
</main>
<!-- END Main Container -->
<?php $this->load->view($footer) ?>