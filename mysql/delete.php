<?php
/**
 * Created by PhpStorm.
 * User: liyang
 * Date: 2018/8/17
 * Time: 下午5:42
 */
define('HOST','127.0.0.1');
define('USER','root');
define('PASSWORD','luolamei8191111');
define('DB','liyang_db1');
if (empty($_GET['id'])){
    echo '删除失败';
}
$id = $_GET['id'];

$link = mysqli_connect(HOST,USER,PASSWORD,DB);
if (!$link){
    echo '链接失败';
    return;
}
mysqli_set_charset($link,'UTF8');
$query = mysqli_query($link,'delete from users where  id = '.$id.';');
if (!$query){
    echo '查询数据失败';
    mysqli_close($link);
    return;
}

$affect_rows = mysqli_affected_rows($link);

if ($affect_rows > 0){
    echo '删除成功';
}
mysqli_close($link);

header('Location:index.php');

?>