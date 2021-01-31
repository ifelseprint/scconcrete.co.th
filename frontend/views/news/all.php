<?php
use yii\helpers\Html;
use yii\helpers\Url;
use frontend\assets\NewsAsset;
NewsAsset::register($this);
?>
<main class="main">
	<div class="news-posts">
    	<div class="container">
    		<div class="row" style="padding: 10px 0px;">
    			<div class="col-lg-12">
    				<div class="title">
                    <?php
                        $news_category_name = 'news_category_name_'.Yii::$app->language;
                        echo $NewsCategory->$news_category_name;
                    ?>
                    </div>
    			</div>
    		</div>

            <?php
            //Columns must be a factor of 12 (1,2,3,4,6,12)
            $numOfCols = 3;
            $rowCount = 0;
            $bootstrapColWidth = 12 / $numOfCols;
            ?>
            <div class="row news-list">
            <?php
            foreach ($News as $value){
                $news_name = 'news_name_'.Yii::$app->language;
            ?>  
                <div class="col-lg-4">
                    <div class="news-list-image">
                        <a href="<?=Url::base(true);?>/<?= Yii::t('app', 'menu_news');?>/<?=$value->$news_name;?>-<?=$value->news_id?>">
                            <img src="<?=Url::base(true);?>/uploads/<?=$value->news_image_path?>/<?=$value->news_image?>" width="100%">
                            <div class="overlay">
                                <div class="text">อ่านเพิ่มเติม</div>
                             </div>
                        </a>
                    </div>
                    <div class="news-list-title"><?=$value->$news_name?></div>
                </div>
            <?php
                $rowCount++;
                if($rowCount % $numOfCols == 0) echo '</div><div class="row news-list">';
            }
            ?>
    		</div>
        </div>

    </div>
</main>