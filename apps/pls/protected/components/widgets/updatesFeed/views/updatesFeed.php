<div class="row">
	<?php
	if (!empty($updates)) {
		foreach ($updates as $item) {
			?>
			<div class="col-md-12 update">
				<h3><a href="<?= $item['link'] ?>" target="_blank"><?= $item['title'] ?></a></h3>
				<?= $item['description'] ?>
			</div>
			<?php
		}
	}
	else {
		?>
		<?= Yii::t('pls', 'No updates are available at this time.') ?>
		<?php
	}
	?>
</div>
