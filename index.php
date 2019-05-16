<?php
//1.项目初始化
session_start();
include('functions.php');



//入口文件

//1.项目初始化
//SESSION
//加载数据库

//2.加载相应的功能模块

//接收请求,默认是 main 页面

$action = isset($_GET['a']) ? $_GET['a'] : 'main';

//3.登录权限验证
$noNeedLogin = ['login','dologin']; //不需要验证登录
if(!in_array($action,$noNeedLogin))
{
    check_login();
}

include('./controller/'.$action . '.php');