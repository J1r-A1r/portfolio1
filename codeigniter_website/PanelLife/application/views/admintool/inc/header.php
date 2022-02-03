<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Admin - The Elder Scrolls V of Skyrim</title>
  <!-- Bootstrap core CSS-->
  <link href="<?php echo base_url('assets/assetsadmin/css/bootstrap.min.css')?>" rel="stylesheet">
  <!-- Page level plugin CSS-->
  <link href="<?php echo base_url('assets/assetsadmin/datatables/dataTables.bootstrap4.css')?>" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="<?php echo base_url('assets/assetsadmin/css/style.css')?>" rel="stylesheet">
</head>
<body>
  <div id="loading">
    <img src="<?php echo base_url() ?>/assets/assetsadmin/img/ajax-loader.gif" alt="">
  </div>
  <div class="d-flex" id="wrapper">
    <!-- Sidebar -->
    <div class="bg-dark border-right" id="sidebar-wrapper">
      <div class="sidebar-heading">Start Bootstrap</div>
      <div class="list-group list-group-flush ">
        <a href="<?php echo base_url() ?>adminblog" class="list-group-item list-group-item-action bg-dark">Blog</a>
        <a href="<?php echo base_url() ?>adminforum" class="list-group-item list-group-item-action bg-dark">Forum</a>
        <a href="<?php echo base_url() ?>users" class="list-group-item list-group-item-action bg-dark">Users</a>
      </div>
    </div>
    <!-- /#sidebar-wrapper -->
    <!-- Page Content -->
    <div id="page-content-wrapper">
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark border-bottom">
        <button class="btn btn-primary" id="menu-toggle">Toggle Menu</button>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <?php echo $this->session->userdata('admin')['username'] ?>
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="<?php base_url() ?>adminlogout">Log Out</a>
              </div>
            </li>
          </ul>
        </div>
      </nav>