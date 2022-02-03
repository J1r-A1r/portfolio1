<main class="main container bg-primary">
    <!-- main_wrapper -->
    <div class="main_wrapper container pb-3 venta-bg">
      <!-- container -->
      <div class="container">
        <div class="blog-title mb-4">
          <h2 class="text-center text-primary font-weight-bold">Blog Posts</h2>
        </div>
        <div class="row row-cols-1 row-cols-md-2">
          <!-- Blog Post -->
          <?php foreach ($blog as $value): ?>
          <div class="col mb-4">
            <div class="card  border border-primary rounded">
              <div class="card_img">
                <a href="blogsingle/<?php echo $value['id']; ?>">
                  <img src="<?php echo base_url() ?>/assets/img/blog/<?php echo $value['img']; ?>" class="card-img-top" alt="...">
                </a> 
              </div>
              <div class="card-body border-top border-primary bg-card">
                <h5 class="card-title text-center font-weight-bold text-primary"><?php echo $value['name']; ?></h5>
                <div class="card_description mb-4">
                  <p class="card-text text-info  font-italic"><?php echo $value['description']; ?></p>
                </div>
                <?php if ($this->uri->segment(2) == NULL): ?>
                  <a href="blogsingle/<?php echo $value['id'] ?>" class="btn btn-outline-primary">Read more</a>
                  <?php else: ?>
                  <a href="../blogsingle/<?php echo $value['id'] ?>" class="btn btn-dark">Read more</a>
                <?php endif ?>
              </div>
            </div>
          </div>
          <?php endforeach ?>
          <!-- Blog Post end -->
        </div>
        <!-- Pagination -->
        <nav aria-label="Page navigation example" class="mt-3">
          <?php echo $links; ?>
        </nav>
        <!-- Pageination end -->
      </div>
      <!-- container end -->
    </div>
    <!-- main_wrapper end -->
  </main>