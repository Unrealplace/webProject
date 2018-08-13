<?php
/**
 * Created by PhpStorm.
 * User: liyang
 * Date: 2018/7/23
 * Time: 下午3:28
 */
//正常的数组
$arr = array('hello',44,['htto']);
//相当于字典来用
$arr2 = array(
    "a"=>'aaaa',
    "b"=>"bbbb",
    "c"=>"cccc",);

$dic = [
    "name"=>"liyang",
    "age"=>1111,
    "wife"=>"people",
];

if (isset($dic['hello'])){
    echo "hello";
}

$dic2 = [
    "nnn"=>"gggg",
    "nnng"=>"gihag",
];
if (empty($dic2['kkk'])){
    echo "empty";
}else {
    echo "hello";
}




//var_dump(array_keys($arr));
//var_dump(array_keys($arr2));

//var_dump($arr);
//var_dump($arr2);
//
//echo phpinfo();

