<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">

    <title>OneUI - Bootstrap 5 Admin Template &amp; UI Framework</title>

    <meta name="description" content="OneUI - Bootstrap 5 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
    <meta name="author" content="pixelcave">
    <meta name="robots" content="noindex, nofollow">

    <!-- Open Graph Meta -->
    <meta property="og:title" content="OneUI - Bootstrap 5 Admin Template &amp; UI Framework">
    <meta property="og:site_name" content="OneUI">
    <meta property="og:description" content="OneUI - Bootstrap 5 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
    <meta property="og:type" content="website">
    <meta property="og:url" content="">
    <meta property="og:image" content="">

    <!-- Icons -->
    <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
    <link rel="shortcut icon" href="<?= base_url() ?>assets/admin/media/favicons/favicon.png">
    <link rel="icon" type="image/png" sizes="192x192" href="<?= base_url() ?>assets/admin/media/favicons/favicon-192x192.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?= base_url() ?>assets/admin/media/favicons/apple-touch-icon-180x180.png">
    <!-- END Icons -->

     <!-- Stylesheets -->
    <!-- Page JS Plugins CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/admin/js/plugins/datatables-bs5/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/admin/js/plugins/datatables-buttons-bs5/css/buttons.bootstrap5.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/admin/js/plugins/datatables-responsive-bs5/css/responsive.bootstrap5.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/admin/js/plugins/select2/css/select2.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/admin/js/plugins/dropzone//min/dropzone.min.css">



    <!-- Stylesheets -->
    <!-- OneUI framework -->
    <link rel="stylesheet" id="css-main" href="<?= base_url() ?>assets/admin/css/oneui.min.css">

    <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
    <!-- <link rel="stylesheet" id="css-theme" href="assets/css/themes/amethyst.min.css"> -->
    <!-- END Stylesheets -->
  </head>

  <body>
    <!-- Page Container -->
    <!--
      Available classes for #page-container:

      GENERIC

        'remember-theme'                            Remembers active color theme and dark mode between pages using localStorage when set through
                                                    - Theme helper buttons [data-toggle="theme"],
                                                    - Layout helper buttons [data-toggle="layout" data-action="dark_mode_[on/off/toggle]"]
                                                    - ..and/or One.layout('dark_mode_[on/off/toggle]')

      SIDEBAR & SIDE OVERLAY

        'sidebar-r'                                 Right Sidebar and left Side Overlay (default is left Sidebar and right Side Overlay)
        'sidebar-mini'                              Mini hoverable Sidebar (screen width > 991px)
        'sidebar-o'                                 Visible Sidebar by default (screen width > 991px)
        'sidebar-o-xs'                              Visible Sidebar by default (screen width < 992px)
        'sidebar-dark'                              Dark themed sidebar

        'side-overlay-hover'                        Hoverable Side Overlay (screen width > 991px)
        'side-overlay-o'                            Visible Side Overlay by default

        'enable-page-overlay'                       Enables a visible clickable Page Overlay (closes Side Overlay on click) when Side Overlay opens

        'side-scroll'                               Enables custom scrolling on Sidebar and Side Overlay instead of native scrolling (screen width > 991px)

      HEADER

        ''                                          Static Header if no class is added
        'page-header-fixed'                         Fixed Header

      HEADER STYLE

        ''                                          Light themed Header
        'page-header-dark'                          Dark themed Header

      MAIN CONTENT LAYOUT

        ''                                          Full width Main Content if no class is added
        'main-content-boxed'                        Full width Main Content with a specific maximum width (screen width > 1200px)
        'main-content-narrow'                       Full width Main Content with a percentage width (screen width > 1200px)

      DARK MODE

        'sidebar-dark page-header-dark dark-mode'   Enable dark mode (light sidebar/header is not supported with dark mode)
    -->
    <div id="page-container" class="page-header-dark main-content-boxed">

      <!-- Header -->
      <header id="page-header">
        <!-- Header Content -->
        <div class="content-header">
          <!-- Left Section -->
          <div class="d-flex align-items-center">
            <!-- Logo -->
            <a class="fw-semibold fs-5 tracking-wider text-dual me-3" href="index.html"> OneUI </a>
            <!-- END Logo -->

            <!-- Notifications Dropdown -->
            <div class="dropdown d-inline-block me-2">
              <button type="button" class="btn btn-sm btn-alt-secondary" id="page-header-notifications-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fa fa-fw fa-bell"></i>
                <span class="text-primary">•</span>
              </button>
              <div class="dropdown-menu dropdown-menu-lg p-0 border-0 fs-sm" aria-labelledby="page-header-notifications-dropdown">
                <div class="p-2 bg-body-light border-bottom text-center rounded-top">
                  <h5 class="dropdown-header text-uppercase">Notifications</h5>
                </div>
                <ul class="nav-items mb-0">
                  <li>
                    <a class="text-dark d-flex py-2" href="javascript:void(0)">
                      <div class="flex-shrink-0 me-2 ms-3">
                        <i class="fa fa-fw fa-check-circle text-success"></i>
                      </div>
                      <div class="flex-grow-1 pe-2">
                        <div class="fw-semibold">You have a new follower</div>
                        <span class="fw-medium text-muted">15 min ago</span>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a class="text-dark d-flex py-2" href="javascript:void(0)">
                      <div class="flex-shrink-0 me-2 ms-3">
                        <i class="fa fa-fw fa-plus-circle text-primary"></i>
                      </div>
                      <div class="flex-grow-1 pe-2">
                        <div class="fw-semibold">1 new sale, keep it up</div>
                        <span class="fw-medium text-muted">22 min ago</span>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a class="text-dark d-flex py-2" href="javascript:void(0)">
                      <div class="flex-shrink-0 me-2 ms-3">
                        <i class="fa fa-fw fa-times-circle text-danger"></i>
                      </div>
                      <div class="flex-grow-1 pe-2">
                        <div class="fw-semibold">Update failed, restart server</div>
                        <span class="fw-medium text-muted">26 min ago</span>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a class="text-dark d-flex py-2" href="javascript:void(0)">
                      <div class="flex-shrink-0 me-2 ms-3">
                        <i class="fa fa-fw fa-plus-circle text-primary"></i>
                      </div>
                      <div class="flex-grow-1 pe-2">
                        <div class="fw-semibold">2 new sales, keep it up</div>
                        <span class="fw-medium text-muted">33 min ago</span>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a class="text-dark d-flex py-2" href="javascript:void(0)">
                      <div class="flex-shrink-0 me-2 ms-3">
                        <i class="fa fa-fw fa-user-plus text-success"></i>
                      </div>
                      <div class="flex-grow-1 pe-2">
                        <div class="fw-semibold">You have a new subscriber</div>
                        <span class="fw-medium text-muted">41 min ago</span>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a class="text-dark d-flex py-2" href="javascript:void(0)">
                      <div class="flex-shrink-0 me-2 ms-3">
                        <i class="fa fa-fw fa-check-circle text-success"></i>
                      </div>
                      <div class="flex-grow-1 pe-2">
                        <div class="fw-semibold">You have a new follower</div>
                        <span class="fw-medium text-muted">42 min ago</span>
                      </div>
                    </a>
                  </li>
                </ul>
                <div class="p-2 border-top text-center">
                  <a class="d-inline-block fw-medium" href="javascript:void(0)">
                    <i class="fa fa-fw fa-arrow-down me-1 opacity-50"></i> Load More..
                  </a>
                </div>
              </div>
            </div>
            <!-- END Notifications Dropdown -->
          </div>
          <!-- END Left Section -->

          <!-- Right Section -->
          <div class="d-flex align-items-center">
            <!-- Open Search Section (visible on smaller screens) -->
            <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
            <button type="button" class="btn btn-sm btn-alt-secondary d-md-none" data-toggle="layout" data-action="header_search_on">
              <i class="fa fa-fw fa-search"></i>
            </button>
            <!-- END Open Search Section -->

            <!-- Search Form (visible on larger screens) -->
            <form class="d-none d-md-inline-block" action="bd_search.html" method="POST">
              <div class="input-group input-group-sm">
                <input type="text" class="form-control form-control-alt" placeholder="Search.." id="page-header-search-input2" name="page-header-search-input2" />
                <span class="input-group-text bg-body border-0">
                  <i class="fa fa-fw fa-search"></i>
                </span>
              </div>
            </form>
            <!-- END Search Form -->

            <!-- User Dropdown -->
            <div class="dropdown d-inline-block ms-2">
              <button type="button" class="btn btn-sm btn-alt-secondary d-flex align-items-center" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <img class="rounded-circle" src="<?= base_url() ?>./assets/admin/media/avatars/avatar10.jpg" alt="Header Avatar" style="width: 21px;" />
                <span class="d-none d-sm-inline-block ms-2">John</span>
                <i class="fa fa-fw fa-angle-down d-none d-sm-inline-block opacity-50 ms-1"></i>
              </button>
              <div class="dropdown-menu dropdown-menu-md dropdown-menu-end p-0 border-0" aria-labelledby="page-header-user-dropdown">
                <div class="p-3 text-center bg-body-light border-bottom rounded-top">
                  <img class="img-avatar img-avatar48 img-avatar-thumb" src="<?= base_url() ?>./assets/admin/media/avatars/avatar10.jpg" alt="">
                  <p class="mt-2 mb-0 fw-medium">John Smith</p>
                  <p class="mb-0 text-muted fs-sm fw-medium">Web Developer</p>
                </div>
                <div class="p-2">
                  <a class="dropdown-item d-flex align-items-center justify-content-between" href="be_pages_generic_inbox.html">
                    <span class="fs-sm fw-medium">Inbox</span>
                    <span class="badge rounded-pill bg-primary ms-2">3</span>
                  </a>
                  <a class="dropdown-item d-flex align-items-center justify-content-between" href="be_pages_generic_profile.html">
                    <span class="fs-sm fw-medium">Profile</span>
                    <span class="badge rounded-pill bg-primary ms-2">1</span>
                  </a>
                  <a class="dropdown-item d-flex align-items-center justify-content-between" href="javascript:void(0)">
                    <span class="fs-sm fw-medium">Settings</span>
                  </a>
                </div>
                <div role="separator" class="dropdown-divider m-0"></div>
                <div class="p-2">
                  <a class="dropdown-item d-flex align-items-center justify-content-between" href="op_auth_lock.html">
                    <span class="fs-sm fw-medium">Lock Account</span>
                  </a>
                  <a class="dropdown-item d-flex align-items-center justify-content-between" href="op_auth_signin.html">
                    <span class="fs-sm fw-medium">Log Out</span>
                  </a>
                </div>
              </div>
            </div>
            <!-- END User Dropdown -->
          </div>
          <!-- END Right Section -->
        </div>
        <!-- END Header Content -->

        <!-- Header Search -->
        <div id="page-header-search" class="overlay-header bg-body-extra-light">
          <div class="content-header">
            <form class="w-100" action="bd_search.html" method="POST">
              <div class="input-group">
                <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                <button type="button" class="btn btn-alt-danger" data-toggle="layout" data-action="header_search_off">
                  <i class="fa fa-fw fa-times-circle"></i>
                </button>
                <input type="text" class="form-control" placeholder="Search or hit ESC.." id="page-header-search-input" name="page-header-search-input" />
              </div>
            </form>
          </div>
        </div>
        <!-- END Header Search -->

        <!-- Header Loader -->
        <!-- Please check out the Loaders page under Components category to see examples of showing/hiding it -->
        <div id="page-header-loader" class="overlay-header bg-primary-lighter">
          <div class="content-header">
            <div class="w-100 text-center">
              <i class="fa fa-fw fa-circle-notch fa-spin text-primary"></i>
            </div>
          </div>
        </div>
        <!-- END Header Loader -->
      </header>
      <!-- END Header -->

      <!-- Main Container -->
      <main id="main-container">
        <!-- Navigation -->
        <div class="bg-primary-darker">
          <div class="bg-black-10">
            <div class="content py-3">
              <!-- Toggle Main Navigation -->
              <div class="d-lg-none">
                <!-- Class Toggle, functionality initialized in Helpers.oneToggleClass() -->
                <button type="button" class="btn w-100 btn-alt-secondary d-flex justify-content-between align-items-center" data-toggle="class-toggle" data-target="#main-navigation" data-class="d-none">
                  Menu
                  <i class="fa fa-bars"></i>
                </button>
              </div>
              <!-- END Toggle Main Navigation -->

              <!-- Main Navigation -->
              <div id="main-navigation" class="d-none d-lg-block mt-2 mt-lg-0">
                <ul class="nav-main nav-main-dark nav-main-horizontal nav-main-hover">
                  <li class="nav-main-item">
                    <a class="nav-main-link active" href="<?= base_url('supplier')?>">
                      <i class="nav-main-link-icon si si-compass"></i>
                      <span class="nav-main-link-name">Dashboard</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link " href="<?= base_url('supplier/company')?>">
                      <i class="nav-main-link-icon si si-compass"></i>
                      <span class="nav-main-link-name">Company</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link " href="<?= base_url('supplier/product')?>">
                      <i class="nav-main-link-icon si si-compass"></i>
                      <span class="nav-main-link-name">Products</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link " href="<?= base_url('supplier/facility')?>">
                      <i class="nav-main-link-icon si si-compass"></i>
                      <span class="nav-main-link-name">Facility</span>
                    </a>
                  </li>
                  <li class="nav-main-heading">Pages</li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="bd_search.html">
                      <i class="nav-main-link-icon si si-magnifier"></i>
                      <span class="nav-main-link-name">Search</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="<?= base_url('')?>">
                      <i class="nav-main-link-icon si si-action-undo"></i>
                      <span class="nav-main-link-name">Go Back</span>
                    </a>
                  </li>
                  <li class="nav-main-heading">Extra</li>
                  <li class="nav-main-item ms-lg-auto">
                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                      <i class="nav-main-link-icon fa fa-brush"></i>
                      <span class="nav-main-link-name d-lg-none">Themes</span>
                    </a>
                    <ul class="nav-main-submenu nav-main-submenu-right">
                      <li class="nav-main-item">
                        <a class="nav-main-link" data-toggle="theme" data-theme="default" href="#">
                          <i class="nav-main-link-icon fa fa-square text-default"></i>
                          <span class="nav-main-link-name">Default</span>
                        </a>
                      </li>
                      <li class="nav-main-item">
                        <a class="nav-main-link" data-toggle="theme" data-theme="assets/css/themes/amethyst.min.css" href="#">
                          <i class="nav-main-link-icon fa fa-square text-amethyst"></i>
                          <span class="nav-main-link-name">Amethyst</span>
                        </a>
                      </li>
                      <li class="nav-main-item">
                        <a class="nav-main-link" data-toggle="theme" data-theme="assets/css/themes/city.min.css" href="#">
                          <i class="nav-main-link-icon fa fa-square text-city"></i>
                          <span class="nav-main-link-name">City</span>
                        </a>
                      </li>
                      <li class="nav-main-item">
                        <a class="nav-main-link" data-toggle="theme" data-theme="assets/css/themes/flat.min.css" href="#">
                          <i class="nav-main-link-icon fa fa-square text-flat"></i>
                          <span class="nav-main-link-name">Flat</span>
                        </a>
                      </li>
                      <li class="nav-main-item">
                        <a class="nav-main-link" data-toggle="theme" data-theme="assets/css/themes/modern.min.css" href="#">
                          <i class="nav-main-link-icon fa fa-square text-modern"></i>
                          <span class="nav-main-link-name">Modern</span>
                        </a>
                      </li>
                      <li class="nav-main-item">
                        <a class="nav-main-link" data-toggle="theme" data-theme="assets/css/themes/smooth.min.css" href="#">
                          <i class="nav-main-link-icon fa fa-square text-smooth"></i>
                          <span class="nav-main-link-name">Smooth</span>
                        </a>
                      </li>
                    </ul>
                  </li>
                </ul>
              </div>
              <!-- END Main Navigation -->
            </div>
          </div>
        </div>
        <!-- END Navigation -->