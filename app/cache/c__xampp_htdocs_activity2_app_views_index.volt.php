<!DOCTYPE html>
<html>
	<head>
		<?= $this->tag->getTitle() ?>

		<?= $this->tag->stylesheetLink('css/bootstrap.min.css') ?>
	</head>
<body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <?= $this->tag->linkTo(['index', 'Phalcon App', 'class' => 'navbar-brand']) ?>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><?= $this->tag->linkTo(['index', 'Home']) ?></li>
            <li><?= $this->tag->linkTo(['about', 'About Me']) ?></li>
            <li><?= $this->tag->linkTo(['contact', 'Contact Me']) ?></li>
            <li><?= $this->tag->linkTo(['terms', 'Terms']) ?></li>
            <li><?= $this->tag->linkTo(['frequently-asked-questions', 'FAQ']) ?></li>

          </ul>
        </div>
      </div>
    </nav>

<br><br><br>

<div class="container">
<?= $this->getContent() ?>
<?php $access = 'user'; ?>

<?php if ($access == 'admin') { ?>
 <?= $this->partial('template/admin/footer') ?>
<?php } else { ?>

 <?= $this->partial('template/user/footer') ?>
<?php } ?>

</div>

<?= $this->tag->javascriptInclude('js/jquery.js') ?>
<?= $this->tag->javascriptInclude('js/bootstrap.min.js') ?>

</body>
</html>