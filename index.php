<?php
/**
 * 入口文件
 */
define('CRAB_AUTH', true);

//错误等级
// error_reporting( E_ERROR & ~E_DEPRECATED & ~E_STRICT);
ini_set('display_errors', '1');
error_reporting(E_ALL);

/*系统目录操作符*/
define('DS', '/');

/*当前应用程序根目录*/
define('APP_PATH', dirname(__FILE__));

/*系统根目录*/
define('ROOT_PATH', APP_PATH);

/*系统核心库目录*/
define('CORE_PATH', ROOT_PATH . DS . 'src');

/*加载系统核心包*/
require CORE_PATH . DS . 'core.php';

//自动加载
//require APP_PATH . '/vendor/autoload.php';

//如果没有composer
 require APP_PATH . '/src/ClassLoader.php';
 Crab\ClassLoader::register();

use Crab\Base;

Base::app()->run();