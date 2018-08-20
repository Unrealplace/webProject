<?php
/**
 * Created by PhpStorm.
 * User: liyang
 * Date: 2018/8/20
 * Time: 下午8:25
 */

setcookie('hide_ad','1',time()+1*60);

header('Location:index.php');
