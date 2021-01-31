<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\Pjax;
use frontend\assets\JoinAsset;
JoinAsset::register($this);
?>
<?php Pjax::begin(['id' => 'pjax-grid','timeout' => 0, 'enablePushState' => false]); ?>
<div id="loadingOverlay" class="loader-overlay" style="display: none;">
    <div class="loader-content loader-center">
        <div id="loading" class="loader"></div>
    </div>
</div>
<main class="main">
	<div class="join-posts">
		<div class="container">

			<div class="row">
				<div class="col-xs-12">
          <?= $this->render('_banner', ['Banner'=> $Banner]); ?>
          
          <div class="row" style="padding: 35px 0px;">
            <div class="col-xs-12 col-lg-6" style="text-align: left;">
              <img src="<?=Url::base(true);?>/img/join_us.png" width="300" style="display: inline-block;">
            </div>
            <div class="col-xs-12 col-lg-6" style="text-align: right;">
              <img src="<?=Url::base(true);?>/img/join_us2.png" width="300" style="display: inline-block;">
            </div>
          </div>
					<?php if($Action=='view'){ ?>
					<h4>
						<?php
						$jobs_name = 'jobs_name_'.Yii::$app->language;
						echo Yii::t('app', 'txt_apply_jobs').' : '.$Jobs->$jobs_name;
						?>
					</h4>
					<div style="padding: 30px 0px;">

						<?= $this->render('_form', ['JobsForm'=> $JobsForm,'JobView'=>$JobView]); ?>
						
					</div>

					<?php }else{ ?>
					<div>
						<div>Thank you for your submission</div>
						<div>Send data successfully.</div>
					</div>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>

</main>
<?php
$script = <<<JS
  $("document").ready(function(){
    Web.Join.initializeInPjax();
  });
JS;
$this->registerJs($script);
?>
<?php Pjax::end(); ?>