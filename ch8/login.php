<?php
// 用于登录
define('TITLE', 'Login');
include('header.html');

print '<h2>Login Form</h2>
    <p>登录的人有特权</p>';

// 用检查访问网页的method来检查表单是否已经提交
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    //使用post说明已经提交过
    if ((!empty($_POST['email'])) && (!empty($_POST['password']))) {
        
        if ((strtolower($_POST['email']) == '1@3') && ($_POST['password'] == '1')) {
            
            //将用户重定向到其他页面
            ob_end_clean();//清空缓冲
            header ('Location:welcome.php');
            exit();

        } else {
            //不相等
            print '<p>Wrong</p>';
        }
    } else {
        //未填完整
        print '没填完';
    }
} else {
    // 不是用post说明还没填表格，显示表格
    print '<form action="login.php" method = "post">
        <p>Email: <input type="text" name="email" size="20"></p>
        <p>Password: <input type="password" name="password" size="20"></p>
        <p><input type="submit" name="submit" value="Log In!"></p>
        </form>';
}
include('footer.html');
?>