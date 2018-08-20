<?php
/**
 * Created by PhpStorm.
 * User: liyang
 * Date: 2018/8/20
 * Time: 下午9:02
 */

if (empty($_COOKIE['num']) || empty($_GET['num'])){
    $num = rand(0,100);
    setcookie('num',$num);
    setcookie('count',10);
}else{

    $count = $_COOKIE['count'] - 1;
    setcookie('count',$count);
    if ($count==0){
        echo '次数用完了';
        setcookie('num');
        setcookie('count');
    }else{
        $resutl=(int)$_GET['num'] - (int)$_COOKIE['num'];

        if ($resutl == 0){
            echo '猜对了';
            setcookie('num','');
        }elseif ($resutl>0){
            echo '大了';
        }else{
            echo '小了';
        }
    }

}



?>

<!DOCUTYPE>
<html lang="en">
<head>
    <meta charset="UTF-8">
</head>

<body>
<h1>猜数字游戏</h1>
<p>我已经生成了一个0-100 的数字，你现在来猜猜看吧</p>
<form action="index.php" method="get">
    <input type="number" min="0" max="100" name="num" placeholder="随便猜">
    <button type="submit">试一试</button>
</form>
</body>
</html>
