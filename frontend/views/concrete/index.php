<?php
use yii\helpers\Html;
use yii\helpers\Url;
use frontend\assets\ConcreteAsset;
ConcreteAsset::register($this);
?>
<main class="main">
	<div class="concrete-post">
        
        <div class="concrete-block">
        	<div class="container concrete-block-bg">
        		<div class="concrete-block-bg-text"><img src="<?=Url::base(true);?>/img/concrete_text_v.jpg" width="50"></div>
        		<div class="row">
        			<div class="col-md-12">
        				<img src="<?=Url::base(true);?>/img/product_title.jpg" width="300">
        			</div>
        		</div>
        		<div class="row">
        			<div class="col-md-8 col-md-offset-2">
        				<div class="concrete-block-title">
        					<h3><?=Yii::$app->translated->get(51);?></h3>
        					<h4><?=Yii::$app->translated->get(52);?></h4>
        				</div>
        				<div class="concrete-block-content">
        					<?=Yii::$app->translated->get(53);?>
        				</div>
        				<div class="concrete-block-banner">
        					<img src="<?=Url::base(true);?>/img/concrete_banner.jpg" width="100%">
        				</div>
        				<div class="concrete-block-banner-footer">
        					<?=Yii::$app->translated->get(54);?>
        				</div>
        			</div>
        		</div>
        	</div>
        </div>
       	<div class="concrete-block-list">
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
                        <a href="<?=Url::base(true);?>/<?= Yii::t('app', 'menu_concrete');?>/<?=$value[$product_name];?>-<?=$value['product_id'];?>">
    	    				<div class="concrete-box">
    		    				<div class="concrete-image">
    		    					<img src="<?=Url::base(true);?>/uploads/<?=$value['product_image_path'];?>/<?=$value['product_image'];?>" width="100%">
    							</div>
    		    				<div class="concrete-title">
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
