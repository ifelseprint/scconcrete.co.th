<?php
use yii\helpers\Html;
use yii\helpers\Url;
use frontend\assets\ProductAsset;
ProductAsset::register($this);
?>
<main class="main">
	<div class="product-detail-posts">
    	<div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                        <tr>
                            <td class="bg" width="40%" align="center" >
                                <div class="product-title">
                                    <?=$product['product_name_'.Yii::$app->language];?>
                                </div>
                            </td>
                            <td>
                                <img src="<?=Url::base(true);?>/uploads/<?=$product['product_image_path'];?>/<?=$product['product_image'];?>" width="100%">
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
    	</div>
        <div class="product-detail-container">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="product-detail">
                            <?=$product['productDetails'][0]['product_detail_content_'.Yii::$app->language];?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</main>