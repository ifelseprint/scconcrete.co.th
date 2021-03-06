<?php
use yii\helpers\Html;
use yii\helpers\Url;
?>
<div class="" style="padding: 40px 0px;background: #fff;">
    <div class="container">

    	<div class="row">
    		<div class="col-sm-6">
    			<iframe width="560" height="315" src="https://www.youtube.com/embed/BLhCrQbMCss" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    		</div>
    		<div class="col-sm-6">
    			<div style="padding: 0px 80px;">
	    			<img src="img/welcome.png" width="300">
	    			<div style="padding: 25px 0px;">
		    			<p><?=Yii::$app->translated->get(4);?></p>
		    			<br>
		    			<p><?=Yii::$app->translated->get(5);?></p>
		    			<br>
		    			<button style="background: #e10000;border: 0;color: #fff;padding: 7px 20px;">LOOK MORE &nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-long-arrow-right" aria-hidden="true"></i></button>
		    		</div>
		    		<div style="padding: 25px 0px;">
		    			<ul style="display: flex;align-items: center;">
		    				<li style="padding: 0px 10px; text-align: center;">
		    					<img src="img/icon-about1.png" width="90%" style="display: inline;">
		    					<p style="padding: 5px 0px; font-size: 12px;"><?= Yii::t('app', 'txt_standardized');?></p>
		    				</li>
		    				<li style="padding: 0px 10px; text-align: center;">
		    					<img src="img/icon-about2.png" width="90%" style="display: inline;">
		    					<p style="padding: 5px 0px; font-size: 12px;"><?= Yii::t('app', 'txt_delivery_on_time');?></p>
		    				</li>
		    				<li style="padding: 0px 10px; text-align: center;">
		    					<img src="img/icon-about3.png" width="90%" style="display: inline;">
		    					<p style="padding: 5px 0px; font-size: 12px;"><?= Yii::t('app', 'txt_precast_concrete');?></p>
		    				</li>
		    				<li style="padding: 0px 10px; text-align: center;">
		    					<img src="img/icon-about4.png" width="90%" style="display: inline;">
		    					<p style="padding: 5px 0px; font-size: 12px;"><?= Yii::t('app', 'txt_concrete_mix');?></p>
		    				</li>
		    			</ul>
		    		</div>
		    	</div>
    		</div>

    	</div>

    </div><!-- End .container -->
</div> <!-- End .promotion-posts -->