<?php
// free-php 入口文件

// composer 自动加载脚本
require_once __DIR__ . "/../vendor/autoload.php";

// 路由配置
switch ($_SERVER['REQUEST_URI']) {
    case "":
    case "/":
        (new c\web\Index())->index();
        break;
    case "/home/index":
        (new c\api\Index())->auto();
        break;
    case "/menu":
        (new c\api\Index())->menu();
        break;
    default:// 404 的路由
        http_response_code(404);
        return;
}