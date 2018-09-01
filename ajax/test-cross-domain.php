<?php
/**
 * Created by PhpStorm.
 * User: liyang
 * Date: 2018/9/1
 * Time: 下午6:46
 */

$json = time();


$json = json_encode(array('time'=>$json));


echo "callBack({$json})";

