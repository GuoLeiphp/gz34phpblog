<?php
//1.项目初始化

include('functions.php');



//入口文件


//加载数据库

//2.加载相应的功能模块

define('IN','index.php');

//接收请求,默认是 index 页面
//isset : 判断一个变量是否存在,有可能出现值为空的情况,所以这里应该使用 empty 更适合
$action = !empty($_GET['a']) ? $_GET['a'] : 'index';

//加载要请求的文件

include('./controller/index/'.$action . '.php');