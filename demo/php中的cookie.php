<?php
/**
 * Created by PhpStorm.
 * User: liyang
 * Date: 2018/8/13
 * Time: 下午4:40
 */

setcookie('user_name','liyang',120);



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<?php if (isset($_COOKIE['user_name']) && $_COOKIE['user_name'] === 'liyang'):?>
<p>nice to meet you</p>
<?php else:?>
<p>没有人哦。。。</p>
<?php endif;?>

</body>
</html>
