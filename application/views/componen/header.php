<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description"
    content="An impressive and flawless site template that includes various UI elements and countless features, attractive ready-made blocks and rich pages, basically everything you need to create a unique and professional website.">
  <meta name="keywords"
    content="bootstrap 5, business, corporate, creative, gulp, marketing, minimal, modern, multipurpose, one page, responsive, saas, sass, seo, startup, html5 template, site template">
  <meta name="author" content="elemis">
  <title>Sandbox - Modern & Multipurpose Bootstrap 5 Template</title>
  <link rel="shortcut icon" href="<?= base_url() ?>./assets/front/img/favicon.png">
  <link rel="stylesheet" href="<?= base_url() ?>./assets/front/css/plugins.css">
  <link rel="stylesheet" href="<?= base_url() ?>./assets/front/css/style.css">
  <link rel="stylesheet" href="<?= base_url() ?>./assets/front/css/colors/yellow.css">
  <link rel="preload" href="<?= base_url() ?>./assets/front/css/fonts/thicccboi.css" as="style"
    onload="this.rel='stylesheet'">

    <style>
      .language-select .dropdown-menu{
        left: -50% !important;
      }
    </style>
<body>
  <div class="content-wrapper">
    <header class="wrapper bg-soft-primary">
      <nav class="navbar navbar-expand-lg center-nav transparent navbar-light">
        <div class="container flex-lg-row flex-nowrap align-items-center">
          <div class="navbar-brand w-100">
            <a href="<?= base_url() ?>">
              <img src="<?= base_url() ?>./assets/front/img/logo-dark.png"
                srcset="<?= base_url() ?>./assets/front/img/logo-dark@2x.png 2x" alt="" />
            </a>
          </div>
          <div class="navbar-collapse offcanvas offcanvas-nav offcanvas-start">
            <div class="offcanvas-header d-lg-none">
              <h3 class="text-white fs-30 mb-0">Sandbox</h3>
              <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                aria-label="Close"></button>
            </div>
            <div class="offcanvas-body ms-lg-auto d-flex flex-column h-100">
              <ul class="navbar-nav">
                <li class="nav-item ">
                  <a class="nav-link dropdown-item" href="<?= base_url() ?>product">Product</a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link dropdown-item" href="<?= base_url() ?>supplier">Supplier</a>
                </li>
                <li class="nav-item dropdown dropdown-mega">
                  <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Category</a>
                  <ul class="dropdown-menu mega-menu">
                    <li class="mega-menu-content">
                      <div class="row gx-0 gx-lg-3">
                        <div class="col-lg-4">
                          <h6 class="dropdown-header">Coconut</h6>
                          <ul class="list-unstyled cc-2 pb-lg-1">
                            <li><a class="dropdown-item" href="./docs/index.html">Bricket</a></li>
                            <li><a class="dropdown-item" href="./docs/forms.html">Cocopeat</a></li>
                            <li><a class="dropdown-item" href="./docs/faq.html">Coco-Fiber</a></li>
                          </ul>
                          <h6 class="dropdown-header mt-lg-6">Food and Agricultural</h6>
                          <ul class="list-unstyled cc-2">
                            <li><a class="dropdown-item" href="./docs/styleguide/colors.html">Apple</a></li>
                            <li><a class="dropdown-item" href="./docs/styleguide/fonts.html">Cinamon</a></li>
                            <li><a class="dropdown-item" href="./docs/styleguide/icons-svg.html">Penapple</a></li>
                            <li><a class="dropdown-item" href="./docs/styleguide/colors.html">Apple</a></li>
                            <li><a class="dropdown-item" href="./docs/styleguide/fonts.html">Cinamon</a></li>
                            <li><a class="dropdown-item" href="./docs/styleguide/icons-svg.html">Penapple</a></li>
                          </ul>
                        </div>
                        <!--/column -->
                        <div class="col-lg-8">
                          <h6 class="dropdown-header">Sea & Water</h6>
                          <ul class="list-unstyled cc-3">
                            <li><a class="dropdown-item" href="./docs/elements/accordion.html">Sarder</a></li>
                            <li><a class="dropdown-item" href="./docs/elements/alerts.html">Ikan Kering</a></li>
                            <li><a class="dropdown-item" href="./docs/elements/animations.html">Fish Oil</a></li>
                            <li><a class="dropdown-item" href="./docs/elements/accordion.html">Sarder</a></li>
                            <li><a class="dropdown-item" href="./docs/elements/alerts.html">Ikan Kering</a></li>
                            <li><a class="dropdown-item" href="./docs/elements/animations.html">Fish Oil</a></li>
                          </ul>
                        </div>
                        <!--/column -->
                      </div>
                      <!--/.row -->
                    </li>
                    <!--/.mega-menu-content-->
                  </ul>
                  <!--/.dropdown-menu -->
                </li>
              </ul>
              <!-- /.navbar-nav -->
              <div class="offcanvas-footer d-lg-none">
                <div>
                  <a href="mailto:first.last@email.com" class="link-inverse">info@email.com</a>
                  <br /> 00 (123) 456 78 90 <br />
                  <nav class="nav social social-white mt-4">
                    <a href="#"><i class="uil uil-twitter"></i></a>
                    <a href="#"><i class="uil uil-facebook-f"></i></a>
                    <a href="#"><i class="uil uil-dribbble"></i></a>
                    <a href="#"><i class="uil uil-instagram"></i></a>
                    <a href="#"><i class="uil uil-youtube"></i></a>
                  </nav>
                  <!-- /.social -->
                </div>
              </div>
              <!-- /.offcanvas-footer -->
            </div>
            <!-- /.offcanvas-body -->
          </div>
          <!-- /.navbar-collapse -->
          <div class="navbar-other w-100 d-flex ms-auto">
            <ul class="navbar-nav flex-row align-items-center ms-auto">
            <li class="nav-item d-lg-none">
                <button class="hamburger offcanvas-nav-btn"><span></span></button>
              </li>
              <?php $username = $this->session->userdata('iduser');
              if ($username): ?>
                <li class="nav-item dropdown language-select">
                  <a class="nav-link text-dark dropdown-item dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    <img class="avatar w-8" src="<?= base_url('') ?>assets/admin/media/avatars/avatar10.jpg" alt="" />
                    <!-- <i class="uil uil-user"></i> -->
                  </a>
                  <ul class="dropdown-menu ">
                    <!-- IF already creator -->
                    <li class="nav-item"><a class="dropdown-item" href="<?= base_url() ?>dashboard/supplier">Dashboard</a></li>
                    <li class="nav-item"><a class="dropdown-item" href="<?= base_url() ?>premium">Get Premium</a></li>
                    <li class="nav-item"><a class="dropdown-item" href="<?= base_url() ?>forum">Forum</a></li>
                    <li class="nav-item"><a class="dropdown-item" href="<?= base_url() ?>dataBuyer">Data Buyer</a></li>
                    <!-- Else -->
                    <li class="nav-item"><a class="dropdown-item" href="<?= base_url() ?>profil">Profile</a></li>
                    <li class="nav-item"><a class="dropdown-item" href="<?= base_url() ?>logout">Logout</a></li>
                  </ul>
                </li>
              <?php else: ?>
                <li class="nav-item">
                  <a href="<?= base_url() ?>login" class="nav-link">Sign In</a>
                </li>
                <li class="nav-item d-none d-md-block">
                  <a href="<?= base_url() ?>register" class="btn btn-sm btn-primary rounded">Sign Up</a>
                </li>
              <?php endif; ?>
            </ul>
            <!-- /.navbar-nav -->
          </div>
          <!-- /.navbar-other -->
        </div>
        <!-- /.container -->
      </nav>
      <!-- /.navbar -->
      <div class="offcanvas offcanvas-end text-inverse" id="offcanvas-info" data-bs-scroll="true">
        <div class="offcanvas-header">
          <h3 class="text-white fs-30 mb-0">Sandbox</h3>
          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
            aria-label="Close"></button>
        </div>
        <div class="offcanvas-body pb-6">
          <div class="widget mb-8">
            <p>Sandbox is a multipurpose HTML5 template with various layouts which will be a great solution for your
              business.</p>
          </div>
          <!-- /.widget -->
          <div class="widget mb-8">
            <h4 class="widget-title text-white mb-3">Contact Info</h4>
            <address> Moonshine St. 14/05 <br /> Light City, London </address>
            <a href="mailto:first.last@email.com">info@email.com</a><br /> 00 (123) 456 78 90
          </div>
          <!-- /.widget -->
          <div class="widget mb-8">
            <h4 class="widget-title text-white mb-3">Learn More</h4>
            <ul class="list-unstyled">
              <li><a href="#">Our Story</a></li>
              <li><a href="#">Terms of Use</a></li>
              <li><a href="#">Privacy Policy</a></li>
            </ul>
          </div>
          <!-- /.widget -->
          <div class="widget">
            <h4 class="widget-title text-white mb-3">Follow Us</h4>
            <nav class="nav social social-white">
              <a href="#"><i class="uil uil-twitter"></i></a>
              <a href="#"><i class="uil uil-facebook-f"></i></a>
              <a href="#"><i class="uil uil-dribbble"></i></a>
              <a href="#"><i class="uil uil-instagram"></i></a>
              <a href="#"><i class="uil uil-youtube"></i></a>
            </nav>
            <!-- /.social -->
          </div>
          <!-- /.widget -->
        </div>
        <!-- /.offcanvas-body -->
      </div>
      <!-- /.offcanvas -->
    </header>
    <!-- /header -->