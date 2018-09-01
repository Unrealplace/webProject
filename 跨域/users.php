<?php
/**
 * Created by PhpStorm.
 * User: liyang
 * Date: 2018/8/24
 * Time: 下午9:52
 */

define('HOST','127.0.0.1');
define('USER','root');
define('PASSWORD','luolamei8191111');
define('DB','liyang_db1');

header('Content-Type:application/javascript');


$id = $_GET['id'];

$func = $_GET['callback'];

$link = mysqli_connect(HOST,USER,PASSWORD,DB);
if (!$link){
    echo '链接失败';
    return;
}
mysqli_set_charset($link,'UTF8');
$query = mysqli_query($link,"select * from users WHERE id > '$id'");
if (!$query){
    echo '查询数据失败';
    mysqli_close($link);
    return;
}

$jsonArr = array();

while ($item = mysqli_fetch_assoc($query)){

    array_push($jsonArr,array(
        'id'=>$item['id'],
        'name'=>$item['name'],
        'avatar'=>$item['avatar']));
}

mysqli_close($link);

$jsonArr = json_encode($jsonArr);

echo "{$func}({$jsonArr})";


