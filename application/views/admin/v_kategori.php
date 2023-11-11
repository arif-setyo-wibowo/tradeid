<?php $this->load->view($header)?>
<!-- Main Container -->
<main id="main-container">
            <!-- Page Content -->
            <div class="content">
                <!-- Dynamic Table with Export Buttons -->
                <div class="block block-rounded">
                    <div class="block-header block-header-default">
                        <h3 class="block-title">Dynamic Table <small>Export Buttons</small></h3>
                    </div>
                    <div class="block-content block-content-full">
                        <!-- DataTables init on table by adding .js-dataTable-buttons class, functionality is initialized in js/pages/be_tables_datatables.min.js which was auto compiled from _js/pages/be_tables_datatables.js -->
                        <table class="table table-bordered table-striped table-vcenter js-dataTable-buttons">
                            <thead>
                                <tr>
                                    <th class="text-center" style="width: 80px;">ID</th>
                                    <th>Name</th>
                                    <th class="d-none d-sm-table-cell" style="width: 30%;">Email</th>
                                    <th class="d-none d-sm-table-cell" style="width: 15%;">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-center fs-sm">1</td>
                                    <td class="fw-semibold fs-sm">David Fuller</td>
                                    <td class="d-none d-sm-table-cell fs-sm">
                                        client1<span class="text-muted">@example.com</span>
                                    </td>
                                    <td class="d-none d-sm-table-cell">
                                        <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-success-light text-success">VIP</span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- END Dynamic Table with Export Buttons -->
            </div>
            <!-- END Page Content -->
        </main>
        <!-- END Main Container -->
<?php $this->load->view($footer)?>