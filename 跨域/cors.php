<?php
/**
 * Created by PhpStorm.
 * User: liyang
 * Date: 2018/9/1
 * Time: 下午9:17
 */

//设置通配所有的源的请求
header('Access-Control-Allow-Origin: *');
header('Content-Type:application/json');

echo  json_encode(array('hello' => 'world'));
