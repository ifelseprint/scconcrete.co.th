<?php
use yii\helpers\Html;
use yii\helpers\Url;
use frontend\assets\PrecastAsset;
PrecastAsset::register($this);
?>
<main class="main">
	<div class="precast-post">
        
        <div class="precast-block">
        	<div class="container precast-block-bg">
        		<div class="precast-block-bg-text"><img src="<?=Url::base(true);?>/img/precast_text_v.jpg" width="50"></div>
        		<div class="row">
        			<div class="col-md-12">
        				<img src="<?=Url::base(true);?>/img/product_title.jpg" width="300">
        			</div>
        		</div>
        		<div class="row">
        			<div class="col-md-8 col-md-offset-2">
        				<div class="precast-block-title">
        					<h3><?=Yii::$app->translated->get(55);?></h3>
        					<h4><?=Yii::$app->translated->get(56);?></h4>
        				</div>
        				<div class="precast-block-content">
        					<?=Yii::$app->translated->get(57)?>
        				</div>
        				<div class="precast-block-banner">
        					<img src="<?=Url::base(true);?>/img/precast_banner.jpg" width="100%">
        				</div>
        				<div class="precast-block-banner-footer">
        					<?=Yii::$app->translated->get(58);?>
        				</div>
        			</div>
        		</div>
        	</div>
        </div>
       	<div class="precast-block-list">
       		<div class="container">
	        	<?php
				//Columns must be a factor of 12 (1,2,3,4,6,12)
				$numOfCols = 3;
				$rowCount = 0;
				$bootstrapColWidth = 12 / $numOfCols;
				?>
				<div class="row">
				<?php
				foreach ($product as $value){
					$product_name = 'product_name_'.Yii::$app->language;
				?> 
			        <div class="col-md-4">
                        <a href="<?=Url::base(true);?>/<?= Yii::t('app', 'menu_precast');?>/<?=$value[$product_name];?>-<?=$value['product_id'];?>">
    	    				<div class="precast-box">
    		    				<div class="precast-image">
    		    					<img src="<?=Url::base(true);?>/uploads/<?=$value['product_image_path'];?>/<?=$value['product_image'];?>" width="100%">
    							</div>
    		    				<div class="precast-title">
    		    					<?=$value['product_name_th'];?>
    		    				</div>
    		    			</div>
                        </a>
			        </div>
				<?php
				    $rowCount++;
				    if($rowCount % $numOfCols == 0) echo '</div><div class="row">';
				}
				?>
				</div>

	        	
	        </div>
        </div>
    </div>
</main>
