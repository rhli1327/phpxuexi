<!DOCTYPE html>
<!-- 该php脚本接受到有$_POST['days']的值构成的数组 -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add an Event</title>
</head>
<body>
<?php
    print "<p>You want to add an event called <b>{$_POST['name']}</b>
    which takes place on: <br/>";
// 条件语句检验是否选中选项：
    if(isset($_POST['weekdays']) AND is_array($_POST['weekdays']))
    {
        foreach($_POST['weekdays'] as $day)
        {
            print "$day<br/> \n";
        }
    }
    else
    {
        print 'Please select at least one weekday for this event!';
    }
    print '</p>';
?>
</body>
</html>