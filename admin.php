<?php
//1.项目初始化
session_start();
include('functions.php');



//入口文件


//加载数据库

//2.加载相应的功能模块

define('IN','admin.php');

//接收请求,默认是 main 页面
//isset : 判断一个变量是否存在,有可能出现值为空的情况,所以这里应该使用 empty 更适合
$action = !empty($_GET['a']) ? $_GET['a'] : 'main';

//3.登录权限验证
$noNeedLogin = ['login','dologin']; //不需要验证登录
if(!in_array($action,$noNeedLogin))
{
    check_login();
}

include('./controller/admin/'.$action . '.php');