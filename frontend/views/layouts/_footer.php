<?php
use yii\helpers\Url;
use frontend\widgets\ProductFooter;
?>
<footer class="footer footer-2">
    <div class="footer-middle" style="padding: 30px 0px;">
        <div class="container">
            <div class="row">
                <div class="col-sm-2 col-lg-3">
                    <div style="padding: 30px; text-align: center;">
                        <img src="<?=Url::base(true);?>/img/logo.png" width="150" style="display: inline;">
                    </div>
                </div><!-- End .col-sm-3 col-lg-2 -->
                <style type="text/css">
                    .footer-menu-list ul li{
                        padding: 3px;
                    }
                    .footer-menu-list ul li a{
                        border-bottom: 1px solid #dedede;
                    }
                    .footer-menu-list ul li a:after{
                        content: "→";
                    }
                </style>
                <div class="col-sm-12 col-lg-6">
                    <div class="footer-menu-list">
                        <ul>
                            <li><a href="<?=Url::base(true);?>/<?= Yii::t('app', 'menu_about');?>"><?= Yii::t('app', 'menu_about');?></a></li>
                            <li><a href="<?=Url::base(true);?>/<?= Yii::t('app', 'menu_precast');?>"><?= Yii::t('app', 'menu_precast');?></a></li>
                            <li><a href="<?=Url::base(true);?>/<?= Yii::t('app', 'menu_concrete');?>"><?= Yii::t('app', 'menu_concrete');?></a></li>
                            <li><a href="<?=Url::base(true);?>/<?= Yii::t('app', 'menu_join_us');?>"><?= Yii::t('app', 'menu_join_us');?></a></li>
                            <li><a href="<?=Url::base(true);?>/<?= Yii::t('app', 'menu_news');?>"><?= Yii::t('app', 'menu_news');?></a></li>
                            <li><a href="<?=Url::base(true);?>/<?= Yii::t('app', 'menu_contact_us');?>"><?= Yii::t('app', 'menu_contact_us');?></a></li>
                        </ul>
                    </div>
                </div>
                <style type="text/css">
                    #search {
                        padding-left: 35px;
                        background: #e92336;
                        color: #fff;
                        font-size: 18px;
                    }
                    #search-label {
                        position: relative;
                    }
                    #search-label:before {
                        color: #fff;
                        content:"\f002";
                        font-family: FontAwesome;
                        position: absolute;
                        top: 5px;
                        left: 10px;
                        font-size: 20px;
                    }
                    #search::-webkit-input-placeholder { /* Edge */
                      color: #fff;
                      text-decoration: underline;
                    }
                    #search:-ms-input-placeholder { /* Internet Explorer */
                      color: #fff;
                      text-decoration: underline;
                    }
                    #search::placeholder {
                      color: #fff;
                      text-decoration: underline;
                    }
                    #search:focus{
                        outline:0px !important;
                        -webkit-appearance:none;
                        box-shadow: none !important;
                        outline-style: none;
                        border-color: transparent;
                    }
                </style>
                <div class="col-sm-12 col-lg-3">
                    <div style="float: right; text-align: right;">
                        <ul>
                            <li><a href="#" style="padding: 4px 8px;border: 2px solid #444444;border-radius: 50% 50%;margin: auto 2px;"><i class="fa fa-facebook-official" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                    <div style="float: right;">
                        <form>
                            <label id="search-label">
                                <input type="text" id="search" class="form-control" placeholder="<?= Yii::t('app', 'btn_search');?>" />
                            </label>
                        </form>
                    </div>
                    <div style="float: right;">
                        <table>
                            <tr>
                                <td><span style=" padding: 5px 15px;border: 2px solid #444444;border-radius: 50% 50%;margin: auto 10px;font-size: 26px;"><i class="fa fa-phone" aria-hidden="true"></i></span></td>
                                <td>
                                    <p style="font-size: 16px;font-weight: 100;line-height: 7px;letter-spacing: 5px;"><?=Yii::$app->translated->get(71);?></p>
                                    <p style="font-size: 26px;"><?=Yii::$app->translated->get(72);?></p>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div style="clear: both;"></div>
                </div>
            </div><!-- End .row -->
        </div><!-- End .container -->
    </div><!-- End .footer-middle -->

    <div class="footer-bottom">
        <div class="container">
            <p class="footer-copyright">Copyright © 2020 - <?=date('Y')?> SC CONCRETE ALL RIGHTS RESERVED.</p><!-- End .footer-copyright -->
        </div><!-- End .container -->
    </div><!-- End .footer-bottom -->
</footer><!-- End .footer -->