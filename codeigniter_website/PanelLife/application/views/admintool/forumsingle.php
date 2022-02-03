<div class="container-fluid">
	<?php if (!empty($forum)): ?>
	<div class="container">
		<h1 class="text-center"><?php echo $forum->name; ?></h1>
		<p class="text-justify"><?php echo $forum->description; ?></p>
	</div>
	<hr>
<div class="container">
		<table id="dtBasicExample" class="table table-striped table-bordered" cellspacing="0" width="100%">
			<thead>
				<tr>
					<th class="th-sm">ID
					</th>
					<th class="th-sm">Comment
					</th>
					<th class="th-sm">Author
					</th>
					<th class="th-sm">Delete
					</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($comment as $value): ?>
					<tr>
						<td><?php echo $value['id']; ?></td>
						<td><?php echo $value['description']; ?></td>
						<td><?php echo $value['nickname']; ?></td>
						<td><a class="btn btn-danger" href="<?php echo base_url() ?>deleteForumComment/<?php echo $forum->id; ?>/<?php echo $value['id']; ?>">Delete</a></td>
					</tr>
				<?php endforeach ?>
			</tbody>
		</table>
	</div>
	<?php else: ?>
	<h2 class="text-center">Forum not found</h2>
	<h3 class="text-center"><a href="<?php echo base_url() ?>adminforum"><-Go back</a></h3>
	<?php endif ?>
</div>