<?php

//接收
$title = $_GET['title'];

//先读取出这篇文章的内容
$content = file_get_contents('./data/arts/'.$title);
//显示一个修改的表单,并且把要修改的表题和内容填写进表单
view('post-edit');
