<?php
/**
 * Created by PhpStorm.
 * User: liyang
 * Date: 2018/7/24
 * Time: 下午5:05
 */


/**
 * 当前脚本中载入一个别的脚本文件
 * 在每一次调用时候都会载入一次
 *
 */
//require "config.php";
//
//echo DB_HOST;


/**
 * 这个是只载入一次
 */
require_once "config.php";
require_once "config.php";

echo DB_HOST;