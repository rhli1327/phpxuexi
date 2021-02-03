<?php
// 注册页面
define('TITLE','Register');
include('header.html');

print '<h2>Registration Form</h2>
    <p>注册</p>';
//添加CSS
print '<style type="text/css" media="screen">
    .error {color:red;}
</style>';

//检查表单是否已提交
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $problem = FALSE;
    if (empty($_POST['first_name'])){
        $problem = TRUE;
        print '<p class = "error">Please enter your first name </p>';
    }
    if (empty($_POST['last_name'])){
        $problem = TRUE;
        print '<p class = "error">Please enter your last name </p>';
    }
    if (empty($_POST['email'])){
        $problem = TRUE;
        print '<p class = "error">Please enter your email </p>';
    }
    if (empty($_POST['password1'])){
        $problem = TRUE;
        print '<p class = "error">Please enter your password </p>';
    }
    if ($_POST['password1']!=$_POST['password2']){
        $problem = TRUE;
        print '<p class = "error">Your confirmed password did not match you password </p>';
    }
    if(!$problem){
        // 判断是否有错误发生
        print '<p>注册成功 </p>';

        //清除数组中的元素
        $_POST = array();
    }else{
        
    //表单未填完整
    print '<p class = "error">没填完</p>';
}
}
?>

<form action="register.php" method="POST">
<!-- 此处为了使用粘性表格给value赋值，之前为了格式好看我使用了若干缩进和空格，结果在网页上会直接体现出来。。。就只有用这种形式 -->
    <p>First Name: <input type="text" name="first_name" size="20"
    value="<?php if(isset($_POST['first_name'])){print htmlspecialchars($_POST['first_name']);}?>"></p>

    <p>Last Name: <input type="text" name="last_name" size="20"
    value="<?php if(isset($_POST['last_name'])){print htmlspecialchars($_POST['last_name']);}?>"></p>

    <p>Email Address: <input type="text" name="email" size="20"
    value="<?php if(isset($_POST['email'])){print htmlspecialchars($_POST['email']);}?>"></p>

    <p>Password: <input type="password" name="password1" size="20"
    value="<?php if(isset($_POST['password1'])){print htmlspecialchars($_POST['password1']);}?>"></p>

    <p>Confirm Password: <input type="password" name="password2" size="20"
    value="<?php 
        if(isset($_POST['password2']))
            {print htmlspecialchars($_POST['password2']);}   
        ?>"></p>

    <p><input type="submit" name="submit" value="Register"></p>
</form>
<?php
    include('footer.html');
?>