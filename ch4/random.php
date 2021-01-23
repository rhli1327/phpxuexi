<!--生成随机数-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lucky Numbers</title>
</head>
<body>
<?php
    $n1 = rand(1,99);
    $n2 = rand(1,99);
    $n3 = rand(1,99);

    print "
    <p>
    Your lucky numbers are:<br/>
    $n1<br/>
    $n2<br/>
    $n3
    </p>
    ";
?>    
</body>
</html>