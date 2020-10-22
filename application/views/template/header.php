<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="icon" href="images/favicon.ico" type="image/ico" />

    <title><?= filter_var($judul, FILTER_SANITIZE_STRING); ?></title>

    <!-- Bootstrap -->
    <link href="<?= filter_var(base_url('assets/template/vendors/bootstrap/dist/css/bootstrap.min.css'), FILTER_SANITIZE_URL);?>" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?= filter_var(base_url('assets/template/vendors/font-awesome/css/font-awesome.min.css'), FILTER_SANITIZE_URL);?>" rel="stylesheet">
    <!-- JQVMap -->
    <link href="<?= filter_var(base_url('assets/template/vendors/jqvmap/dist/jqvmap.min.css'), FILTER_SANITIZE_URL);?>" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="<?= filter_var(base_url('assets/template/vendors/bootstrap-daterangepicker/daterangepicker.css'), FILTER_SANITIZE_URL);?>" rel="stylesheet">
    <!-- Datatables -->    
    <link href="<?= filter_var(base_url('assets/template/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css'), FILTER_SANITIZE_URL);?>" rel="stylesheet">
    <link href="<?= filter_var(base_url('assets/template/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css'), FILTER_SANITIZE_URL);?>" rel="stylesheet">
    <link href="<?= filter_var(base_url('assets/template/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css'), FILTER_SANITIZE_URL);?>" rel="stylesheet">
    <link href="<?= filter_var(base_url('assets/template/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css'), FILTER_SANITIZE_URL);?>" rel="stylesheet">
    <link href="<?= filter_var(base_url('assets/template/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css'), FILTER_SANITIZE_URL);?>" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?= filter_var(base_url('assets/template/build/css/custom.min.css'), FILTER_SANITIZE_URL);?>" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>EAT FISH</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="<?= filter_var(base_url('assets/template/images/user.png'), FILTER_SANITIZE_URL);?>" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2><?= filter_var($this->session->userdata('username'), FILTER_SANITIZE_STRING); ?></h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>Menu</h3>
                <ul class="nav side-menu">
                  <li><a href="<?= filter_var(base_url('User'), FILTER_SANITIZE_URL);?>"><i class="fa fa-home"></i> Dashboard </a>
                  <li><a href="<?= filter_var(base_url('Barang'), FILTER_SANITIZE_URL);?>"><i class="fa fa-list"></i> Daftar Barang </a>
                  <li><a href="<?= filter_var(base_url('Transaksi'), FILTER_SANITIZE_URL);?>"><i class="fa fa-list-alt"></i> Daftar Transaksi </a>
                  <?php if ($this->session->userdata('level')=='manager'): ?>
                  <li><a href="<?= filter_var(base_url('User/daftar_user'), FILTER_SANITIZE_URL);?>"><i class="fa fa-user"></i> Daftar User </a>
                  <?php endif;?>
                  </li>
                </ul>
              </div>
            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="<?= filter_var(base_url('Login/logout'), FILTER_SANITIZE_URL); ?>">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>
              <nav class="nav navbar-nav">
              <ul class=" navbar-right">
                <li class="nav-item dropdown open" style="padding-left: 15px;">
                  <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                    <img src="<?= filter_var(base_url('assets/template/images/user.png'), FILTER_SANITIZE_URL);?>" alt=""><?= filter_var($this->session->userdata('level'), FILTER_SANITIZE_STRING); ?>
                  </a>
                  <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item"  href="<?= filter_var(base_url('Login/logout'), FILTER_SANITIZE_URL); ?>"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                  </div>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->