

<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>hello</title>
</head>
<style>
    #ad{
        height: 200px;
        background: red;
    }
    #ad a{
        float: right;
    }

</style>

<body>

<?php if (empty($_COOKIE['hide_ad']) || $_COOKIE['hide_ad']!=='1'):?>

<div id="ad">
    <a href="hidead.php" id="notShow">不再显示</a>
</div>

<?php endif;?>

</body>
</html>