<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

// [ 应用入口文件 ]

// 定义应用目录
// echo ROOT_PATH;
// echo'<pre>';
// print_R($_SERVER);exit;
define('APP_PATH', __DIR__ . '/application/');
define('IND_VIEW','./application/template/index/');
define('ADM_VIEW','./application/template/admin/');
// echo ADM_VIEW;
// 加载框架引导文件
require __DIR__ . '/thinkphp/start.php';
