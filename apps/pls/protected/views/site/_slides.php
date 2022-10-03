<style>
.update a {
	color: #f4a121;
}
</style>
<div id="slides" class="swiper" aria-live="polite">
	<div class="swiper-wrapper">
		<div class="swiper-slide">
			<div class="overlay"></div>
			<div class="content">
				<i class="fal fa-question"></i>
				<h3>Need help?<br/>Our support desk is here for you.</h3>
				<div class="row">
					<div class="col-md-12 bubble">
						Email us at <a href="mailto:support@pls3rdlearning.com">support@pls3rdlearning.com</a> or
						<br/>
						call us toll-free at <a href="tel:1-888-201-EVAL">1-888-201-EVAL</a>.
					</div>
				</div>
			</div>
		</div>
		<div class="swiper-slide">
			<div class="overlay"></div>
			<div class="content">
				<i class="fal fa-user-friends"></i>
				<h3>Did you know that SuperEval offers multiple leadership team evaluations?</h3>
				<a href="https://supereval.com/our-evaluations/overview/" target="_blank" class="btn btn-primary">Learn
					More</a>
			</div>
		</div>
		<div class="swiper-slide">
			<div class="overlay"></div>
			<div class="content">
					<?php
					$this->renderPartial('_slide3');
					?>
			</div>
		</div>
		<div class="swiper-slide">
			<div class="overlay"></div>
			<div class="content">
				<?php
					$this->renderPartial('_slide4');
				?>
			</div>
		</div>
	</div>
	<div class="swiper-pagination"></div>
<div class="swiper-button-prev"></div>
<div class="swiper-button-next"></div>
</div>

<?php
Yii::app()->clientScript->registerScript('slides', /** @lang JavaScript */ "
	$(function () {
		new Swiper('.swiper', {
			speed: 400,
			autoplay: {
				delay: 8000,
			},
			loop: true,
			pagination: {
				el: '.swiper-pagination',
				clickable: true,
			},
			navigation: {
				nextEl: '.swiper-button-next',
				prevEl: '.swiper-button-prev',
			},
		});
	});
	");
?>