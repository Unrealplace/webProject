<?php
/**
 * Created by PhpStorm.
 * User: liyang
 * Date: 2018/7/23
 * Time: 下午6:22
 */


//设置 PHP 常量
//
//如需设置常量，请使用 define() 函数 - 它使用三个参数：
//
//    首个参数定义常量的名称
//    第二个参数定义常量的值
//    可选的第三个参数规定常量名是否对大小写不敏感。默认是 false。



//常量是单个值的标识符（名称）。在脚本中无法改变该值。
//
//有效的常量名以字符或下划线开头（常量名称前面没有 $ 符号）。
//
//注释：与变量不同，常量贯穿整个脚本是自动全局的。

define("PI_NAME","nice to meet you",true);

echo PI_NAME;

define("NUM_TEN",100);

echo NUM_TEN;




