<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Bootstrap CSS -->
  <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous"> -->
  <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css');?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css');?>">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <title>The Elder Scrolls V of Skyrim</title>
</head>
<body>
  <div id="loading">
    <img src="<?php echo base_url() ?>/assets/img/ajax-loader.gif" alt="">
  </div>
  <header class="header">
    <nav class="navbar navbar-expand-lg navbar-primary venta-bg">
      <a class="navbar-brand ml-3" href="#" id="musicBtn"><img src="<?php echo base_url('/assets/img/logo.png') ?>" alt="" style="width: 80px;margin-left: 15px;"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse justify-content-between" id="navbarTogglerDemo02">
        <ul class="navbar-nav mt-2 mt-lg-0 ml-10em">
          <li class="nav-item border border-primary rounded-pill li <?=($this->uri->segment(1) == '' || $this->uri->segment(1) == 'home')?'active':''?>">
            <a class="nav-link" href="<?php echo base_url().'home'?>">Home</a>
          </li>
          <li class="nav-item border border-primary rounded-pill li <?=($this->uri->segment(1) == 'history')?'active':''?>">
            <a class="nav-link" href="<?php echo base_url().'history'?>">History</a>
          </li>
          <li class="nav-item border border-primary rounded-pill li <?=($this->uri->segment(1) == 'forum')?'active':''?>">
            <a class="nav-link" href="<?php echo base_url().'forum'?>">Forum</a>
          </li>
          <li class="nav-item border border-primary rounded-pill li <?=($this->uri->segment(1) == 'blog')?'active':''?>">
            <a class="nav-link" href="<?php echo base_url().'blog'?>">Blog</a>
          </li>
        </ul>
        <ul class="navbar-nav mt-2 mt-lg-0 flex-row mr-3 align-items-center">
          <?php if ($this->session->userdata('user')): ?>
            <li class="nav-item text-primary" style="color:#fff";>
              <img width="60px" src="<?php echo base_url() ?>/assets/img/user_images/<?php echo $this->session->userdata('user')['avatar'] ?>" alt=""> 
              <?php echo $this->session->userdata('user')['nickname'] ?>
            </li>
            <li class="nav-item">
            <a class="btn btn-outline-primary ml-3 rounded-pill" href="<?php echo base_url() ?>logout">Log out</a>
          </li>
          <?php else: ?>
          <li class="nav-item">
            <button class="btn btn-outline-primary ml-3 rounded-pill" href="#" data-toggle="modal" data-target="#login">Log in</button>
          </li>
          <li class="nav-item">
            <a class="btn btn-outline-primary ml-3 rounded-pill" href="<?php echo base_url() ?>registration">Registration</a>
          </li>
        <?php endif ?>
        </ul>
      </div>
    </nav>
  </header>