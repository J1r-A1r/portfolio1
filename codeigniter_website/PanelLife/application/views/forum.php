<main class="main container bg-primary">
  <div class="main_wrapper container pb-3 venta-bg">
    <div class="container">
      <div class="blog-title mb-4">
        <h2 class="text-center">Forum Posts</h2>
      </div>
      <div class="forum_posts">
        <?php foreach ($forum as $value): ?>
          <div class="card mt-4 border-primary">
            <div class="card-header d-flex venta-bg text-primary border-primary">
              <div class="likes">
                <p class="mb-0">
                  <svg class="bi bi-heart-fill" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
                    </svg> <?php echo $value['likes'] ?>
                  </p>
                </div>
                <div class="comments ml-4">
                  <p class="mb-0">
                    <svg class="bi bi-chat-square-fill" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd" d="M2 0a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h2.5a1 1 0 0 1 .8.4l1.9 2.533a1 1 0 0 0 1.6 0l1.9-2.533a1 1 0 0 1 .8-.4H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                      </svg> <?php echo $value['comment'] ?>
                    </p>
                  </div>
                  <div class="comments ml-4">
                    <p class="mb-0">
                      <svg class="bi bi-eye-fill" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                        <path fill-rule="evenodd" d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                        </svg> <?php echo $value['view'] ?>
                      </p>
                    </div>
                    <div class="author ml-3">
                      <p>Author: <?php echo $value['nickname']; ?></p>
                    </div>
                  </div>
                  <div class="card-body d-md-flex d-sm-block align-items-center justify-content-between venta-bg text-primary">
                    <h5 class="card-title"><?php echo $value['name'] ?></h5>
                    <?php if ($this->uri->segment(2) == NULL): ?>
                      <a href="forumsingle/<?php echo $value['id'] ?>" class="btn btn-outline-primary">Read more</a>
                      <?php else: ?>
                      <a href="../forumsingle/<?php echo $value['id'] ?>" class="btn btn-outline-primary">Read more</a>
                    <?php endif ?> 
                  </div>
                </div>
              <?php endforeach ?>
            </div>

            <nav aria-label="Page navigation example" class="mt-3">
              <?php echo $links; ?>
            </nav>
            <hr>
            <?php if ($this->session->userdata('user')): ?>
            <div class="add_forum">
              <form method="POST" action="<?php echo base_url(); ?>addforum">
                <div class="form-group">
                  <label class="font-weight-bold text-primary" for="exampleFormControlInput1">Forum title</label>
                  <input type="text" class="form-control text-primary venta-bg" name="name">
                </div>
                <div class="form-group">
                  <label class="font-weight-bold text-primary" for="exampleFormControlTextarea1">Forum description</label>
                  <textarea class="form-control  text-primary venta-bg" rows="3" name="description"></textarea>
                </div>
                <div class="form-group">
                  <input type="hidden" name="nickname" value="<?php echo $this->session->userdata('user')['nickname']; ?>">
                  <input type="hidden" name="user_id" value="<?php echo $this->session->userdata('user')['id']; ?>">
                  <input type="submit" class="btn btn-primary" value="Add forum" name="add">
                </div>
              </form>
            </div>
            <?php else: ?>
              <h4 class="text-center mt-3 text-danger">Please login to add forum</h4>
          <?php endif; ?>
          </div>
        </div>
      </main>