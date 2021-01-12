<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class PortfolioAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/portfolio.css',
    ];
    public $js = [
        'js/Portfolio.js'
    ];
    public $depends = [
    	'frontend\assets\AppAsset'
    ];
}
