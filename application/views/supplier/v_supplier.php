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
                            <dd class="fs-sm fw-medium fs-sm fw-medium text-muted mb-0">Your Product</dd>
                        </dl>
                        <div class="item item-rounded-lg bg-body-light">
                            <i class="far fa-gem fs-3 text-primary"></i>
                        </div>
                    </div>
                    <div class="bg-body-light rounded-bottom">
                        <a class="block-content block-content-full block-content-sm fs-sm fw-medium d-flex align-items-center justify-content-between" href="javascript:void(0)">
                            <span>View all product</span>
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
                            <dt class="fs-3 fw-bold">124</dt>
                            <dd class="fs-sm fw-medium fs-sm fw-medium text-muted mb-0">Incuirement</dd>
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
        </div>
        <!-- END Overview -->

        <!-- Statistics -->
        <div class="row">
            <div class="col-xl-8 col-xxl-9 d-flex flex-column">
                <!-- Earnings Summary -->
                
                <!-- END Earnings Summary -->
            </div>
            <div class="col-xl-4 col-xxl-3 d-flex flex-column">
                <!-- Last 2 Weeks -->
                <!-- Chart.js Charts is initialized in js/pages/be_pages_dashboard.min.js which was auto compiled from _js/pages/be_pages_dashboard.js -->
                <!-- For more info and examples you can check out http://www.chartjs.org/docs/ -->
                <!-- END Last 2 Weeks -->
            </div>
        </div>
        <!-- END Statistics -->

        <!-- Recent Orders -->
        <div class="block block-rounded">
            <div class="block-header block-header-default">
                <h3 class="block-title">Recent Requirement</h3>
                <div class="block-options space-x-1">
                    <button type="button" class="btn btn-sm btn-alt-secondary" data-toggle="class-toggle" data-target="#one-dashboard-search-orders" data-class="d-none">
                  <i class="fa fa-search"></i>
                </button>
                    <div class="dropdown d-inline-block">
                        <button type="button" class="btn btn-sm btn-alt-secondary" id="dropdown-recent-orders-filters" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-fw fa-flask"></i>
                    Filters
                    <i class="fa fa-angle-down ms-1"></i>
                  </button>
                        <div class="dropdown-menu dropdown-menu-md dropdown-menu-end fs-sm" aria-labelledby="dropdown-recent-orders-filters">
                            <a class="dropdown-item fw-medium d-flex align-items-center justify-content-between" href="javascript:void(0)">
                      Pending
                      <span class="badge bg-primary rounded-pill">20</span>
                    </a>
                            <a class="dropdown-item fw-medium d-flex align-items-center justify-content-between" href="javascript:void(0)">
                      Active
                      <span class="badge bg-primary rounded-pill">72</span>
                    </a>
                            <a class="dropdown-item fw-medium d-flex align-items-center justify-content-between" href="javascript:void(0)">
                      Completed
                      <span class="badge bg-primary rounded-pill">890</span>
                    </a>
                            <a class="dropdown-item fw-medium d-flex align-items-center justify-content-between" href="javascript:void(0)">
                      All
                      <span class="badge bg-primary rounded-pill">997</span>
                    </a>
                        </div>
                    </div>
                </div>
            </div>
            <div id="one-dashboard-search-orders" class="block-content border-bottom d-none">
                <!-- Search Form -->
                <form action="be_pages_dashboard.html" method="POST" onsubmit="return false;">
                    <div class="push">
                        <div class="input-group">
                            <input type="text" class="form-control form-control-alt" id="one-ecom-orders-search" name="one-ecom-orders-search" placeholder="Search all orders..">
                            <span class="input-group-text bg-body border-0">
                      <i class="fa fa-search"></i>
                    </span>
                        </div>
                    </div>
                </form>
                <!-- END Search Form -->
            </div>
            <div class="block-content block-content-full">
                <!-- Recent Orders Table -->
                <div class="table-responsive">
                    <table class="table table-hover table-vcenter">
                        <thead>
                            <tr>
                                <th>Buyer</th>
                                <th class=" d-xl-table-cell">Email</th>
                                
                                <th class=" d-sm-table-cell ">Country</th>
                                <th class=" d-sm-table-cell ">Demain</th>
                                <th class=" d-sm-table-cell ">Action</th>
                            </tr>
                        </thead>
                        <tbody class="fs-sm">
                            <tr>
                                <td>
                                    <a class="fw-semibold" href="">
                                        Ahmad Romli                 
                                    </a>
                                </td>
                                <td class=" d-xl-table-cell">
                                    <span class="fw-semibold">Ahmad@gmail.com</span>
                                    <span class="fs-xs fw-semibold d-inline-block p-1 rounded-pill  text-info"><i class="far fa-circle-check"></i> verivied</span>
                                </td>
                                
                                <td class=" d-sm-table-cell fw-semibold ">Filipina</td>
                                <td class=" d-sm-table-cell ">
                                    <span>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Odio at vero ratione. Iste magni necessitatibus corporis nihil sapiente, dolor autem veritatis at amet, cupiditate doloribus? In esse alias cum molestiae?</span>
                                </td>
                                <td>
                                    <div class="d-flex justify-content-between gap-2">
                                        <a href="<?= base_url()?>supplier/Inquire" class="btn btn-outline-info px-3"><i class="fa fa-info"></i></a>
                                        <a href="" class="btn btn-outline-danger"><i class="far fa-trash-can"></i></a>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- END Recent Orders Table -->
            </div>
            <div class="block-content block-content-full bg-body-light">
                <!-- Pagination -->
                <nav aria-label="Photos Search Navigation">
                    <ul class="pagination pagination-sm justify-content-end mb-0">
                        <li class="page-item">
                            <a class="page-link" href="javascript:void(0)" tabindex="-1" aria-label="Previous">
                      Prev
                    </a>
                        </li>
                        <li class="page-item active">
                            <a class="page-link" href="javascript:void(0)">1</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="javascript:void(0)">2</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="javascript:void(0)">3</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="javascript:void(0)">4</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="javascript:void(0)" aria-label="Next">
                      Next
                    </a>
                        </li>
                    </ul>
                </nav>
                <!-- END Pagination -->
            </div>
        </div>
        <!-- END Recent Orders -->
    </div>
    <!-- END Page Content -->
</main>
<!-- END Main Container -->
<?php $this->load->view($footer) ?>