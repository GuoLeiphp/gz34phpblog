<?php

// 接收 title参数
$title = $_GET['title'];

//根据标题读取出文章的内容
$content = file_get_contents('./data/arts/' . $title);
//显示详情页
template('detail');