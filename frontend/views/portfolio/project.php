<?php
use yii\helpers\Html;
use yii\helpers\Url;
use frontend\assets\PortfolioAsset;
PortfolioAsset::register($this);
?>
<div id="loadingOverlay" class="loader-overlay" style="display: none;">
	<div class="loader-content loader-center">
		<div id="loading" class="loader"></div>
	</div>
</div>

<main class="main">
	<div class="portfolio-posts">
        
		<div class="portfolio-vdeo">
			<div class="container">
				<div class="row" style="padding-bottom: 15px;">
					<div class="col-lg-6"><img src="<?=Url::base(true);?>/img/vdo_size.jpg"></div>
					<div class="col-lg-6"><img src="<?=Url::base(true);?>/img/vdo_size.jpg"></div>
				</div>
				<div class="row">
					<div class="col-lg-12">
		                <div class="owl-carousel owl-simple carousel-with-shadow owl-loaded owl-drag" data-toggle="owl" data-owl-options='{
		                    "nav": false, 
		                    "dots": false,
		                    "items": 4,
		                    "margin": 20,
		                    "loop": false,
		                    "responsive": {
		                        "0": {
		                            "items":1
		                        },
		                        "600": {
		                            "items":2
		                        },
		                        "992": {
		                            "items":4
		                        }
		                    }
		                    }'>
		                    <div class="owl-stage-outer">
		                    	<div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all 0.4s ease 0s; width: 1188px;">
		                    		<div class="owl-item active" style="width: 376px; margin-right: 20px;">
		                    			<article class="entry entry-display">
		                    				<figure class="entry-media">
		                    					<a href="#"><img src="<?=Url::base(true);?>/img/vdo_size.jpg"></a>
		                    				</figure><!-- End .entry-media -->
		                    			</article>
		                    		</div>
		                    		<div class="owl-item active" style="width: 376px; margin-right: 20px;">
		                    			<article class="entry entry-display">
		                    				<figure class="entry-media">
		                    					<a href="#"><img src="<?=Url::base(true);?>/img/vdo_size.jpg"></a>
		                    				</figure><!-- End .entry-media -->
		                    			</article>
		                    		</div>
		                    		<div class="owl-item active" style="width: 376px; margin-right: 20px;">
		                    			<article class="entry entry-display">
		                    				<figure class="entry-media">
		                    					<a href="#"><img src="<?=Url::base(true);?>/img/vdo_size.jpg"></a>
		                    				</figure><!-- End .entry-media -->
		                    			</article>
		                    		</div>
		                    		<div class="owl-item active" style="width: 376px; margin-right: 20px;">
		                    			<article class="entry entry-display">
		                    				<figure class="entry-media">
		                    					<a href="#"><img src="<?=Url::base(true);?>/img/vdo_size.jpg"></a>
		                    				</figure><!-- End .entry-media -->
		                    			</article>
		                    		</div>
		                    		<div class="owl-item active" style="width: 376px; margin-right: 20px;">
		                    			<article class="entry entry-display">
		                    				<figure class="entry-media">
		                    					<a href="#"><img src="<?=Url::base(true);?>/img/vdo_size.jpg"></a>
		                    				</figure><!-- End .entry-media -->
		                    			</article>
		                    		</div>
		                    		<div class="owl-item active" style="width: 376px; margin-right: 20px;">
		                    			<article class="entry entry-display">
		                    				<figure class="entry-media">
		                    					<a href="#"><img src="<?=Url::base(true);?>/img/vdo_size.jpg"></a>
		                    				</figure><!-- End .entry-media -->
		                    			</article>
		                    		</div>
		                    	</div>
		                    </div>
		                </div><!-- End .owl-carousel -->

					</div>
				</div>
			</div>
		</div>
		<div class="portfolio-project-list">
        	<div class="container">
	    		<div class="row">
	    			<div class="col-lg-12">
	    				<div class="portfolio-header">
							<h1>Portfolio</h1>
							<h3>งานโครงการ</h3>
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
		                    		<div class="owl-item active" style="width: 376px; margin-right: 20px;">
		                    			<article class="entry entry-display">
		                    				<figure class="entry-media">
		                    					<a href="#">บจก. ศิริไพบูลย์ พัฒนาการ จำกัด</a>
		                    				</figure><!-- End .entry-media -->
		                    			</article>
		                    		</div>
		                    		<div class="owl-item active" style="width: 376px; margin-right: 20px;">
		                    			<article class="entry entry-display">
		                    				<figure class="entry-media">
		                    					<a href="#" class="active">บริษัท ไทยทาเคนาคาสากล ก่อสร้าง จำกัด</a>
		                    				</figure><!-- End .entry-media -->
		                    			</article>
		                    		</div>
		                    		<div class="owl-item active" style="width: 376px; margin-right: 20px;">
		                    			<article class="entry entry-display">
		                    				<figure class="entry-media">
		                    					<a href="#">หจก มารุพงษ์ ซีวิลล์ครับ</a>
		                    				</figure><!-- End .entry-media -->
		                    			</article>
		                    		</div>
		                    		<div class="owl-item active" style="width: 376px; margin-right: 20px;">
		                    			<article class="entry entry-display">
		                    				<figure class="entry-media">
		                    					<a href="#">บริษัท พรอสเพอร์ ไทธรรม์ จำกัด</a>
		                    				</figure><!-- End .entry-media -->
		                    			</article>
		                    		</div>
		                    		<div class="owl-item active" style="width: 376px; margin-right: 20px;">
		                    			<article class="entry entry-display">
		                    				<figure class="entry-media">
		                    					<a href="#">บริษัท ไชน่าสเตท ZHONGCE</a>
		                    				</figure><!-- End .entry-media -->
		                    			</article>
		                    		</div>
		                    		<div class="owl-item active" style="width: 376px; margin-right: 20px;">
		                    			<article class="entry entry-display">
		                    				<figure class="entry-media">
		                    					<a href="#">บจก แสงฟ้า ซิโน-ไทย จำกัด</a>
		                    				</figure><!-- End .entry-media -->
		                    			</article>
		                    		</div>
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
				// foreach ($portfolio as $value){
				// 	$portfolio_name = 'portfolio_name_'.Yii::$app->language;
				// 	$portfolio_content = 'portfolio_content_'.Yii::$app->language;
				?>  
			        <div class="col-md-4">
	    				<div class="portfolio-box">
		    				<div class="portfolio-image">
		    					<img src="<?=Url::base(true);?>/uploads/2020/10/Pic_28.jpg" width="100%">
							</div>
		    				<div class="portfolio-title">
		    					Kent ทาวนโฮม 2 ชั้น
		    				</div>
		    			</div>
			        </div>
			        <div class="col-md-4">
	    				<div class="portfolio-box">
		    				<div class="portfolio-image">
		    					<img src="<?=Url::base(true);?>/uploads/2020/10/Pic_30.jpg" width="100%">
							</div>
		    				<div class="portfolio-title">
		    					Kent ทาวนโฮม 2 ชั้น
		    				</div>
		    			</div>
			        </div>
			        <div class="col-md-4">
	    				<div class="portfolio-box">
		    				<div class="portfolio-image">
		    					<img src="<?=Url::base(true);?>/uploads/2020/10/Pic_31.jpg" width="100%">
							</div>
		    				<div class="portfolio-title">
		    					Kent ทาวนโฮม 2 ชั้น
		    				</div>
		    			</div>
			        </div>

			        <div class="col-md-4">
	    				<div class="portfolio-box">
		    				<div class="portfolio-image">
		    					<img src="<?=Url::base(true);?>/uploads/2020/10/Pic_40.jpg" width="100%">
							</div>
		    				<div class="portfolio-title">
		    					Kent ทาวนโฮม 2 ชั้น
		    				</div>
		    			</div>
			        </div>
			        <div class="col-md-4">
	    				<div class="portfolio-box">
		    				<div class="portfolio-image">
		    					<img src="<?=Url::base(true);?>/uploads/2020/10/Pic_41.jpg" width="100%">
							</div>
		    				<div class="portfolio-title">
		    					Kent ทาวนโฮม 2 ชั้น
		    				</div>
		    			</div>
			        </div>
			        <div class="col-md-4">
	    				<div class="portfolio-box">
		    				<div class="portfolio-image">
		    					<img src="<?=Url::base(true);?>/uploads/2020/10/Pic_46.jpg" width="100%">
							</div>
		    				<div class="portfolio-title">
		    					Kent ทาวนโฮม 2 ชั้น
		    				</div>
		    			</div>
			        </div>
				<?php
				//     $rowCount++;
				//     if($rowCount % $numOfCols == 0) echo '</div><div class="row">';
				// }
				?>
				</div>

	        	
	        </div>
        </div>
    </div>
</main>
