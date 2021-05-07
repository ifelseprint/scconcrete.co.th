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
										<h1 class="red"><?=Yii::$app->translated->get(18);?></h1>
										<h1><?=Yii::$app->translated->get(19);?></h1>
										<br>
										<div class="content-text">
											<?=Yii::$app->translated->get(20);?>
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
											<?=Yii::$app->translated->get(48);?>
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

		<!-- <div class="about-block section4" style="background: #efefef">
			<div class="container">
				<div class="row">
					<div class="col-lg-12" style="padding: 60px;">
						<div class="header-text border-line">
							<?=Yii::$app->translated->get(49);?></h1>
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
					                          <?php
					                          foreach ($Partner as $key => $value) {
					                            // $partner_name = 'partner_name_'.Yii::$app->language;
					                          ?>
					                          <div class="owl-item active" style="width: 376px; margin-right: 20px;">
					                            <article class="entry entry-display">
					                              <figure class="entry-media">
					                                <a target="_blank" href="<?=$value->partner_link;?>">
					                                  	<img src="<?=Url::base(true);?>/uploads/<?=$value->partner_image_path;?>/<?=$value->partner_image;?>" alt="image desc">
					                                  	<div class="desc">
					                                  		<div><?=$value->partner_name_th;?></div>
															<div><?=$value->partner_name_en;?></div>
														</div>
					                                </a>
					                              </figure>
					                            </article>
					                          </div>
					                          <?php } ?>

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
					                  </div>
					                </div>
					            </div>
					        </div>
						</div>
					</div>
				</div>
			</div>
		</div> -->
	</div>
</main>