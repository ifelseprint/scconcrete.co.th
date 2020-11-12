<?php
use yii\helpers\Html;
use yii\helpers\Url;
use frontend\widgets\ProductMenu;
?>
<header class="header header-2 header-intro-clearance">
    <div class="header-middle sticky-header">
        <div class="container">
            <div class="header-left">
                <button class="mobile-menu-toggler">
                    <span class="sr-only">Toggle mobile menu</span>
                    <i class="icon-bars"></i>
                </button>
                
                <a href="<?=Url::base(true);?>" class="logo">
                     <img src ="<?=Url::base(true);?>/img/logo.png" width="150" >
                </a>
            </div><!-- End .header-left -->

            <div class="header-center">
                <nav class="main-nav">
                    <ul class="menu sf-arrows">
                        <li class="<?php echo (Yii::$app->controller->id=="home" ? 'active' : '' )?>">
                            <a href="<?=Url::base(true);?>"><?= Yii::t('app', 'menu_home');?></a>
                        </li>
                        <li class="<?php echo (Yii::$app->controller->id=="about" ? 'active' : '' )?>">
                            <a href="<?=Url::base(true);?>/<?= Yii::t('app', 'menu_about');?>"><?= Yii::t('app', 'menu_about');?></a>
                        </li>
                        <li class="<?php echo (Yii::$app->controller->id=="precast" ? 'active' : '' )?>">
                            <a href="<?=Url::base(true);?>/<?= Yii::t('app', 'menu_precast');?>"><?= Yii::t('app', 'menu_precast');?></a>
                        </li>
                        <li class="<?php echo (Yii::$app->controller->id=="concrete" ? 'active' : '' )?>">
                            <a href="<?=Url::base(true);?>/<?= Yii::t('app', 'menu_concrete');?>"><?= Yii::t('app', 'menu_concrete');?></a>
                        </li>
                        <li class="<?php echo (Yii::$app->controller->id=="portfolio" ? 'active' : '' )?>">
                            <a href="#"><?= Yii::t('app', 'menu_portfolio');?></a>
                            <ul>
                                <li class="<?php echo (Yii::$app->controller->action->id=="property" ? 'active' : '' )?>">
                                    <a href="<?=Url::base(true);?>/<?= Yii::t('app', 'menu_portfolio');?>/<?= Yii::t('app', 'menu_property');?>"><?= Yii::t('app', 'menu_property');?></a>
                                </li>
                                <li class="<?php echo (Yii::$app->controller->action->id=="project" ? 'active' : '' )?>">
                                    <a href="<?=Url::base(true);?>/<?= Yii::t('app', 'menu_portfolio');?>/<?= Yii::t('app', 'menu_project');?>"><?= Yii::t('app', 'menu_project');?></a>
                                </li>
                            </ul>
                        </li>
                        <li class="<?php echo (Yii::$app->controller->id=="news" ? 'active' : '' )?>">
                            <a href="<?=Url::base(true);?>/<?= Yii::t('app', 'menu_news');?>"><?= Yii::t('app', 'menu_news');?></a>
                        </li>
                        <li class="">
                            <a href="<?=Url::base(true);?>/<?= Yii::t('app', 'menu_join_us');?>"><?= Yii::t('app', 'menu_join_us');?></a>
                        </li>
                        <li class="<?php echo (Yii::$app->controller->id=="contact" ? 'active' : '' )?>">
                            <a href="<?=Url::base(true);?>/<?= Yii::t('app', 'menu_contact_us');?>"><?= Yii::t('app', 'menu_contact_us');?></a>
                        </li>
                        <li class="telephone"><a href="#" style="letter-spacing: 2px;">Tel . 038-029888</a></li>
                    </ul><!-- End .menu -->
                </nav><!-- End .main-nav -->
            </div>

            <div class="header-right">
                <div class="language">
                    <div class="header-dropdown" style="float: left;">
                        <a href="#" style="text-transform: uppercase;"><?=(Yii::$app->language=="th" ? 'ไทย' : 'EN' );?></a>
                        <div class="header-menu">
                            <ul>
                                <li><?= Html::a('ไทย', ['/', 'language' => 'th']); ?></li>
                                <li><?= Html::a('EN', ['/', 'language' => 'en']); ?></li>
                            </ul>
                        </div><!-- End .header-menu -->
                    </div>
                    <div class="header-social" style="float: left;">
                        <ul>
                            <li>
                                <a href=""><i class="fa fa-envelope-o" aria-hidden="true"></i></a>
                            </li>
                            <li>
                                <a href=""><i class="fa fa-instagram" aria-hidden="true"></i></a>
                            </li>
                            <li>
                                <a href=""><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div><!-- End .header-right -->
        </div><!-- End .container -->
    </div><!-- End .header-middle -->


</header><!-- End .header -->