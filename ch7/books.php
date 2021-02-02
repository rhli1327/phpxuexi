<!DOCTYPE html>
<!-- 多维数组 -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Books and Chapter</title>
</head>
<body>
<h1>My books</h1>
<?php
    $phpvqs = array(
        1 => 'Getting Started with PHP',
        'Variables',
        'HTML Forms and PHP',
        'Using Numbers'
    );

    $phpadv = array(
        1 => 'Advanced PHP Techniques',
        'Developing Web Applications',
        'Advanced Database Concepts',
        'Security Techniques'
    );

    $phpmysql = array(
        1 => 'Introduction to PHP',
        'Programming with PHP',
        'Creating Dynamic Web Sites',
        'Introduction to MySQL'
    );

    // 创建多维数组
    $books = array(
        'PHP VQS' => $phpvqs,
        'PHP Advanced VQP' => $phpadv,
        'PHP and MySQL VQP' => $phpmysql
    );

    print "<p>The third chapter of my first book is <i>{$books['PHP VQS'][3]}</i>.</p>";

    //使用嵌套foreach()对二维数组进行遍历
    foreach($books as $title => $chapters)
    {
        print "<p>";
        print $title;
        foreach($chapters as $number => $chapter)
        {
            print "<br/>Chapter $number is $chapter";
        }
        print '<p>';
    }

    // 使用var_dump()和print_r()查看整个多维数组
    echo '<pre>';
    print_r ($books);
    echo '</pre>';
    print '<br/>';
    var_dump($books);
?>    
</body>
</html>