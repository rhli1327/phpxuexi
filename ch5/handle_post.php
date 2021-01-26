<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forum Posting</title>
</head>
<body>
<?php
//从posting.html接收5个值
//first_name, last_name, email, posting, submit

//trim()去掉多余的空格 仅去掉开头和结尾的空格
//还有rtrim和ltrim用于分别去掉开头结尾
$first_name = trim($_POST['first_name']);
$last_name = trim($_POST['last_name']);
$posting = trim($_POST['posting']);

$name = $first_name . ' ' . $last_name;


//str_word_count()计算单词数量 
$words = str_word_count($posting);

//将发送的内容截断一部分,允许50个字符
//$posting = substr($posting,0,50);

//将badword 替换为星号
$posting = str_ireplace('badword','*****',$posting);

//$html_post = nl2br(htmlentities($_POST['posting']));
//$strip_post = nl2br(strip_tags($_POST['posting']));
//两个处理php字符串变量中的HTML标签的函数
//防止出现格式错误及XSS攻击
//还有htmlspecialchars()可以用 处理特定的HTML标签
/*print "<div>Thank you, $name, for your posting:
    <p>Original: $posting</p></div>
    <p>Entity: $html_post</p>
    <p>Stripped: $strip_post</p>
    ";*/

//下为urlencode版本,urlencode()函数可以通过url安全地将数据传输到php脚本
print "<div>
Thank you, $name, for your posting:
    <p>$posting..</p>
    <p>($words words)</p>
</div>";

//创建连接另一页面的链接
$name = urldecode($name);
$email = urldecode($_POST['email']);
print "<p>Click <a href=\"thanks.php?
name=$name&email=$email \">here</a> to continue.
</p>";
//传输给thanks.php


?>
    
</body>
</html>