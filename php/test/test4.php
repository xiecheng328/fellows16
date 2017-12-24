<?php
/**
 * Created by PhpStorm.
 * User: apple
 * Date: 17/12/24
 * Time: 上午11:30
 */
    if(isset($_GET['sub'])){
        array_pop($_GET);
//        var_dump();
       echo implode(',',$_GET);
//        list($a,$b,$c) = ['1','2','3'];
//        echo $a;
    }

?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<form action="test4.php">
    <input type="text" name="title">
    <input type="text" name="content">
    <input type="text" name="data">
    <input type="submit" name="sub">
</form>
</body>
</html>
