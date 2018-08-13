<?php
/**
 * Created by PhpStorm.
 * User: liyang
 * Date: 2018/7/24
 * Time: 下午2:10
 */

function sayHello($name){

    if (isset($name)){
        echo "hello ".$name." nice to meet you!";
    }

}

sayHello("liyang");