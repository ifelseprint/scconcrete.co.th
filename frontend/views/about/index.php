<?php
use yii\helpers\Html;
use yii\helpers\Url;
use frontend\assets\AboutAsset;
AboutAsset::register($this);
?>
<main class="main">
	<div class="about-posts">
		<?= $this->render('_banner', ['Banner'=> $Banner]); ?>
		<div class="about-block section1" style="background: #fff">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 box-left">
						<div style="padding: 60px;">
							<img src="<?=Url::base(true);?>/img/about_quality_is_our_goal.jpg">
						</div>
					</div>
					<div class="col-lg-6 box-right">
						<div class="about-content">
							<div class="row">
								<div class="col-lg-12">
									<div class="content-box">
										<div class="content-header"><?=Yii::$app->translated->get(16);?></div>
										<div class="content-text"><?=Yii::$app->translated->get(17);?></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="about-block section2" style="background: #efefef">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 box-left">
						<div style="padding: 60px;">
							<img src="<?=Url::base(true);?>/img/about2.jpg" style="border: 4px solid #fff;">
						</div>
					</div>
					<div class="col-lg-6 box-right">
						<div class="about-content">
							<div class="row">
								<div class="col-lg-12">
									<div class="content-box">
										<h1 class="red">SC PRECAST</h1>
										<h1>SOLUTION</h1>
										<br>
										<div class="content-text">
											<?=Yii::$app->translated->get(18);?>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="about-block section3" style="background: #fff">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 box-left">
						<div class="about-content">
							<div class="row">
								<div class="col-lg-12">
									<div class="content-box">
										<div class="content-text">
											<?=Yii::$app->translated->get(19);?>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-6 box-right">
						<div style="padding: 60px;">
							<img src="<?=Url::base(true);?>/img/about3.jpg" style="border: 4px solid #fff;">
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="about-block section4" style="background: #efefef">
			<div class="container">
				<div class="row">
					<div class="col-lg-12" style="padding: 60px;">
						<div class="header-text border-line">
							<?=Yii::$app->translated->get(20);?></h1>
						</div>
						<div>
							<div class="row">
					            <div class="col-xs-12 col-lg-12">
					                <div style="padding: 15px 0px;">
					                  <div class="owl-carousel owl-simple carousel-with-shadow owl-loaded owl-drag" data-toggle="owl" data-owl-options='{
					                    "nav": false, 
					                    "dots": true,
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
					                          <!-- <div class="owl-item active" style="width: 376px; margin-right: 20px;">
					                            <article class="entry entry-display">
					                              <figure class="entry-media">
					                                <a href="#">
					                                  	<img src="<?=Url::base(true);?>/img/logo_company_1.jpg" alt="image desc" >
					                                  	<div class="desc">
					                                  		<div>บริษัท ซุน คอนสตรัคชั่น แอนด์ เอ็นจิเนียริ่ง จำกัด</div>
															<div>SUEN CONSTRUCTION AND ENGINEERING CO.,LTD</div>
														</div>
					                                </a>
					                              </figure>
					                            </article>
					                          </div>
					                          <div class="owl-item active" style="width: 376px; margin-right: 20px;">
					                            <article class="entry entry-display">
					                              <figure class="entry-media">
					                                <a href="#">
					                                  	<img src="<?=Url::base(true);?>/img/logo_company_2.jpg" alt="image desc">
					                                  	<div class="desc">
					                                  		<div>บริษัท ซุน เจนเนอรัล แอนด์ เอ็นจิเนียริ่ง จำกัด</div>
															<div>SUEN GENERAL AND ENGINEERING CO.,LTD</div>
														</div>
					                                </a>
					                              </figure>
					                            </article>
					                          </div> -->
					                          <div class="owl-item active" style="width: 376px; margin-right: 20px;">
					                            <article class="entry entry-display">
					                              <figure class="entry-media">
					                                <a href="#">
					                                  	<img src="<?=Url::base(true);?>/img/logo_company_1.jpg" alt="image desc">
					                                  	<div class="desc">
					                                  		<div>บริษัท เอสซี เรียลเอสเตท ดีเวลลอปเม้นท์ จำกัด</div>
															<div>SC REAL ESTATE DEVELOPMENT CO.,LTD</div>
														</div>
					                                </a>
					                              </figure>
					                            </article>
					                          </div>
					                          <div class="owl-item active" style="width: 376px; margin-right: 20px;">
					                            <article class="entry entry-display">
					                              <figure class="entry-media">
					                                <a href="#">
					                                  	<img src="<?=Url::base(true);?>/img/logo_company_2.jpg" alt="image desc">
					                                  	<div class="desc">
					                                  		<div>บริษัท เอสซี เฮ้าส์ซิ่ง ดีเวลลอปเม้นท์ จำกัด</div>
															<div>SC HOUSING DEVELOPMENT CO.,LTD</div>
														</div>
					                                </a>
					                              </figure>
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
					</div>
				</div>
			</div>
		</div>
	</div>
</main>