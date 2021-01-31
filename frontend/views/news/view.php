<?php
use yii\helpers\Html;
use yii\helpers\Url;
use frontend\assets\NewsAsset;
NewsAsset::register($this);
?>

<?php
$news_name = 'news_name_'.Yii::$app->language;
$news_detail_content = 'news_detail_content_'.Yii::$app->language;
?>
<main class="main">
	<div class="news-posts">
        <div class="news-block-view">
        	<div class="container">
	    		<div class="row">
	    			<div class="col-lg-12">
	    				<div class="news-view-header">
	    					<div class="news-view-title"><h3><?=$News->$news_name?></h3></div>
	        			</div>
	        		</div>
	        	</div>

	        	<div class="row ">
	    			<div class="col-md-12">
	    				<div class="news-view-content">
    						<?=$News['newsDetails'][0]->$news_detail_content?>
	    				</div>
	    			</div>
	    		</div>

	        </div>
        </div>
    </div>
</main>