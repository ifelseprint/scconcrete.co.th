<?php
use yii\helpers\Html;
use yii\helpers\Url;
use frontend\assets\JoinAsset;
JoinAsset::register($this);
?>
<main class="main">
	<div class="join-posts">
		<div class="container">
			<?= $this->render('_banner', ['Banner'=> $Banner]); ?>
			<div class="row" style="padding: 35px 0px;">
				<div class="col-xs-12 col-lg-6" style="text-align: left;">
					<img src="<?=Url::base(true);?>/img/join_us.png" width="300" style="display: inline-block;">
				</div>
				<div class="col-xs-12 col-lg-6" style="text-align: right;">
					<img src="<?=Url::base(true);?>/img/join_us2.png" width="300" style="display: inline-block;">
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-lg-4 box-left">
					<div class="join-content">
						<div class="join-content-box">
							<div class="join-title-header">
								<span class="text-header"><?= Yii::t('app', 'txt_position');?></span>
							</div>
							<div class="join-apply">
								<ul>
									<?php
									$i = 1;
									foreach ($Jobs as $key => $value) {
										$active = ($i==1) ? 'active' : '';
										$job_name = 'jobs_name_'.Yii::$app->language;
									?>
									<li><a href="javascript:void(0)" class="row-join <?=$active?>" data-target="<?= Yii::t('app', 'menu_join_us');?>/view/<?=$value->jobs_id;?>"><?=$value->$job_name?></a></li>
									<?php $i++;} ?>
								</ul>
							</div>
							<hr>
							<div class="join-title-contact">
								<span class="text-header"><?=Yii::$app->translated->get(33);?></span>
								<div><?=Yii::$app->translated->get(34);?></div>
								<div><?=Yii::$app->translated->get(35);?></div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-lg-8 box-right">
					<div class="join-description">
						<div class="join-description-content">
							<?php
								$jobs_name = 'jobs_name_'.Yii::$app->language;
		                      	$jobs_content = 'jobs_content_'.Yii::$app->language;
		                      	echo $Jobs[0][$jobs_content];
		                    ?>
						</div>
						<hr>
						<div style="text-align: center;">
							<a href="<?= Url::base(true).'/'.Yii::t('app', 'menu_join_us').'/'.$Jobs[0][$jobs_name].'-'.$Jobs[0]['jobs_id']?>" class="btn-join"><?= Yii::t('app', 'btn_apply_job');?></a>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<img src="<?=Url::base(true);?>/img/banner_footer_jobs.jpg" width="100%">
				</div>
			</div>
		</div>
	</div>

</main>