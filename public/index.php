<?php

require __DIR__ . "/../vendor/autoload.php";  // 引入 Composer 自动加载器
require __DIR__ . "/../vendor/yiisoft/yii2/Yii.php";  // 引入 Yii 自动加载器

$config = [
    'id' => 'yii2-mini',
    'basePath' => dirname(__DIR__),
];

(new yii\web\Application($config))->run();
