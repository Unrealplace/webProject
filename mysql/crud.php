<?php
/**
 * Created by PhpStorm.
 * User: liyang
 * Date: 2018/8/17
 * Time: 下午1:55
 */

define('HOST','127.0.0.1');
define('USER','root');
define('PASSWORD','12345678');
define('DB','liyang_db');


$link = @mysqli_connect(HOST,USER,PASSWORD,DB);

if (!$link){
    echo '数据库链接失败';
    return;
}






?>