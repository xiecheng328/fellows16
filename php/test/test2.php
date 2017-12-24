<?php
/**
 * Created by PhpStorm.
 * User: apple
 * Date: 17/12/24
 * Time: 上午11:13
 */

    $data = array('2017-5-1'=>'结婚纪念日',
        '2017-6-1'=>'看电影');

    if($_SERVER["REQUEST_METHOD"]=='POST'){
        $d = $_POST['data'];
        if(array_key_exists($d,$data)){
            echo htmlspecialchars("<script>alert('$data[$d]')</script>");
        }else{
            echo "<script>alert('没有备忘录')</script>";
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
    <form action="test2.php" method="post">
        
        输入查询日期
        <input type="text" name="data">
        <input type="submit">
        <input type="reset">
        
    </form>
</body>
</html>
