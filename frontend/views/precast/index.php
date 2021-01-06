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
        					<h3>SC PRECAST</h3>
        					<h4>คอนกรีตอัดแรงสำเร็จรูป</h4>
        				</div>
        				<div class="precast-block-content">
        					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent dignissim mauris sit amet quam cursus egestas. Duis porta augue sapien, id ultrices lectus rhoncus et. Nulla pellentesque libero vitae magna pharetra vulputate. Nullam urna leo, pharetra ut lacinia quis, consectetur quis est. In vehicula, dui id semper commodo, mi orci rhoncus velit, nec pretium mauris orci vel velit. Nunc gravida euismod scelerisque. Suspendisse tellus sem, eleifend id finibus sit amet, elementum ac quam. Praesent gravida metus est, vitae feugiat erat dignissim molestie. Vivamus sit amet arcu nec odio maximus placerat in ac metus. Donec vulputate purus non pharetra ultricies. Integer vestibulum tellus condimentum nunc iaculis, id dignissim ligula convallis. Morbi rhoncus semper justo eu aliquet. Donec in nunc lectus. Sed mollis massa at enim rutrum, vel dapibus tortor interdum.
        				</div>
        				<div class="precast-block-banner">
        					<img src="<?=Url::base(true);?>/img/precast_banner.jpg" width="100%">
        				</div>
        				<div class="precast-block-banner-footer">
        					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent dignissim mauris sit amet quam cursus egestas. Duis porta augue sapien, id ultrices lectus rhoncus et. Nulla pellentesque libero vitae magna pharetra vulputate. Nullam urna leo, pharetra ut lacinia quis, consectetur quis est. In vehicula, dui id semper commodo, mi orci rhoncus velit, nec pretium mauris orci vel velit. Nunc gravida euismod scelerisque. Suspendisse tellus sem,
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
	    				<div class="precast-box">
		    				<div class="precast-image">
		    					<img src="<?=Url::base(true);?>/uploads/<?=$value['product_image_path'];?>/<?=$value['product_image'];?>" width="100%">
							</div>
		    				<div class="precast-title">
		    					<?=$value['product_name_th'];?>
		    				</div>
		    			</div>
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
