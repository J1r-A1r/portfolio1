<div class="container-fluid">
	<div class="container">
		<h1 class="text-center">Real Madrid Forum</h1>
		<div class="form">
			<form method="POST" action="<?php echo base_url() ?>addadminforum">
				<div class="form-group">
					<label for="exampleFormControlInput1">Title</label>
					<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="title" name="title">
					<span class="text-danger"><?php echo form_error('title') ?></span>
				</div>
				<div class="form-group">
					<label for="exampleFormControlTextarea1">Description</label>
					<textarea class="form-control" id="exampleFormControlTextarea1" rows="5" name="desc"></textarea>
				</div>
				<div class="form-group">
					<input type="submit" value="Add forum" class="btn btn-dark" name="add">
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
					<th class="th-sm">Forum Title
					</th>
					<th class="th-sm">Likes
					</th>
					<th class="th-sm">Comments
					</th>
					<th class="th-sm">Views
					</th>
					<th class="th-sm">Author
					</th>
					<th class="th-sm">Delete
					</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($forum as $value): ?>
					<tr>
						<td><?php echo $value['id']; ?></td>
						<td><a href="<?php echo base_url() ?>adminfs/<?php echo $value['id']; ?>"><?php echo $value['name']; ?></a></td>
						<td><?php echo $value['likes']; ?></td>
						<td><?php echo $value['comment']; ?></td>
						<td><?php echo $value['view']; ?></td>
						<td><?php echo $value['nickname']; ?></td>
						<td><a class="btn btn-danger" href="<?php echo base_url() ?>deleteforum/<?php echo $value['id']; ?>">Delete</a></td>
					</tr>
				<?php endforeach ?>
			</tbody>
		</table>
	</div>
</div>

