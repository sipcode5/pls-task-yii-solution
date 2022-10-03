<?php
if (!empty($updates)) { ?>
		<i class="fal fa-comment-alt-lines"></i>
		<h3><?= $updates[1]['title'] ?></h3>
		<div class="row">
			<div class="col-md-12 bubble">
				<?= $updates[1]['description'] ?>
			</div>
		</div>
		<a href="<?= $updates[1]['link'] ?>" target="_blank" class="btn btn-primary"><?= $updates['buttonText'] ?></a>
<?php
}
else {
	?>
	<?= Yii::t('pls', 'No updates are available at this time.') ?>
	<?php
}
?>