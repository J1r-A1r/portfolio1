  <main class="main container bg-primary">
    <div class="main_wrapper container pb-3 venta-bg">
    	<?php foreach ($forum as $value): ?>
      <div class="container">
        <div class="forum_single-name text-center mb-3">
          <h1><?php echo $value['name']; ?></h1>
        </div>
        <div class="forum_single_text text-justify mt-3 mb-3">
          <p><?php echo $value['description']; ?></p>
        </div>
        <div class="forum_item_board d-flex justify-content-between align-items-center">
          <div class="forum_items d-flex">
            <div class="likes">
              <p class="mb-0">
                <svg class="bi bi-heart-fill" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
                </svg> <?php echo $value['likes']; ?>
              </p>
            </div>
            <div class="comments ml-4">
              <p class="mb-0">
                <svg class="bi bi-chat-square-fill" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" d="M2 0a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h2.5a1 1 0 0 1 .8.4l1.9 2.533a1 1 0 0 0 1.6 0l1.9-2.533a1 1 0 0 1 .8-.4H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                </svg> <?php echo $value['comment']; ?>
              </p>
            </div>
            <div class="comments ml-4">
              <p class="mb-0">
                <svg class="bi bi-eye-fill" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                  <path fill-rule="evenodd" d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                </svg> <?php echo $value['view']; ?>
              </p>
            </div>
          </div>
          <div class="forum_like">
            <?php if ($this->session->userdata('user')): ?>
            <a href="<?php echo base_url(); ?>like/<?php echo $value['id'] ?>">
              <svg class="bi bi-heart-fill" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
              </svg>
              Like
            </a>
            <?php else: ?>
            <a href="#" data-toggle="modal" data-target="#login">
              <svg class="bi bi-heart-fill" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
              </svg>
              Like
            </a>
          <?php endif; ?>
          </div>
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
          <h3 class="text-center text-primary">No comments</h3>
        <?php endif ?>
        <hr>
      </div>
      <div class="container">
        <?php if ($this->session->userdata('user')): ?>
        <div class="comment_form">
          <form method="POST" action="../<?php base_url(); ?>addcomment">
            <div class="form-group">
              <label for="exampleFormControlTextarea1">Enter your comment</label>
              <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description"></textarea>
              <span class="text-danger"><?php echo form_error('description') ?></span>
            </div>
            <input type="submit" class="btn btn-primary" value="Add Comment" name="add">
            <input type="hidden" name="nickname" value="<?php echo $this->session->userdata('user')['nickname'] ?>">
            <input type="hidden" name="avatar" value="<?php echo $this->session->userdata('user')['avatar'] ?>">
            <input type="hidden" name="user_id" value="<?php echo $this->session->userdata('user')['id'] ?>">
            <input type="hidden" name="forum_id" value="<?php echo $this->uri->segment(2) ?>">
          </form>
        </div>
        <?php else: ?>
          <h4 class="text-center mt-3">Please Login to comment</h4>
        <?php endif ?>
      </div>
    </div>
  </main>