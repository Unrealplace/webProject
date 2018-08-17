<?php
/**
 * Created by PhpStorm.
 * User: liyang
 * Date: 2018/8/16
 * Time: 上午11:35
 */

/**
 * 建立数据库链接
 * 调用函数的时候忽略警告，在函数名前加一个@
 */
   $succed =  @mysqli_connect('127.0.0.1','root','12345678','liyang_db');

   if ($succed){
       echo '链接数据库成功';
   }else {
       echo '链接数据库失败';
   }
/**
 * 防止查询出来的字符是中文出现问号的问题
 */
   mysqli_set_charset($succed,'utf8');
   
   $result = mysqli_query($succed,'SELECT * FROM user;');

   if (!$result){
       echo '查询失败';
       mysqli_close($succed);
       return;
   }

   while ($row = mysqli_fetch_assoc($result)){

       var_dump($row);

   }
/**
 * 释放查询结果集
 */
   mysqli_free_result($result);
/**
 * 炸掉链接桥梁
 */
   mysqli_close($succed);

?>