<?php
/**
 * Created by PhpStorm.
 * User: liyang
 * Date: 2018/7/24
 * Time: 下午4:00
 */

/**
 * 设置当前时区
 */
date_default_timezone_set('PRC');

/**
 * 获取当前时间戳
 */
echo time();

echo "<br>";

/**
 * 通过时间戳获取当前时间
 */

echo date('Y-M-d',time());
echo "<br>";
/**
 * 字符串转时间戳
 */

$timestamp = strtotime("2015-8-11 3:45:33");

echo date('Y:M:d<b\r>H:i:s',$timestamp);


