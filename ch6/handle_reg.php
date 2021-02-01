<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <style type="text/css" media="screen">
    .error { color:red; }
</style>
</head>
<body>
<h1>Registration Results</h1>
<?php
//从register.html接收 emil paassword confirm year terms color submit

//标记变量
$okay = TRUE;

//验证Email地址
if(empty($_POST['email']))
{
    print '<p class = "error">Please enter your email address.</p>';
    $okay = FALSE;
}

//验证密码
if(empty($_POST['password']))
{
    print '<p class = "error">Please enter your password.</p>';
    $okay = false;
}

if ($okay)
{
    print 'You have been successfully registered';
}
?>
</body>
</html>