<main class="main container bg-primary">
	<div class="slider">
		<div class="bg_transp"></div>
		<div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
			<div class="carousel-inner" style="max-height: 500px !important; min-height: 200px !important;">
				<div class="carousel-item active" data-interval="3000">
					<img src="<?php echo base_url() ?>/assets/img/slider/img1.jpg" class="d-block w-100" alt="...">
				</div>
				<div class="carousel-item" data-interval="3000">
					<img src="<?php echo base_url() ?>/assets/img/slider/img2.jpg" class="d-block w-100" alt="...">
				</div>
				<div class="carousel-item" data-interval="3000">
					<img src="<?php echo base_url() ?>/assets/img/slider/img3.jpg" class="d-block w-100" alt="...">
				</div>
			</div>
			<a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
	</div>
	<div class="main_wrapper container pb-3 venta-bg">
		<div class="container">
			<div class="blog-title mb-4">
				<h2 class="text-center">Popular Blog Posts</h2>
			</div>
			<div class="row row-cols-1 row-cols-md-2">
				<?php foreach ($blog as $value): ?>
				<div class="col mb-4">
					<div class="card">
						<div class="card_img">
							<a href="">
								<img src="<?php echo base_url() ?>/assets/img/blog/<?php echo $value['img']; ?>" class="card-img-top" alt="...">
							</a> 
						</div>
						<div class="card-body">
							<h5 class="card-title"><?php echo $value['name']; ?></h5>
							<div class="card_description mb-4">
								<p class="card-text"><?php echo $value['description']; ?></p>
							</div>
							<a href="blogsingle/<?php echo $value['id']; ?>" class="btn btn-dark">See more</a>
						</div>
					</div>
				</div>					
				<?php endforeach ?>
			</div>
		</div>
		<div class="container">
			<div class="blog-title mb-4 mt-4">
				<h2 class="text-center">Popular Forum Posts</h2>
			</div>
			<div class="forum_posts">
				<?php foreach ($forum as $value): ?>
				<div class="card mt-4">
					<div class="card-header d-flex">
						<div class="likes">
							<p class="mb-0">
								<svg class="bi bi-heart-fill" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
									<path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
								</svg> 
								<?php echo $value['likes']; ?>
							</p>
						</div>
						<div class="comments ml-4">
							<p class="mb-0">
								<svg class="bi bi-chat-square-fill" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
									<path fill-rule="evenodd" d="M2 0a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h2.5a1 1 0 0 1 .8.4l1.9 2.533a1 1 0 0 0 1.6 0l1.9-2.533a1 1 0 0 1 .8-.4H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
								</svg> 
								<?php echo $value['comment']; ?>
							</p>
						</div>
						<div class="comments ml-4">
							<p class="mb-0">
								<svg class="bi bi-eye-fill" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
									<path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
									<path fill-rule="evenodd" d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
								</svg>
								<?php echo $value['view']; ?>
							</p>
						</div>
					</div>
					<div class="card-body d-md-flex d-sm-block align-items-center justify-content-between">
						<h5 class="card-title"><?php echo $value['name']; ?></h5>
						<a href="forumsingle/<?php echo $value['id']; ?>" class="btn btn-dark">Read more</a>
					</div>
				</div>					
				<?php endforeach ?>
			</div>
		</div>
	</div>
</main>