<?php
//提示消息的函数

function message($mess,$url)
{
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
        message('必须先登录!', 'index.php?a=login');
        exit;
    }
}

//加载一个静态页
function view($name)
{
    include('view/admin/'.$name.'.html');
}