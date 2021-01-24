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

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$posting = nl2br($_POST['posting']);

$name = $first_name . ' ' . $last_name;

$html_post = nl2br(htmlentities($_POST['posting']));
$strip_post = nl2br(strip_tags($_POST['posting']));
//两个处理php字符串变量中的HTML标签的函数
//防止出现格式错误及XSS攻击
//还有htmlspecialchars()可以用 处理特定的HTML标签
print "<div>Thank you, $name, for your posting:
    <p>Original: $posting</p></div>
    <p>Entity: $html_post</p>
    <p>Stripped: $strip_post</p>
    ";

?>
    
</body>
</html>