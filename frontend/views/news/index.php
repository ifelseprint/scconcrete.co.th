<?php
use yii\helpers\Html;
use yii\helpers\Url;
use frontend\assets\NewsAsset;
NewsAsset::register($this);
?>
<main class="main">
	<div class="news-posts">

        <div class="news-block">
        	<div class="container">
        		<div class="row">
					<div class="col-lg-4">
						<img src="<?=Url::base(true);?>/img/news.jpg" width="100%">
					</div>
					<div class="col-lg-8" style="text-align: right;">
						<a href="<?=Url::base(true);?>/<?= Yii::t('app', 'menu_news');?>/<?= Yii::t('app', 'social_activity');?>" class="btn-lookmore">Look more →</a>
					</div>
        		</div>

        		<div class="row" style="padding: 20px 0px;">
        			<div class="col-lg-12">
        				<table border="0" cellspacing="0" cellpadding="0">
        					<tr>
        						<td width="30%" align="center" style="background: #cc0001;color: #fff;border: 1px solid #cc0001;">
        							<div class="title">
	        							<?= Yii::t('app', 'txt_activity');?></br>
	        							<?= Yii::t('app', 'txt_for_social');?>
	        						</div>
        						</td>
        						<td>
        							<div class="display_table">
                                        <div class="display_tablerow">
                                            <div style="display:table-cell;vertical-align: middle;" class="display_tablecell owl-carousel owl-simple owl-light owl-nav-inside" data-toggle="owl" data-owl-options='{"nav": false,"autoplay":true,"autoplayTimeout":3000,"autoplayHoverPause":true}'>
                                                <?php if(!empty($BannerActivitySocial->banner_image_1)){ ?>
                                                <div class="intro-slide">
                                                    <img src="<?=Url::base(true);?>/uploads/<?=$BannerActivitySocial->banner_image_1_path?>/<?=$BannerActivitySocial->banner_image_1?>">
                                                </div>
                                                <?php } ?>
                                                <?php if(!empty($BannerActivitySocial->banner_image_2)){ ?>
                                                <div class="intro-slide">
                                                    <img src="<?=Url::base(true);?>/uploads/<?=$BannerActivitySocial->banner_image_2_path?>/<?=$BannerActivitySocial->banner_image_2?>">
                                                </div>
                                                <?php } ?>
                                                <?php if(!empty($BannerActivitySocial->banner_image_3)){ ?>
                                                <div class="intro-slide">
                                                    <img src="<?=Url::base(true);?>/uploads/<?=$BannerActivitySocial->banner_image_3_path?>/<?=$BannerActivitySocial->banner_image_3?>">
                                                </div>
                                                <?php } ?>
                                                <?php if(!empty($BannerActivitySocial->banner_image_4)){ ?>
                                                <div class="intro-slide">
                                                    <img src="<?=Url::base(true);?>/uploads/<?=$BannerActivitySocial->banner_image_4_path?>/<?=$BannerActivitySocial->banner_image_4?>">
                                                </div>
                                                <?php } ?>
                                            </div>
                                            <span class="slider-loader text-white"></span>
                                        </div>
                                    </div>
        						</td>
        					</tr>
        				</table>
        			</div>
        		</div>
        		<div class="row news-list">
                    <?php
                    foreach ($News as $value){

                        if($value->news_category==1){
                        $news_name = 'news_name_'.Yii::$app->language;
                        $news_category_name = 'news_category_name_'.Yii::$app->language;
                    ?> 
        			<div class="col-lg-4">
        				<div class="news-list-image">
        					<a href="<?=Url::base(true);?>/<?= Yii::t('app', 'menu_news');?>/<?=$value->$news_name;?>-<?=$value->news_id?>">
	        					<img src="<?=Url::base(true);?>/uploads/<?=$value->news_image_path?>/<?=$value->news_image?>" width="100%">
	        					<div class="overlay">
								    <div class="text"><?= Yii::t('app', 'txt_readmore');?></div>
								 </div>
							</a>
        				</div>
        				<div class="news-list-title"><?=$value->$news_name?></div>
        			</div>
        			<?php 
                        }
                    }
                    ?>
        		</div>
	        </div>
        </div>

        <div class="activity-block">
        	<div class="container">
        		<div class="row">
					<div class="col-lg-8"></div>
					<div class="col-lg-4" style="text-align: right;">
						<a href="<?=Url::base(true);?>/<?= Yii::t('app', 'menu_news');?>/<?= Yii::t('app', 'company_activity');?>" class="btn-lookmore">Look more →</a>
					</div>
        		</div>
        		<div class="row" style="padding: 20px 0px;">
        			<div class="col-lg-12">
        				<table border="0" cellspacing="0" cellpadding="0">
        					<tr>
        						<td>
        							<div class="display_table">
                                        <div class="display_tablerow">
                                            <div style="display:table-cell;vertical-align: middle;" class="display_tablecell owl-carousel owl-simple owl-light owl-nav-inside" data-toggle="owl" data-owl-options='{"nav": false,"autoplay":true,"autoplayTimeout":3000,"autoplayHoverPause":true}'>
                                                <?php if(!empty($BannerActivityCompany->banner_image_1)){ ?>
                                                <div class="intro-slide">
                                                    <img src="<?=Url::base(true);?>/uploads/<?=$BannerActivityCompany->banner_image_1_path?>/<?=$BannerActivityCompany->banner_image_1?>">
                                                </div>
                                                <?php } ?>
                                                <?php if(!empty($BannerActivityCompany->banner_image_2)){ ?>
                                                <div class="intro-slide">
                                                    <img src="<?=Url::base(true);?>/uploads/<?=$BannerActivityCompany->banner_image_2_path?>/<?=$BannerActivityCompany->banner_image_2?>">
                                                </div>
                                                <?php } ?>
                                                <?php if(!empty($BannerActivityCompany->banner_image_3)){ ?>
                                                <div class="intro-slide">
                                                    <img src="<?=Url::base(true);?>/uploads/<?=$BannerActivityCompany->banner_image_3_path?>/<?=$BannerActivityCompany->banner_image_3?>">
                                                </div>
                                                <?php } ?>
                                                <?php if(!empty($BannerActivityCompany->banner_image_4)){ ?>
                                                <div class="intro-slide">
                                                    <img src="<?=Url::base(true);?>/uploads/<?=$BannerActivityCompany->banner_image_4_path?>/<?=$BannerActivityCompany->banner_image_4?>">
                                                </div>
                                                <?php } ?>
                                            </div>
                                            <span class="slider-loader text-white"></span>
                                        </div>
                                    </div>
        						</td>
        						<td width="30%" align="center" style="background: #cc0001;color: #fff;">
        							<div class="title">
	        							<?= Yii::t('app', 'txt_activity');?></br>
	        							<?= Yii::t('app', 'txt_for_company');?>
	        						</div>
        						</td>
        					</tr>
        				</table>
        			</div>
        		</div>
        		<div class="row activity-list">
                    <?php
                    foreach ($News as $value){

                        if($value->news_category==2){
                        $news_name = 'news_name_'.Yii::$app->language;
                        $news_category_name = 'news_category_name_'.Yii::$app->language;
                    ?> 
        			<div class="col-lg-4">
        				<div class="activity-list-image">
        					<a href="<?=Url::base(true);?>/<?= Yii::t('app', 'menu_news');?>/<?=$value->$news_name;?>-<?=$value->news_id?>">
	        					<img src="<?=Url::base(true);?>/uploads/<?=$value->news_image_path?>/<?=$value->news_image?>" width="100%">
	        					<div class="overlay">
								    <div class="text"><?= Yii::t('app', 'txt_readmore');?></div>
								 </div>
							</a>
        				</div>
        				<div class="activity-list-title"><?=$value->$news_name?></div>
        			</div>
                    <?php 
                        }
                    }
                    ?>
        		</div>
	        </div>
        </div>
    </div>
</main>