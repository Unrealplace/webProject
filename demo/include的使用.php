<?php
/**
 * Created by PhpStorm.
 * User: liyang
 * Date: 2018/7/24
 * Time: 下午5:47
 */

//include 的方式载入文件，如果文件不存在不会产生一个致命的错误，只会报一个警告，还会继续向下执行
include "helloxxxx.php";

echo "helloworld";

//require 的方式载入文件，如果文件不存在会报错，不会继续向下执行了
require "hgoang.php";

echo "nice to meet you";

