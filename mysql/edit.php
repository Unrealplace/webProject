<?php
define('HOST','127.0.0.1');
define('USER','root');
define('PASSWORD','luolamei8191111');
define('DB','liyang_db1');



function edit($user){
    // 验证非空
    if (empty($_POST['name'])) {
        $GLOBALS['error_message'] = '请输入姓名';
        return;
    }

    if (!(isset($_POST['gender']) && $_POST['gender'] !== '-1')) {
        $GLOBALS['error_message'] = '请选择性别';
        return;
    }

    if (empty($_POST['birthday'])) {
        $GLOBALS['error_message'] = '请输入日期';
        return;
    }

    // 取值
    $user['name'] = $_POST['name'];
    $user['gender'] = $_POST['gender'];
    $user['birthday'] = $_POST['birthday'];

    // 接收文件并验证
    if (isset($_FILES['avatar']) && $_FILES['avatar']['error'] === UPLOAD_ERR_OK) {
        /**
         * 获取扩展名
         */
        $ext = pathinfo($_FILES['avatar']['name'], PATHINFO_EXTENSION);
        // => jpg
        $target = 'uploads/avatar-' . uniqid() . '.' . $ext;

        if (!move_uploaded_file($_FILES['avatar']['tmp_name'], $target)) {
            $GLOBALS['error_message'] = '上传头像失败';
            return;
        }
        $user['avatar'] = $target;
    }

    // 1. 建立连接
    $conn = mysqli_connect(HOST, USER, PASSWORD, DB);

    if (!$conn) {
        $GLOBALS['error_message'] = '连接数据库失败';
        return;
    }
    mysqli_set_charset($conn,'UTF8');
    $u_name = $user['name'];
    $u_gender = $user['gender'];
    $u_birthday =$user['birthday'];
    $u_avatar = $user['avatar'];
    $id = $user['id'];
    // 2. 开始查询
    $query = mysqli_query($conn, "update `users` set `name` ='$u_name',`gender` = '$u_gender',`birthday`='$u_birthday',`avatar` = '$u_avatar' WHERE `id` = '$id'");

    if (!$query) {
        $GLOBALS['error_message'] = '查询过程失败';
        return;
    }

    $affected_rows = mysqli_affected_rows($conn);

    if ($affected_rows !== 1) {
        $GLOBALS['error_message'] = '添加数据失败';
        return;
    }
    mysqli_close($conn);

    // 响应
    header('Location: index.php');
}



/**
 * 提交添加用户
 */
if ($_SERVER['REQUEST_METHOD'] === 'POST') {


    if (empty($_GET['id'])){
        exit('没有用户ID');
    }
    $id = $_GET['id'];

    $link = mysqli_connect(HOST,USER,PASSWORD,DB);
    if (!$link){
        echo '链接失败';
        return;
    }
    mysqli_set_charset($link,'UTF8');
    $query = mysqli_query($link,'select * from users where  id = '.$id.' limit 1;');
    if (!$query){
        echo '查询数据失败';
        mysqli_close($link);
        return;
    }
    $user = mysqli_fetch_assoc($query);
    edit($user);
    mysqli_close($query);




}elseif ($_SERVER['REQUEST_METHOD'] === 'GET'){

    /**
     * 进入编辑模式
     */
    if (empty($_GET['id'])){
        exit('必须传入指定参数');
    }
    $id = $_GET['id'];

    $link = mysqli_connect(HOST,USER,PASSWORD,DB);
    if (!$link){
        echo '链接失败';
        return;
    }
    mysqli_set_charset($link,'UTF8');
    $query = mysqli_query($link,'select * from users where  id = '.$id.' limit 1;');
    if (!$query){
        echo '查询数据失败';
        mysqli_close($link);
        return;
    }
    $user = mysqli_fetch_assoc($query);

    if (!$user){
        exit('找不到用户');
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>李杨管理系统</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<nav class="navbar navbar-expand navbar-dark bg-dark fixed-top">
    <a class="navbar-brand" href="#">李杨管理系统</a>
    <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
            <a class="nav-link" href="index.php">用户管理</a>
        </li>
    </ul>
</nav>
<main class="container">
    <h1 class="heading">编辑<?php echo $user['name']?></h1>
    <?php if (isset($error_message)): ?>
        <div class="alert alert-warning">
            <?php echo $error_message; ?>
        </div>
    <?php endif ?>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>?id=<?php echo $user['id'];?>" method="post" enctype="multipart/form-data" autocomplete="off">
        <div class="form-group">
            <label for="avatar">头像</label>
            <input type="file" class="form-control" id="avatar" name="avatar">
        </div>
        <div class="form-group">
            <label for="name">姓名</label>
            <input type="text" class="form-control" id="name" name="name" value="<?php echo $user['name']?>">
        </div>
        <div class="form-group">
            <label for="gender">性别</label>
            <select class="form-control" id="gender" name="gender">
                <option value="-1" >请选择性别</option>
                <option value="0" <?php echo $user['gender'] === '0'?' selected':''?>>男</option>
                <option value="1" <?php echo $user['gender'] === '1'?' selected':''?>>女</option>
            </select>
        </div>
        <div class="form-group">
            <label for="birthday">生日</label>
            <input type="date" class="form-control" id="birthday" name="birthday" value="<?php echo $user['birthday']?>">
        </div>
        <button class="btn btn-primary">保存</button>
    </form>
</main>
</body>
</html>
