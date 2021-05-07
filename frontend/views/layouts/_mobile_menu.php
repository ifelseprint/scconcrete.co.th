<?php
use yii\helpers\Url;
use frontend\widgets\ProductMenu;
?>
<!-- Mobile Menu -->
<div class="mobile-menu-overlay"></div><!-- End .mobil-menu-overlay -->

<div class="mobile-menu-container mobile-menu-light">
    <div class="mobile-menu-wrapper">
        <span class="mobile-menu-close"><i class="icon-close"></i></span>
        
        <form action="#" method="get" class="mobile-search">
            <label for="mobile-search" class="sr-only">Search</label>
            <input type="search" class="form-control" name="mobile-search" id="mobile-search" placeholder="<?= Yii::t('app', 'btn_search');?>" required>
            <button class="btn btn-primary" type="submit"><i class="icon-search"></i></button>
        </form>

        <ul class="nav nav-pills-mobile nav-border-anim" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="mobile-menu-link" data-toggle="tab" href="#mobile-menu-tab" role="tab" aria-controls="mobile-menu-tab" aria-selected="true"><?=Yii::$app->translated->get(15);?></a>
            </li>
        </ul>

        <div class="tab-content">
            <div class="tab-pane show active" id="mobile-menu-tab" role="tabpanel" aria-labelledby="mobile-menu-link">
                <nav class="mobile-nav">
                    <ul class="mobile-menu">
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
                                <!-- <li class="<?php echo (Yii::$app->controller->action->id=="property" ? 'active' : '' )?>">
                                    <a href="<?=Url::base(true);?>/<?= Yii::t('app', 'menu_portfolio');?>/<?= Yii::t('app', 'menu_property');?>"><?= Yii::t('app', 'menu_property');?></a>
                                </li> -->
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
                    </ul>
                </nav><!-- End .mobile-nav -->
            </div><!-- .End .tab-pane -->

        </div><!-- End .tab-content -->

        <div class="social-icons">
            <a href="#" class="social-icon" target="_blank" title="Facebook"><i class="icon-facebook-f"></i></a>
            <a href="#" class="social-icon" target="_blank" title="Twitter"><i class="icon-twitter"></i></a>
            <a href="#" class="social-icon" target="_blank" title="Instagram"><i class="icon-instagram"></i></a>
            <a href="#" class="social-icon" target="_blank" title="Youtube"><i class="icon-youtube"></i></a>
        </div><!-- End .social-icons -->
    </div><!-- End .mobile-menu-wrapper -->
</div><!-- End .mobile-menu-container -->