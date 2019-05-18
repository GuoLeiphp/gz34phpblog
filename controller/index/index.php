<?php

//1.读取 data/arts 目录中所有文件的列表
$data = scandir('./data/arts');

//2.删除前两个特殊文件(.和..)
unset($data[0]);
unset($data[1]);

//值传递和引用传递

//3.循环每个文章,取出文章前100个字符
foreach($data as &$v)
{
    //4.读取出一个文件中的内容
    $fp = fopen('./data/arts/'.$v,'r');
    

    $v = [
        'title' => $v,
        'content' => fread($fp, 100),
    ];
    fclose($fp);
}



//加载首页
template('index');