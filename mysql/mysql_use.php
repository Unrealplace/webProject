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
   $succed =  @mysqli_connect('127.0.0.1','root','luolamei8191111','user_db');

   if ($succed){
       echo '链接数据库成功';
   }else {
       echo '链接数据库失败';
   }

   $result = mysqli_query($succed,'SELECT * FROM user_tab;');

   $data = mysqli_fetch_assoc($result);

   var_dump($data);

   mysqli_close($succed);

?>