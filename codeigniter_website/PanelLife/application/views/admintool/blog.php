<div class="container-fluidy">
	<div class="container">
		<h1 class="text-center">Real Madrid Blog</h1>
		<div class="form">
			<form method="POST" action="<?php echo base_url() ?>addadminblog" enctype="multipart/form-data">
				<div class="form-group">
					<label for="exampleFormControlInput1">Title</label>
					<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="title" name="title">
				</div>
				<div class="form-group">
					<label for="exampleFormControlTextarea1">Description</label>
					<textarea class="form-control" id="exampleFormControlTextarea1" rows="5" name="desc"></textarea>
				</div>
				<div class="form-group">
				    <label for="exampleFormControlFile1">Image</label>
				    <input type="file" class="form-control-file" id="exampleFormControlFile1" name="img">
				</div>
				<div class="form-group">
					<input type="submit" value="Add blog" class="btn btn-dark" name="add">
				</div>
			</form>
		</div>
	</div>
	<hr>
	<div class="container">
		<table id="dtBasicExample" class="table table-striped table-bordered" cellspacing="0" width="100%">
			<thead>
				<tr>
					<th class="th-sm">ID
					</th>
					<th class="th-sm">Blog Title
					</th>
					<th class="th-sm">Description
					</th>
					<th class="th-sm">Delete
					</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($blog as $value): ?>
					<tr>
						<td><?php echo $value['id']; ?></td>
						<td><a href="<?php echo base_url() ?>adminbs/<?php echo $value['id']; ?>"><?php echo $value['name']; ?></a></td>
						<td><?php echo $value['description']; ?></td>
						<td><a class="btn btn-danger" href="<?php echo base_url() ?>deleteblog/<?php echo $value['id']; ?>">Delete</a></td>
					</tr>
				<?php endforeach ?>
			</tbody>
		</table>
	</div>
</div>

