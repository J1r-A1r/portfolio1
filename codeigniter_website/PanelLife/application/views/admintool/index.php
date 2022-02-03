<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>SB Admin</title>
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
  <div class="container d-flex justify-content-center">
    <div class="login">
      <div class="card card-login mx-auto mt-5">
        <div class="card-header">Login</div>
        <div class="card-body">
          <form role="form" method="POST">
            <div class="form-group">
              <label for="exampleInputEmail1">Login</label>
              <input class="form-control" id="exampleInputEmail1" name="username" type="text" aria-describedby="emailHelp" placeholder="Enter login">
              <span class="text-danger"><?php echo form_error('username');?></span>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Password</label>
              <input class="form-control" id="exampleInputPassword1" name="password" type="password" placeholder="Password">
              <span class="text-danger"><?php echo form_error('password');?></span>
            </div>
            <input type="submit" name ="login" class="btn btn-dark btn-block" value="Sign In">
            <span class="text-danger"><?php echo $this->session->flashdata("error");?></span>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- Bootstrap core JavaScript-->
  <script src="<?php echo base_url('assets/assetsadmin/js/jquery-3.5.1.slim.min.js')?>"></script>
  <script src="<?php echo base_url('assets/assetsadmin/js/bootstrap.bundle.min.js')?>"></script>
  <script src="<?php echo base_url('assets/assetsadmin/js/bootstrap.min.js')?>"></script>
  <!-- <script src="<?php echo base_url('assets/datatables/jquery.dataTables.js')?>"></script> -->
  <!-- Custom scripts for this page-->
  <script src="<?php echo base_url('assets/assetsadmin/datatables/dataTables.bootstrap4.js')?>"></script>
  <script src="<?php echo base_url('assets/assetsadmin/js/script.js')?>"></script>
</body>

</html>