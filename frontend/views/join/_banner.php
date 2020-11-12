<?php
use yii\helpers\Html;
use yii\helpers\Url;
?>

<div class="row">
	<div class="col-lg-12">
		<div class="join-banner">
			<div class="intro-slider-container">
				<div class="owl-carousel owl-simple owl-light owl-nav-inside" data-toggle="owl" data-owl-options='{"nav": false,"autoplay":true,"autoplayTimeout":3000,"autoplayHoverPause":true}'>

					<!-- <div class="intro-slide">
						<img src="<?=Url::base(true);?>/uploads/<?=$Banner->banner_image_1_path?>/<?=$Banner->banner_image_1?>">
					</div> -->
					<div class="intro-slide">
						<img src="<?=Url::base(true);?>/img/banner_jobs.jpg">
					</div>
					
				</div><!-- End .owl-carousel owl-simple -->
				<span class="slider-loader text-white"></span><!-- End .slider-loader -->
			</div><!-- End .intro-slider-container -->
		</div>
	</div>
</div>