<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <style type="text/css" media="screen">
    .error { color:red; }
    .red { color:red;}
    .blue {color:blue;}
    .green {color:green;}
    .yellow {color: yellow;}
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

//检查密码是否相等
if ($_POST['password'] != $_POST['confirm'])
{
    print '<p class = "error"> Your confirmed password doesn\'t match the original password.</p>';
    $okay = false;    
}

//验证出生年
/*if (is_numeric($_POST['year']))
{
    $age = 2021 - $_POST['year'];
}
else
{
    print '<p class = "error">Please enter the year you were born as
    four digits</p>';
    $okay = false;
}

//检查出生年是否合法
if ($_POST['year'] > 2021)
{
    print '<p class = "error">Either you entered you birth year wrong or you come from the future!</p>';
    $okay = false;
}*/

//验证年
if (is_numeric($_POST['year']) AND (strlen($_POST['year']) == 4))
{
    //检查出生年是否在2021前
    if ($_POST['year'] < 2021)
    {
        $age = 2021 -$_POST['year'];
    }
    else
    {
        print '<p class = "error">Either you entered you birth year wrong or you come from the future!</p>';
        $okay = false;
    }
}
else
{
    print '<p class = "error">Please select the year you were born.</p>';
    $okay = false;
}

//检查用户是否选中条款
if(!isset($_POST['terms']) AND ($_POST['terms'] == 'Yes'))
{
    print '<p class = "error">You Need to accept the terms.</p>';
    $okay=false;
}

//检查颜色
switch ($_POST['color'])
{
    case 'red':
        $color_type = '<i class = "red">primary</i>';
        break;
    case 'yellow':
        $color_type = '<i class = "yellow">prymary</i>';
        break;
    case 'green':
        $color_type = '<i class = "green">secondary</i>';
        break;
    case 'blue':
        $color_type = '<i class = "blue">primary</i>';
        break;
    default:
        print '<p class = "error">Please select your favorite color.</p>';
        $okay = FALSE;
        break;
}

if ($okay)
{
    $year = $_POST['year'];
    $day = $_POST['day'];
    $month = $_POST['month'];
    $birthday = $month . '/'.$day.'/'.$year;
    print '<p>You have been successfully registered.</p>';
    print "<p>You will turn $age this year.</p>";
    print "<p>Your favorite color is a $color_type color.</p>";
    print "<p>Your birthday is $birthday</p>";
}


?>
</body>
</html>