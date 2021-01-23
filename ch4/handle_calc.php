<!--从calculator.html获取数值并计算总成本和月付款数额-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Cost Calculator</title>
    <style type="text/css" media="screen">
        .number { font-weight: bold;}
    </style>
</head>
<body>
<?php
    //从calculator.html的post获取数值
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];
    $discount = $_POST['discount'];
    $tax = $_POST['tax'];
    $shipping = $_POST['shipping'];
    $payments = $_POST['payments'];

    //计算总额
    $total = $price * $quantity;
    //$total = $total + $shipping;
    //$total = $total - $discount;
    //使用简略运算赋值语句
    $total += $shipping;
    $total -= $discount;

    //定义税率
    $taxrate = $tax/100;
    //$taxrate = $taxrate + 1;
    //使用自增
    $taxrate++;

    //纳入税率后的总成本
    $total = $total * $taxrate;

    //计算月付款数额
    $monthly = $total / $payments;
    //可以直接用括号一次性计算完，不过我认为这样会可读性较差
    //例如：$total = ($price * $quantity + $shipping - $discount) * (($tax/100)+1)

    //格式化数值，保留2位小数
    $total = number_format($total,2);
    $monthly = number_format($monthly,2);

    //打印结果
    print "<p>You have selected to purchase:<br/>
    <span class =\"number\">$quantity </span> widget(s) at <br/>
    $<span class = \"number\">$price</span>
    price each plus a <br/>
    $<span class = \"number\">$shipping </span>shiping cost and a <br/>
    <span class = \"number\">$tax</span> percent tax rate.<br/>
    After your $<span class = \"number\"> $discount </span> discount,the total cost is 
    $<span class=\"number\"> $total</span>.<br/>
    Divided over <span class=\"number\"> $payments </span> monthly payments,
    that would be $<span class=\"number\"> $monthly</span>each.</p>
    ";

?>
</body>
</html>