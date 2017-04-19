<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Rekam Medis | </title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?php echo (css.'bootstrap/css/bootstrap.min.css');?>">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo (fonts.'css/font-awesome.min.css');?>">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?php echo (js.'iCheck/skins/flat/green.css');?>">
   <!-- bootstrap-progressbar -->
   <link rel="stylesheet" href="<?php echo (css.'progressbar/bootstrap-progressbar-3.3.4.min.css');?>">
    <!-- jVectorMap -->
    <link rel="stylesheet" href="<?php echo (css.'maps/jquery-jvectormap-2.0.3.css');?>">

    <!-- Select2 -->
    <link href="<?php echo (css.'select/select2.min.css');?>" rel="stylesheet">
   
    <!-- Custom Theme Style -->
     <link rel="stylesheet" href="<?php echo (css.'custom.min.css');?>">

     <!-- Datatables -->
     <link rel="stylesheet" href="<?php echo (js.'datatables.net-bs/css/dataTables.bootstrap.min.css');?>">
     <link rel="stylesheet" href="<?php echo (js.'datatables.net-buttons-bs/css/buttons.bootstrap.min.css');?>">
     <link rel="stylesheet" href="<?php echo (js.'datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css');?>">
     <link rel="stylesheet" href="<?php echo (js.'datatables.net-responsive-bs/css/responsive.bootstrap.min.css');?>">
     <link rel="stylesheet" href="<?php echo (js.'datatables.net-scroller-bs/css/scroller.bootstrap.min.css');?>">

     <!-- DatePicker-->
     <link rel="stylesheet" href="<?php echo (js.'jqueryUI/jquery-ui.min.css');?>">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Mini Project</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile">
              <div class="profile_pic">
                <img src="<?php echo (images.'img.jpg');?>" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2><?php echo $this->session->userdata('username');?></h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a href="<?php echo base_url('main/index?uid=welcome');?>"><i class="fa fa-home"></i> Home </a></li>
                  <?php 
                    if ($this->session->userdata('level') == 'admin') {
                      echo "
                      <li><a><i class='fa fa-edit'></i> Data Master <span class='fa fa-chevron-down'></span></a>
                      <ul class='nav child_menu'>
                      <li><a href='".base_url('main/index?uid=spesialis')."'>Data Spesialis</a></li>
                      <li><a href='".base_url('main/index?uid=dokter')."'>Data Dokter</a></li>
                      <li><a href='".base_url('main/index?uid=pasien')."'>Data Pasien</a></li>
                    </ul>
                  </li>";
                    }else if ($this->session->userdata('level') == 'dokter') {
                      echo "<li><a href='".base_url('main/index?uid=medik')."'><i class='fa fa-edit'></i> Data Rekam Medik</a>
                  </li>";
                    }else{
                      echo "<li><a href='".base_url('main/index?uid=hasil')."'><i class='fa fa-edit'></i> Hasil Rekam Medik</a>
                  </li>";
                    }
                  ?>
                  
                  
                </ul>
              </div>
              

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a onclick="return confirm('Apakah anda yakin ingin keluar aplikasi ini?');" data-toggle="tooltip" data-placement="top" title="Logout" href="<?php echo base_url('auth/logout');?>">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav class="" role="navigation">
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="<?php echo (images.'img.jpg');?>" alt=""><?php echo $this->session->userdata('username');?>
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                      
                    <li><a onclick="return confirm('Apakah anda yakin ingin keluar aplikasi ini?');" href="<?php echo base_url('auth/logout');?>"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>

                
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->