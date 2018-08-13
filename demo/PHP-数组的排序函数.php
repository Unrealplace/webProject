<?php
/**
 * Created by PhpStorm.
 * User: liyang
 * Date: 2018/7/24
 * Time: 下午2:24
 */

/**
 *
sort() - 以升序对数组排序
rsort() - 以降序对数组排序
asort() - 根据值，以升序对关联数组进行排序
ksort() - 根据键，以升序对关联数组进行排序
arsort() - 根据值，以降序对关联数组进行排序
krsort() - 根据键，以降序对关联数组进行排序

 */

$arr =  [44,66,11,77777,13] ;
$arr1 = ["liyang","yangyang","oliver","papage"];
sort($arr);
rsort($arr1);

var_dump($arr);
var_dump($arr1);

$arr2 = [
    "name"=>"hello",
    "age"=>566,
    "title"=>"lihaile",
    "ctime"=>191846643
];
ksort($arr2);
var_dump($arr2);
krsort($arr2);
var_dump($arr2);

asort($arr2);
var_dump($arr2);
arsort($arr2);
var_dump($arr2);






