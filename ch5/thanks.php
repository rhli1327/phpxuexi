<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>?</title>
</head>
<!--接收handle_post的get数组并打印出来-->
<body>
<?php
    $name = $_GET['name'];
    $email = $_GET['email'];

    print "Thank you, $name,
    We will contact you at $email";

?>
</body>
</html>