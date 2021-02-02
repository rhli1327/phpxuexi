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

    print "<p>$soups</p>";
    print_r ($soups);
?>
</body>
</html>