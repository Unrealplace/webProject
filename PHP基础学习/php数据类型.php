<?php
/**
 * Created by PhpStorm.
 * User: liyang
 * Date: 2018/7/23
 * Time: 下午5:56
 */



//字符串、整数、浮点数、逻辑、数组、对象、NULL。

$str = 'hello world nice to meet you';

$num = 135;

$floatNum = 13.55;

$x = true;

$y = false;

/**
 * 包括索引数组和关联数组
 * 关联数组类似与字典建值对
 *
 */
$arr = array(1,2,5,666,999);
$arr2 = array('222',555,"ggg");
$arr3 = array(
    "name"=>"liynag",
    "age"=>456,
);

$arr4 = [1,44,55,66];
$arr5 = [
    "name"=>"oliver",
    "age"=>555644,
];


/**
 * 遍历数组
 */

for ($i = 0 ;$i < count($arr); $i++){
    echo $arr[$i];
    echo "<br>";
}


/**
 * 对象
 */

class Dog{
    var $name;

    /**
     * Dog constructor.
     * @param $name
     */
    public function __construct($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

//    /**
//     * @return 重写tostring方法
//     *
//     */
//    public function __toString()
//    {
//
//        return $this->name;
//
//    }


}

$dog = new Dog("papapapa");
echo $dog->name;

