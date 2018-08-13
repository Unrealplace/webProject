<?php
/**
 * Created by PhpStorm.
 * User: liyang
 * Date: 2018/7/24
 * Time: 下午3:00
 */

if (isset($_POST['name']) && isset($_POST['email'])){

    echo "your nam is ".$_POST['name']." and your email is ".$_POST["email"];

}