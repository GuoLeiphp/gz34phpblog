<?php

//1.接收表单中的数据
$username = $_POST['username'];
$password = $_POST['password'];
//2.判断账号是否正确
$account = file_get_contents('./data/account'); //读取账号

//根据行转成数组
$account = explode("\n",$account);


//循环每个账号
foreach($account as $v)
{
    //拼出账号的格式
    $tmp = $username.' '.md5($password);
    //如果账号相同代表成功
    if($tmp == $v)
    {   
        
        
        
        //把用户名保存到 session 中
        $_SESSION['name'] = $username;
        //提示信息
        message('登陆成功!','index.php');
    }

}
exit;
message('登录或者密码错误!','index.php?a=login');


    