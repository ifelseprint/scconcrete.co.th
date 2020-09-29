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
                        <li class="">
                            <a href="">หน้าแรก</a>
                        </li>
                        <li class="">
                            <a href="">รู้จักเรา</a>
                        </li>
                        <li class="">
                            <a href="">คอนกรีตอัดแรงสำเร็จรูป</a>
                        </li>
                        <li class="">
                            <a href="">คอนกรีตผสมเสร็จ</a>
                        </li>
                        <li class="">
                            <a href="">ผลงานที่ผ่านมา</a>
                        </li>
                        <li class="">
                            <a href="">กิจกรรมและข่าวสาร</a>
                        </li>
                        <li class="">
                            <a href="">ร่วมงานกับเรา</a>
                        </li>
                        <li class="">
                            <a href="">ติดต่อเรา</a>
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