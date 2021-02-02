<!DOCTYPE html>
<!-- 从list.html接收数据并排序输出 -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sorted out</title>
</head>
<body>
<?php
    // 将接收到的字符串转为数组并排序
    $words_array = explode(' ', $_POST['words']);
    sort ($words_array);

    // 数组转化为字符串并输出 字符串输出较为简单 join()和implode()同义
    $string_words = implode('<br/>', $words_array);
    print "<p>An alphabetized version of your list is: <br/>$string_words</p>";
?>
</body>
</html>