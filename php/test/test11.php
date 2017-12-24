<?php
/**
 * Created by PhpStorm.
 * User: apple
 * Date: 17/12/24
 * Time: 下午1:39
 */

    if(isset($_GET['sub'])){
        $arr = array_unique($_GET);
        var_dump($arr);
        if(count($arr) == 4){
            echo "<script>alert('分组成功')</script>";
        }else{
            echo "<script>alert('名字重复')</script>";

        }
    }
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<form action="test11.php">
    <input type="text" name="t1">
    <input type="text" name="t2">
    <input type="text" name="t3">
    <input type="submit" name="sub">
</form>
</body>
</html>
