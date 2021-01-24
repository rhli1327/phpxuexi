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
$posting = $_POST['posting'];

$name = $first_name . ' ' . $last_name;

print "<div>Thank you, $name, for your posting:
    <p>$posting</p></div>";

?>
    
</body>
</html>