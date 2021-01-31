<?php
use yii\helpers\Html;
use yii\helpers\Url;
use frontend\assets\PortfolioAsset;
?>
<div id="loadingOverlay" class="loader-overlay" style="display: none;">
	<div class="loader-content loader-center">
		<div id="loading" class="loader"></div>
	</div>
</div>

<main class="main">
	<div class="portfolio-posts">
        
		<div class="portfolio-banner">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="intro-slider-container" style="border-bottom: 4px solid #e10000;">
							<div class="owl-carousel owl-simple owl-light owl-nav-inside" data-toggle="owl" data-owl-options='{"nav": false,"autoplay":true,"autoplayTimeout":3000,"autoplayHoverPause":true}'>
								<div class="intro-slide">
									<img src="<?=Url::base(true);?>/uploads/2020/10/banner-portfolio-property.jpg" class="desktop">
									<img src="<?=Url::base(true);?>/uploads/2020/10/banner-portfolio-property.jpg" class="mobile">
								</div>
							</div><!-- End .owl-carousel owl-simple -->
							<span class="slider-loader text-white"></span><!-- End .slider-loader -->
						</div><!-- End .intro-slider-container -->
					</div>
				</div>
			</div>
		</div>
		<div class="portfolio-property-list">
        	<div class="container">
	    		<div class="row">
	    			<div class="col-lg-12">
	    				<div class="portfolio-header">
							<h1>Portfolio</h1>
							<h3>งานอสังหาริมทรัพย์</h3>
	        			</div>
	        		</div>
	        	</div>
	        	<div class="row">
					<div class="col-lg-12">
		                <div class="owl-carousel owl-simple carousel-with-shadow owl-loaded owl-drag" data-toggle="owl" data-owl-options='{
		                    "nav": false, 
		                    "dots": true,
		                    "items": 5,
		                    "margin": 20,
		                    "loop": false,
		                    "responsive": {
		                        "0": {
		                            "items":2
		                        },
		                        "600": {
		                            "items":3
		                        },
		                        "992": {
		                            "items":5
		                        }
		                    }
		                    }'>
		                    <div class="owl-stage-outer">
		                    	<div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all 0.4s ease 0s; width: 1188px;">
		                    		
		                    		<?php
		                    		$i = 1;
		                    		foreach ($Portfolio as $data) {
		                    			$active = ($i==1) ? 'active' : '';
									?>
		                    		<div class="owl-item active" style="width: 376px; margin-right: 20px;">
		                    			<article class="entry entry-display">
		                    				<figure class="entry-media">
		                    					<a href="javascript:void(0)" class="<?=$active?> row-portfolio" data-target="<?= Yii::t('app', 'menu_property');?>/<?=$data->portfolio_id;?>" >
		                    						<img src="<?=Url::base(true);?>/uploads/<?=$data->portfolio_image_path?>/<?=$data->portfolio_image?>" >
		                    					</a>
		                    				</figure><!-- End .entry-media -->
		                    			</article>
		                    		</div>
		                    		<?php $i++;} ?>

		                    	</div>
		                    </div>
		                    <div class="owl-nav disabled">
		                    	<button type="button" role="presentation" class="owl-prev">
		                    		<i class="icon-angle-left"></i>
		                    	</button>
		                    	<button type="button" role="presentation" class="owl-next">
		                    		<i class="icon-angle-right"></i>
		                    	</button>
		                    </div>
		                    <div class="owl-dots disabled">
		                    	<button role="button" class="owl-dot active"><span></span></button>
		                    </div>
		                </div><!-- End .owl-carousel -->

					</div>
				</div>
	        </div>
	    </div>
        <div class="portfolio-block">
        	<div class="container">
	        	<?php
				//Columns must be a factor of 12 (1,2,3,4,6,12)
				// $numOfCols = 3;
				// $rowCount = 0;
				// $bootstrapColWidth = 12 / $numOfCols;
				?>
				<div class="row">
				<?php
				foreach ($PortfolioDetail as $value){
					$portfolio_content = 'portfolio_detail_content_'.Yii::$app->language;
				?>  
			        <div class="col-md-4">
	    				<div class="portfolio-box">
		    				<div class="portfolio-image">
		    					<img src="<?=Url::base(true);?>/uploads/<?=$value->portfolio_detail_image_path?>/<?=$value->portfolio_detail_image?>" width="100%">
							</div>
		    				<div class="portfolio-title">
		    					<?=$value->$portfolio_content?>
		    				</div>
		    			</div>
			        </div>
				<?php
				    // $rowCount++;
				    // if($rowCount % $numOfCols == 0) echo '</div><div class="row">';
				}
				?>
				</div>
	        </div>
        </div>
    </div>
</main>
<?php
$script = <<<JS
$("document").ready(function(){
    Web.Portfolio.initializeInPjax();
});
JS;
$this->registerJs($script);
PortfolioAsset::register($this);
?>