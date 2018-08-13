<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<!--不设置action 默认为当前页面，不设置method默认是get-->
<form action="loginhandle.php" method="get">
    用户：<input type="text" name="userName"><br>
    密码：<input type="text" name="passWord"><br>
    <button type="submit">登陆</button>
<!--    这个也可以提交表单-->
    <input type="image" value="login">
</form>

</body>
</html>