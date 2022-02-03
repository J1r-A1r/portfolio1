<main class="main container bg-primary">
  <?php foreach ($blog as $value): ?>
    <div class="blog_post-image" style="background-image: url(<?php echo base_url() ?>/assets/img/blog/<?php echo $value['img']; ?>);">
      <div class="blog_post-transp"></div>
      <div class="blog-title mb-4" style="z-index: 2;color: #fff;">
        <h2 class="text-center"><?php echo $value['name']; ?></h2>
      </div>
    </div>
    <div class="main_wrapper container pb-3 venta-bg">
      <div class="container">
        <div class="blog_single-text text-justify mt-3 mb-3">
          <p><?php echo $value['description']; ?></p>
        </div>
        <hr>
      </div>
      <?php endforeach ?>
      <div class="container">
        <?php if (!empty($comments)): ?>
        <?php foreach ($comments as $value): ?>
        <div class="media blog_media mb-3">
          <img class="mr-3" src="<?php echo base_url() ?>/assets/img/user_images/<?php echo $value['avatar']; ?>" alt="Generic placeholder image">
          <div class="media-body">
            <h5 class="mt-0"><?php echo $value['nickname']; ?></h5>
            <?php echo $value['description']; ?>
          </div>
        </div>
        <?php endforeach ?>
        <?php else: ?>
          <h3 class="text-center">No comments</h3>
        <?php endif ?>
        <hr>
      </div>
      <div class="container">
      <?php if ($this->session->userdata('user')): ?>
        <div class="comment_form">
          <form method="POST" action="../<?php base_url(); ?>addBlogcomment">
            <div class="form-group">
              <label for="exampleFormControlTextarea1">Enter your comment</label>
              <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description"></textarea>
              <span class="text-danger"><?php echo form_error('description') ?></span>
            </div>
            <input type="submit" class="btn btn-dark" value="Add Comment" name="add">
            <input type="hidden" name="nickname" value="<?php echo $this->session->userdata('user')['nickname'] ?>">
            <input type="hidden" name="avatar" value="<?php echo $this->session->userdata('user')['avatar'] ?>">
            <input type="hidden" name="user_id" value="<?php echo $this->session->userdata('user')['id'] ?>">
            <input type="hidden" name="blog_id" value="<?php echo $this->uri->segment(2) ?>">
          </form>
        </div>
        <?php else: ?>
          <h4 class="text-center mt-3">Please Login to comment</h4>
        <?php endif ?>
      </div>
    </div>
  </main>