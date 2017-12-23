<?php
/**
 * Created by PhpStorm.
 * User: apple
 * Date: 17/12/23
 * Time: 下午1:57
 */
session_start();

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php

    if(isset($_SESSION['user'])){
        echo '你好:'.$_SESSION['user']['name'];
    }else{
        echo '<a href="http://localhost/fellows16/login.php">请登录</a>';
    }

    ?>

</body>
</html>
