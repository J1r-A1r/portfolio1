<main class="main container bg-primary">
	<div class="main_wrapper container venta-bg">
		<h2 class="text-center mb-3">Quick Registration</h2>
		<form method="POST" action="<?php echo base_url(); ?>validation">
			<div class="form-group">
				<label class="font-weight-bold text-primary" for="exampleInputEmail1">Nickname</label>
				<input type="text" class="form-control venta-bg text-primary" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter nickname" name="nickname">
				<span class="text-danger"><?php echo form_error('nickname') ?></span>
			</div>
			<div class="form-group">
				<label class="font-weight-bold text-primary" for="exampleInputEmail1">Email address</label>
				<input type="email" class="form-control venta-bg text-primary" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email">
				<span class="text-danger"><?php echo form_error('email') ?></span>
			</div>
			<div class="form-group">
				<label class="font-weight-bold text-primary" for="exampleInputPassword1">Password</label>
				<input type="password" class="form-control venta-bg text-primary" id="exampleInputPassword1" placeholder="Password" name="password">
				<span class="text-danger"><?php echo form_error('password') ?></span>
			</div>
			<div class="form-group">
				<label class="font-weight-bold text-primary" for="avatar">Enter your Avatar</label>
				<div class="row">
					<div class="col-auto col-md-4 mb-3">
						<input type="radio" name="avatar" class="mb-2" value="user1.jpg" checked>
						<img width="60px" src="<?php echo base_url() ?>/assets/img/user_images/user1.jpg">
					</div>
					<div class="col-auto col-md-4 mb-3">
						<input type="radio" name="avatar" class="mb-2" value="user2.jpg">
						<img width="60px" src="<?php echo base_url() ?>/assets/img/user_images/user2.jpg">
					</div>
					<div class="col-auto col-md-4 mb-3">
						<input type="radio" name="avatar" class="mb-2" value="user3.jpg">
						<img width="60px" src="<?php echo base_url() ?>/assets/img/user_images/user3.jpg">
					</div>
					<div class="col-auto col-md-4 mb-3">
						<input type="radio" name="avatar" class="mb-2" value="user4.jpg">
						<img width="60px" src="<?php echo base_url() ?>/assets/img/user_images/user4.jpg">
					</div>
					<div class="col-auto col-md-4 mb-3">
						<input type="radio" name="avatar" class="mb-2" value="user5.jpg">
						<img width="60px" src="<?php echo base_url() ?>/assets/img/user_images/user5.jpg">
					</div>
					<div class="col-auto col-md-4 mb-3">
						<input type="radio" name="avatar" class="mb-2" value="user6.jpg">
						<img width="60px" src="<?php echo base_url() ?>/assets/img/user_images/user6.jpg">
					</div>
				</div>
			</div>
			<div class="form-group">
				<input type="submit" class="btn btn-primary" value="Registration" name="register">
			</div>
		</form>
	</div>
</div>
</main>