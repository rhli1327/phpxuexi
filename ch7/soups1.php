<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>No Soups for you</title>
</head>
<body>
    <h1>Mmm..soups</h1>
<?php
    $soups = array(
        'Monday' => 'Clam Chowder',
        'Tuesday' => 'White Chicken Chili',
        'Wednesday' => 'Vegetarian',
    );

    $count1 = count($soups);
    print "<p>The soups array originally had $count1 elements.</p>";

    //添加元素
    $soups['Thursday'] = 'Chicken Noodle';
    $soups['Friday'] = 'Tomato';
    $soups['Saturday'] = 'Cream of Broccoli';

    $count2 = count($soups);
    print "<p>After adding 3 more soups, the array now has $count2 ekenebts.</p>";
    
    // print "<p>$soups</p>";
    print_r ($soups);
?>
</body>
</html>