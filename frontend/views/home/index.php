<?php
use yii\helpers\Html;
use yii\helpers\Url;
use frontend\assets\HomeAsset;
HomeAsset::register($this);
?>
<main class="main">
    <?= $this->render('_about'); ?>
    <?= $this->render('_service'); ?>
    <?= $this->render('_product'); ?>
    <?= $this->render('_project'); ?>
    <?= $this->render('_parallax'); ?>
</main><!-- End .main -->
