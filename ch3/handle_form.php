<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Feedback</title>
</head>
<body>
<?php
//该页面从feedback.html接收数据。
//将会接收 title name response comment
    $title = $_POST['title'];
    $name = $_POST['name'];
    $response = $_POST['response'];
    $comments = $_POST['comments'];

    print "<p>Thank you, $title $name, for your comments.</p>
    <p>You stated that you found this example to be '$response' and added:<br/>$comments</p>";
?>
</body>
</html>