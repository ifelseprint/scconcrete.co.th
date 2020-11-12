<?php
use yii\web\Request;
$baseUrl = str_replace('/frontend/web', '', (new Request)->getBaseUrl());

$params = array_merge(
    require __DIR__ . '/../../common/config/params.php',
    require __DIR__ . '/../../common/config/params-local.php',
    require __DIR__ . '/params.php',
    require __DIR__ . '/params-local.php'
);

return [
    'id' => 'app-frontend',
    'language' => 'th',
    'bootstrap' => ['log'],
    'basePath' => dirname(__DIR__),
    'controllerNamespace' => 'frontend\controllers',
    'homeUrl'=> $baseUrl,
    'components' => [
        'request' => [
            'csrfParam' => '_csrf-frontend',
            'baseUrl' => $baseUrl,
        ],
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
            'identityCookie' => ['name' => '_identity-frontend', 'httpOnly' => true],
        ],
        'session' => [
            // this is the name of the session cookie used for login on the frontend
            'name' => 'advanced-frontend',
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'errorHandler' => [
            'errorAction' => 'error/404',
        ],
        
        'urlManager' => [
            'class' => 'codemix\localeurls\UrlManager',
            'languages' => ['th','en'],
            'enableLanguageDetection' => false,
            'enableDefaultLanguageUrlCode' => true,
            'enableLanguagePersistence' => true,
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
                '' => 'home/index',
                // about
                '<about_index:(about us|รู้จักเรา)>' => 'about/index',
                // precast
                '<precast_index:(precast|คอนกรีตอัดแรงสำเร็จรูป)>' => 'precast/index',
                '<precast_view:(precast|คอนกรีตอัดแรงสำเร็จรูป)>/<slug>-<slug_id>' => 'precast/view',
                // concrete
                '<concrete_index:(concrete|คอนกรีตผสมเสร็จ)>' => 'concrete/index',
                '<concrete_view:(concrete|คอนกรีตผสมเสร็จ)>/<slug>-<slug_id>' => 'concrete/view',
                // portfolio
                '<portfolio_index:(portfolio|ผลงานที่ผ่านมา)>' => 'portfolio/index',
                '<portfolio_index:(portfolio|ผลงานที่ผ่านมา)>/<portfolio_property:(property|อสังหาริมทรัพท์)>' => 'portfolio/property',
                '<portfolio_index:(portfolio|ผลงานที่ผ่านมา)>/<portfolio_project:(project|โครงการ)>' => 'portfolio/project',
                // news
                '<news_index:(news|กิจกรรมและข่าวสาร)>' => 'news/index',
                '<news_view:(news|กิจกรรมและข่าวสาร)>/<slug>-<slug_id>' => 'news/view',
                // join
                '<join_index:(join us|ร่วมงานกับเรา)>' => 'join/index',
                '<join_view:(join us|ร่วมงานกับเรา)>/<slug>-<slug_id>' => 'join/view',
                // contact
                '<contact_index:(contact us|ติดต่อเรา)>' => 'contact/index',
                '<contact_index:(contact)>/submit' => 'contact/index',
                // default
                // '<controller:\w+>/<id:\d+>' => '<controller>/view',
                // '<controller:\w+>/<action:\w+>/<id:\d+>' => '<controller>/<action>',
                // '<controller:\w+>/<action:\w+>' => '<controller>/<action>',
       
                // error
                'error/404' => 'error/404',
            ],
        ],
        
    ],
    'params' => $params,
];
