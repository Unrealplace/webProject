<?php
/**
 * Created by PhpStorm.
 * User: liyang
 * Date: 2018/7/29
 * Time: 下午5:17
 */



function postBack(){

    $username = null;
    $password = null;
    global $errorMessage;
    if (!empty($_POST['username'])){
        $username = $_POST['username'];
    }else{
        $errorMessage = '请输入用户名';
        return;
    }
    if (!empty($_POST['password'])){
        $password = $_POST['password'];
    }else{
        $errorMessage = '请输入密码';
        return;

    }

    if ($username && $password){
        //保存到本地
        if (file_put_contents('users.txt',$username.'|'.$password,FILE_APPEND)){
            echo 'write success';
        }else{
            echo 'write failue';
        }
    }
}

if ($_SERVER['REQUEST_METHOD'] ==='POST'){

    postBack();

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <style>
        span{
            color: red;
        }
    </style>
</head>

<body>
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">

    用户名：<input type="text" name="username"><br><span><?php echo $errorMessage==='请输入用户名'?$errorMessage:''?></span><br>
    密  码：<input type="text" name="password"><br><span><?php echo $errorMessage==='请输入密码'?$errorMessage:'' ?></span><br>
    <button type="submit">注册</button>

</form>

</body>
</html>


