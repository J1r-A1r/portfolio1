<div class="container-fluid">
	<div class="container">
		<h1 class="text-center">Users List</h1>
	</div>
	<hr>
	<div class="container">
		<table id="dtBasicExample" class="table table-striped table-bordered" cellspacing="0" width="100%">
			<thead>
				<tr>
					<th class="th-sm">ID
					</th>
					<th class="th-sm">Nickname
					</th>
					<th class="th-sm">Email
					</th>
					<th class="th-sm">Avatar
					</th>
					<th class="th-sm">Delete
					</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($users as $value): ?>
					<tr>
						<td><?php echo $value['id']; ?></td>
						<td><?php echo $value['nickname']; ?></td>
						<td><?php echo $value['email']; ?></td>
						<td><?php echo $value['avatar']; ?></td>
						<td><a class="btn btn-danger" href="<?php echo base_url() ?>deleteuser/<?php echo $value['id']; ?>">Delete</a></td>
					</tr>
				<?php endforeach ?>
			</tbody>
		</table>
	</div>
</div>

