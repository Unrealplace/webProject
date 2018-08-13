<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>

<style>
    #box{
        width: 500px;
        margin: 50px auto;
        background: red;
    }
    p{
        background: blue;
    }
</style>

<body>

    <?php
    $fileName = "names.txt";
//    读取文件
    $myfile = fopen($fileName,"r") or die("unable to open file!");
    $fileContent = fread($myfile,filesize($fileName));
//    字符串解析到数组中
    $fileArray = explode("\n",$fileContent);
    $allData = array();

    foreach ($fileArray as $item){
        if (!$item) continue;
        $cols = explode("|",$item);
        $allData[] = $cols;
    }
    fclose($myfile);
    ?>

    <table id="tb">
        <thead id="head">
        <tr>
            <th>编号</th>
            <th>姓名</th>
            <th>年龄</th>
            <th>邮箱</th>
            <th>网址</th>
        </tr>
        </thead>
        <tbody id="body">
          <?php foreach ($allData as $lines):?>
            <tr>
                <?php foreach ($lines as $col): ?>
<!--                    判断是不是网址-->
                <?php if (strpos($col,'http://') !== false):?>
                <td><a href="<?php echo $col?>"><?php echo strtolower($col)?></a></td>
                <?php else:?>
                <td><?php echo $col?></td>
                <?php endif?>
                <?php endforeach ?>
            </tr>
          <?php endforeach ?>
        </tbody>
    </table>


</body>

</html>