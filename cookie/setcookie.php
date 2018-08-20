<?php
/**
 * Created by PhpStorm.
 * User: liyang
 * Date: 2018/8/19
 * Time: 上午9:00
 */

/**
 * 设置响应头中的cookie
 * header 设置相同的建时候，会出现覆盖的现象
 */
//header('Set-Cookie: name=oliver');


/**
 * 服务端向客户端发送的响应cookie
 */
setcookie('name','liyang');
setcookie('age','44');
setcookie('gender','boy');

/**
 * 设置过期时间
 * 1.传递第三个参数就设置过期时间
 * 2.不传递就是设置 会话级别的cookie （关闭浏览器就自动删除）
 */

setcookie('papapa','hahaha',time()+1*60*60);


/**
 * cookie 的访问权限
 *
 * path ：/ 表示网站根目录下的所以的文件都可以访问
 *
 */
setcookie('kkk','jjjjj',time()+1*60*60,'../mysql');

/**
 * domain 设置cookie 的作用域名范围
 */


/**
 * httponly 防止js 操作设置的cookie
 */

setcookie('ooo','ffffff',time()+60*50,'','',false,true);