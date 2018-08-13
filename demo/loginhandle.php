<?php
/**
 * Created by PhpStorm.
 * User: liyang
 * Date: 2018/7/26
 * Time: 下午4:46
 */

$usrName = null;
$passWord = null;
if (isset($_GET['userName']) && isset($_GET['passWord'])){
    $usrName = $_GET['userName'];
    $passWord = $_GET['passWord'];

}

echo $usrName." ".$passWord;
