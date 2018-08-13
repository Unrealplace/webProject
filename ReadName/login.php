<?php
//代码放在html 之前方便处理一些逻辑
//要判断请求的方式来判断是否处理下面的数据

if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    $error = null;
    if (empty($_POST['name']) && empty($_POST['password'])){
        $error = "please input your infomations";
    }else{
        var_dump($_POST);
    }

    echo $error;
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<!--提高鲁棒性能，可以动态写-->
<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
    name:<input type="text" name="name">
    pass:<input type="text" name="password"><br>
    <input type="checkbox" name="ball[]">篮球<br>
    <input type="checkbox" name="ball[]">足球<br>
    <input type="checkbox" name="ball[]">乒乓求<br>
    <input type="checkbox" name="ball[]">羽毛球<br >

    <button type="submit">提交</button>
</form>

</body>
</html>