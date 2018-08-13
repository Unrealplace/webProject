<?php
/**
 * Created by PhpStorm.
 * User: liyang
 * Date: 2018/8/2
 * Time: 下午10:40
 */

function upload(){
    global $errorMsg;
    if (!empty($_FILES['avatar'])){
        $errorMsg = "errororororr";
     return;
    }
    /**
     * 得到关联数组
     */
    $avatar = $_FILES['avator_'];

    if ($avatar['error']!= 0){
        $errorMsg = '上传失败';
        return;
    }



    /**
     * 将临时文件移动到网站根目录范围中
     */
    $source = $avatar['tmp_name'];
    $uploadDir = './../uploads/';
    if (!is_dir($uploadDir)){
        mkdir($uploadDir,777);
    }else{
        echo '找到文件了哦';
    }
    $target = $uploadDir.$avatar['name'];
    if (!move_uploaded_file($source,$target)){
        $errorMsg = '移动文件失败';
        return;
    }
    return $target;


}

if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    var_dump($_FILES);
    echo  upload();
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<!--如果一个表单中有文件域，必须将表达的method设置为post enctype 设置为 multipart//form-data-->

<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" enctype="multipart/form-data">

    <input type="file" name="avator ">
    <button type="submit">提交</button>
    <?php if (isset($errorMsg)):?>
        <p style="color: red"><?php echo $errorMsg?></p>
    <?php endif?>

</form>



</body>
</html>