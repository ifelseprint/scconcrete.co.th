<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class HomeAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/home.css',
    ];
    public $js = [
        'js/Home.js'
    ];
    public $depends = [
    	'frontend\assets\AppAsset'
    ];
}
