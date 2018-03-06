<?php 

//中文编码
header('Content-type:text/html;charset=utf-8');

//error_reporting(E^ALL);


//开发调试模式

define('APP_DEBUG',True);

//定义资源文件加载位置
define('SITE_URL','http://localhost/');


//代理端后台资源文件
 define('CSS_URL',SITE_URL.'Public/css/');
 define('JS_URL',SITE_URL.'Public/js/');
 define('IMG_URL',SITE_URL.'Public/images/');
 define('PUBLIC_URL',SITE_URL.'Public/');
 
 
 //boss手机号码,发送提现短信给boss
 define('BOSS_PHONE',13247008581);
 
 
 //固定推广链接
 define('PROMOT_URL','https://my.jxjunan.com/manage/home/register/');



//项目入口文件
require './ThinkPHP/ThinkPHP.php';
        
        
        
        