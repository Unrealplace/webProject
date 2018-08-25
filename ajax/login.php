<?php
/**
 * Created by PhpStorm.
 * User: liyang
 * Date: 2018/8/25
 * Time: 上午10:37
 */

if (empty($_POST['user']) || empty($_POST['pass'])){
    exit(json_encode(array(
        'code'=>'200',
        'data'=>'用户名或者密码为空',
    ))) ;
}


