<?php
/**
 * Created by PhpStorm.
 * User: liyang
 * Date: 2018/7/24
 * Time: 下午2:02
 */

$arr = array(1,3,"hello",3);

$arr1 = [
    "name"=>"liyang",
    "age"=>466,
];

/**
 * 遍历索引数组和关联数组
 */

foreach ($arr as $value){
    echo $value;
}

echo "<br>";

foreach ($arr1 as $key=>$item){

    echo $key;
    echo "=>";
    echo $item;

}

/**
 * 关联数组和索引数组的修改
 *
 */

$arr[2] = "nice to meet you hahah ";

$arr1['age'] = 6666666;

var_dump($arr);
var_dump($arr1);

