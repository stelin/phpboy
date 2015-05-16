<?php
require_once dirname(__FILE__).'/protected/config/model.php';
$yii=dirname(__FILE__).'/../lib/yii.php';
$config=dirname(__FILE__).'/protected/config/'.APPLICATION_ENV.'/main.php';

require_once($yii);
$app = Yii::createWebApplication($config);
$app->run();
