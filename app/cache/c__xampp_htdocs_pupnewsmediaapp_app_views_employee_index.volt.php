<?= $this->getContent() ?>
<?= $this->tag->linkTo(['Employee/new', 'Add Employee', 'class' => 'btn btn-primary']) ?>
<hr>

<table class="table table-hover">
	<tr>
		<th>Id</th>
		<th>Firstname</th> 
		<th>Lastname</th>
		<th>Age</th>
		<th>Address</th>
		<th>Action</th>
	</tr>
	<?php foreach ($emps as $data) { ?>
	<tr>
		<td><?= $data->id ?></td>
		<td><?= ucwords($this->escaper->escapeHtml($data->firstname)) ?></td>
		<td><?= ucwords($this->escaper->escapeHtml($data->lastname)) ?></td>
		<td><?= $this->escaper->escapeHtml($data->age) ?></td>
		<td><?= ucwords($this->escaper->escapeHtml($data->address)) ?></td>
		<td>
			<?= $this->tag->linkTo(['employee/detail/' . $data->id, 'Edit', 'class' => 'btn btn-success btn-sm']) ?>
			<?= $this->tag->linkTo(['employee/delete/' . $data->id, 'Delete', 'class' => 'btn btn-danger btn-sm']) ?>
		</td>
	</tr>
	<?php } ?>
</table>