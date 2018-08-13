<?php
/**
 * Created by PhpStorm.
 * User: liyang
 * Date: 2018/8/11
 * Time: 上午8:44
 */

function add_music(){

    if (empty($_POST['title'])){
        $GLOBALS['error_msg'] = '请输入标题';
        return;
    }
    if (empty($_POST['singer'])){
        $GLOBALS['error_msg'] = '请输入歌手';
        return;
    }
    //判断文件
    if (!isset($_FILES['icon'])){
      $GLOBALS['error_msg'] = '请输入icon';
      return;
    }

    if (!isset($_FILES['music'])){
        $GLOBALS['error_msg'] = '请输入音乐';
        return;
    }

    $icon = $_FILES['icon'];
    $music = $_FILES['music'];
    if ($icon['error'] != UPLOAD_ERR_OK){
        $GLOBALS['error_msg'] = '请选择icon';
        return;
    }

    if ($music['error'] != UPLOAD_ERR_OK){
        $GLOBALS['error_msg'] = '请选择音乐文件';
        return;
    }
//    //校验文件大小
//    if ($icon['size']> 5*1024*1024){
//        $GLOBALS['error_msg'] = 'icon文件过大';
//        return;
//    }
//    //校验类型
//    $allow_types = array(
//      'audio/mp3',
//      'audio/wma',
//        'image/*'
//    );
//    if (!in_array($icon['type'],$allow_types)){
//        $GLOBALS['error_msg'] = '上传类型不支持';
//        return;
//    }



    $icon_target = './uploads/icons/'.uniqid().'-'.$icon['name'];
    $music_target = './uploads/musics/'.uniqid().'-'.$music['name'];
    if (!move_uploaded_file($icon['tmp_name'],$icon_target)){
        $GLOBALS['error_msg'] = '上传icon 失败';
        return;
    }
    if (!move_uploaded_file($music['tmp_name'],$music_target)){
        $GLOBALS['error_msg'] = '上传音乐 失败';
        return;
    }

    $title = $_POST['title'];
    $singer = $_POST['singer'];
    $icon_source = $icon_target;
    $music_source = $music_target;

    $origin = json_decode(file_get_contents('storage.json'),true);

    array_push($origin,array(
        'id'=>uniqid(),
        'title'=>$title,
        'singer'=>$singer,
        'icon'=>$icon_source,
        'music'=>$music_source,));

    var_dump($origin);

    $json = json_encode($origin);

    file_put_contents('storage.json',$json);

    echo $GLOBALS['error_msg'];


}
if ($_SERVER['REQUEST_METHOD'] === 'POST'){

    add_music();

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php if (isset($GLOBALS['error_msg'])):?>
    <div style="color: red"><?php echo $GLOBALS['error_msg']?></div>
 <?php endif;?>

<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" enctype="multipart/form-data">
    标题<br>
    <input type="text" name="title"><br>
    歌手<br>
    <input type="text" name="singer"><br>
    icon<br>
    <input type="file" name="icon"><br>
    音乐<br>
    <input type="file" name="music"><br>
    <button type="submit">保存</button>

</form>

</body>
</html>
