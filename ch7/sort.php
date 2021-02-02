<!DOCTYPE html>
<!-- 数组排序函数 -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Little Gredebook</title>
</head>
<body>
<?php
    $grades = array(
        'Richard' => 95,
        'Sherwood' => 82,
        'Toni' => 98,
        'Franz' => 87,
        'Melissa' => 75,
        'Roddy' => 85
    );

    //以原始顺序打印数组
    print '<p>本来数组的样子:';
    foreach ($grades as $name => $grade)
    {
        print "<p>$name's grade is $grade.</p>";
    }
    print '</p>';
    // 倒序数组并打印
    // arsort()将数组反向排序并保持键值关系
    arsort($grades);
    print '<p>现在数组的样子:';
    foreach ($grades as $name => $grade)
    {
        print "<p>$name's grade is $grade.</p>";
    }
    print '</p>';
?>
</body>
</html>