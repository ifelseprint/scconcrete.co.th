<?php
use yii\helpers\Html;
use yii\helpers\Url;

use frontend\assets\AppAsset;
use frontend\assets\HomeAsset;
AppAsset::register($this);
?>

<main class="main">

    <?= $this->render('_about'); ?>
    <?= $this->render('_service'); ?>
    <?= $this->render('_product', ['Product'=> $Product]); ?>
    <?= $this->render('_project', ['Customer'=> $Customer]); ?>
    <?= $this->render('_parallax'); ?>
</main><!-- End .main -->
<?php
$script = <<<JS
  $("document").ready(function(){

    Web.Home.initializeInPjax();
  });
JS;
$this->registerJs($script);
HomeAsset::register($this);
?>