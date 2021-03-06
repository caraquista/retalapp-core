<?php

// you need to change this for your timezone
// date_default_timezone_set("America/Bogota"); 

// change the following paths if necessary
$yii=dirname(__FILE__).'/yii/framework/yii.php';
$config=dirname(__FILE__).'/config/main.php';

// specify how many levels of call stack should be shown in each log message
defined('YII_TRACE_LEVEL') or define('YII_TRACE_LEVEL',3);

require_once($yii);

function r($module=null) {
	
	if($module===null)
		return Yii::app();
	
	if(stripos($module, '#')!==false)
		return Yii::app()->getComponent(substr($module, 1));

	return Yii::app()->getModule($module);
}

Yii::createWebApplication($config)->run();
