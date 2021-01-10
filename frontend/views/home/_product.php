<?php
use yii\helpers\Url;
// use yii\widgets\Pjax;
?>
<div style="background: #fff;">
    <style type="text/css">
        .service-border{
            padding: 10px;
            border: 3px solid #ed1c24;
        }
        .product-list{
            color: #fff
        }

        .product-list tr.active,.product-list tr:hover{
            background: #fff;
            color: #000;
            cursor: pointer;
        }
        .product-list tr td:first-child{
            width: 130px;
            padding: 5px 0px;
            text-align: center;
        }
        .product-list tr td img{
            display: inline !important;
        }
    </style>

    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-lg-4" style="background: #e10000;padding: 0;">
                <div style="padding-left: 50px; padding-top: 10px;padding-bottom: 10px;">
                    <table class="product-list" border="0" width="100%" cellpadding="7">
                      <?php
                      $i = 1;
                      foreach ($Product as $key => $data) {
                        $active = ($i==1) ? 'active' : '';
                        $product_name = 'product_name_'.Yii::$app->language;
                      ?>
                      <tr class="<?=$active?> row-product" data-target="<?=Yii::$app->language?>/home/product/<?=$data->product_id;?>">
                         <td><img width="80" src="<?=Url::base(true);?>/uploads/<?=$data->product_image_path;?>/<?=$data->product_image;?>"></td>
                         <td><?=$data->$product_name?></td> 
                      </tr>
                      <?php $i++;} ?>
                    </table>
                </div>
            </div>

            <div class="col-xs-12 col-lg-8" style="padding-left: 0px;">
                <div style="position: absolute;top: 0;z-index: 100;background-color: rgba(12,12,12,0.8);margin: 30px 15px;height: 75%;width: 55%; padding: 40px 20px;">
                    <?php
                      $product_name = 'product_name_'.Yii::$app->language;
                      $product_detail = 'product_detail_'.Yii::$app->language;
                    ?>
                    <h4 style="color: #fff !important;" class="product-item-name"><?=$Product[0][$product_name]?></h4>
                    <div style="color: #fff !important;" class="product-item-detail">
                        <?=$Product[0][$product_detail]?>
                    </div>
                    <!-- <button style="background: transparent;border: 1px solid #fff;color: #fff;padding: 7px 20px;position: absolute;bottom: 50px;">เพิ่มเติม &nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-long-arrow-right" aria-hidden="true"></i></button> -->
                </div>
                <img class="product-item-image" src="img/pic-product1.jpg" style="position: relative;">
                 <!-- <img class="product-item-image" src="<?=Url::base(true);?>/uploads/<?=$Product[0]['product_image_path'];?>/<?=$Product[0]['product_image'];?>" style="position: relative;"> -->
            </div>
        </div>
    </div>
</div>
