<?php
//提示消息的函数

function message($mess,$url)
{
    //在地址前加上入口文件
    $url = IN . '?a=' . $url;
    echo <<<JS
<script>
alert('{$mess}');
location.href='{$url}'
</script>
JS;
exit;
}

//判断是否登录
function check_login()
{
    //判断 $_SESSION中有没有一个叫做 name 的键
    if( !isset($_SESSION['name']))
    {
        message('必须先登录!', 'login');
        exit;
    }
}

//后台加载一个静态页
function view($name)
{
    include('view/admin/'.$name.'.html');
}

//前台加载一个静态页
function template($name)
{
    include('view/index/'.$name.'.html');
}