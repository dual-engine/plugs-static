<?php

use think\admin\service\RuntimeService;

//支持跨域
header("Access-Control-Allow-Origin:*");
header('Access-Control-Allow-Methods:GET,POST,OPTIONS');
header('Access-Control-Expose-Headers:Content-Disposition');
header('Content-Type:text/event-stream');
header('Access-Control-Allow-Headers:x-requested-with,Authorization,Content-Type,Token,Api-Token,Jwt-Token');

// 加载基础文件
require __DIR__ . '/../vendor/autoload.php';

// WEB应用初始化
RuntimeService::doWebsiteInit();