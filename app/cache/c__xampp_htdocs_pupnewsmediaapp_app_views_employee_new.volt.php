<h2>Create Employee</h2>
<hr>
<?= $this->getContent() ?>

<?= $this->tag->form(['employee/create', 'method' => 'post']) ?>

<div class="row">
    <div class="form-group col-sm-6">
        <?= $myForm->label('firstname') ?>
        <?= $myForm->render('firstname', ['class' => 'form-control']) ?>
    </div>
</div>
<div class="row">
    <div class="form-group col-sm-6">
        <?= $myForm->label('lastname') ?>
        <?= $myForm->render('lastname', ['class' => 'form-control']) ?>
    </div>
</div>

<div class="row">
    <div class="form-group col-sm-6">
        <?= $myForm->label('age') ?>
        <?= $myForm->render('age', ['class' => 'form-control']) ?>
    </div>
</div>


<div class="row">
    <div class="form-group col-sm-6">
        <?= $myForm->label('address') ?>
        <?= $myForm->render('address', ['class' => 'form-control']) ?>
    </div>
</div>

<div class="row">
	<div class="col-xs-12">
		<button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Save</button>
		<?= $this->tag->linkTo(['employee', '<i class="fa fa-arrow-left"></i> Cancel', 'class' => 'btn btn-danger']) ?>
	</div>
</div>

<?= $this->tag->endForm() ?>