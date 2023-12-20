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
  <title>TradeID</title>
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
              </ul>
              <!-- /.navbar-nav -->
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
                    <?php if($userHeader->cSupplier == 1 ) : ?>
                      <li class="nav-item"><a class="dropdown-item" href="<?= base_url() ?>dashboard/supplier">Dashboard</a></li>
                      <!-- Else -->
                      <li class="nav-item"><a class="dropdown-item" href="<?= base_url() ?>profil">Profile</a></li>
                      <li class="nav-item"><a class="dropdown-item" href="<?= base_url() ?>logout">Logout</a></li>
                    <?php else : ?>
                      <li class="nav-item"><a class="dropdown-item" href="<?= base_url() ?>profil">Profile</a></li>
                      <li class="nav-item"><a class="dropdown-item" href="<?= base_url() ?>logout">Logout</a></li>
                    <?php endif; ?>
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
      </div>
      <!-- /.offcanvas -->
    </header>
    <!-- /header -->