<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quotes</title>
</head>
<body>
    <?php
    $first_name = 'Donald';
    $last_name = "Trump";

    $name1 = '$first_name $last_name';
    $name2 = "$first_name $last_name";

    print "<h1>双引号</h1><p>name1 is $name1 <br/>
    name2 is $name2</p>";

    print '<h1>单引号</h1><p>name1 is $name1 <br/>
    name2 is $name2</p>';
    ?>
</body>
</html>