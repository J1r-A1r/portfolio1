<footer class="footer venta-bg">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="social">
          <ul class="d-flex">
            <li class="mx-5"><a href="https://www.facebook.com/Jirayr.HakobYan3"><img src="<?php echo base_url() ?>/assets/img/social/facebook.png" alt=""></a></li>
            <li class="mx-2"><a href="https://www.instagram.com/hakobyanjiro/?hl=ru"><img src="<?php echo base_url() ?>/assets/img/social/instagram.png" alt=""></a></li>
          </ul>
        </div>
      </div>
      <div class="col-md-6 d-flex align-items-center justify-content-end">
        <div class="copyright">
          <p class="text-primary">Copyright: Designed and Created by Jirayr Hakobyan. All Reserved</p>
        </div>
      </div>
    </div>
  </div>
</footer>
<!-- Modal Login-->
<!-- Modal Register-->
<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header venta-bg">
        <h5 class="modal-title text-primary" id="exampleModalLongTitle">Login</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body venta-bg">
        <form method="POST" action="<?php echo base_url(); ?>login" >
          <div class="form-group">
            <label class="text-primary" for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control text-primary venta-bg" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name='email'>
            <span class="text-danger"><?php echo form_error('email') ?></span>
          </div>
          <div class="form-group">
            <label class="text-primary" for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control text-primary venta-bg" id="exampleInputPassword1" placeholder="Password" name="password">
            <span class="text-danger"><?php echo form_error('password') ?></span>
          </div>
          <input type="submit" class="btn btn-primary" value="Log in" name="login">
          <?php echo $this->session->flashdata('error'); ?>
        </form>
      </div>
      <div class="modal-footer venta-bg">
        <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<audio controls class="d-none" id="music">
  <source src="<?php echo base_url() ?>/assets/music/malukah_the_dragonborn_comes_skyrim-namobilu.com.mp3" type="audio/mpeg">
</audio>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
<!--   <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script> -->
  <script src="<?php echo base_url('assets/js/jquery-3.5.1.slim.min.js')?>"></script>
  <script src="<?php echo base_url('assets/js/bootstrap.bundle.min.js')?>"></script>
  <script src="<?php echo base_url('assets/js/bootstrap.min.js')?>"></script>
  <script src="<?php echo base_url('assets/js/script.js')?>"></script>
</body>
</html>