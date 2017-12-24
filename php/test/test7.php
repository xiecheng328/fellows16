<?php
/**
 * Created by PhpStorm.
 * User: apple
 * Date: 17/12/24
 * Time: 上午11:38
 */
$arr = array('2012 Macbook Pro',
    '2009 iMac',
    '2011 Macbook Air',
    '2007 iPad1');
    if(isset($_GET['sort'])){
        sort($arr);
    }
    if(isset($_GET['rsort'])){
        rsort($arr);
    }

?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<form action="test7.php" method="get">


        <table>
            <tr>
                <td>顺序</td>
                <td>名称</td>
            </tr>
            <?php for($i=0;$i<count($arr);$i++){?>
                <tr>
                    <td><?php echo $i+1?></td>
                    <td><?php echo $arr[$i]?></td>
                </tr>
            <?php }?>
        </table>

    <input type="submit" name="sort" value="升序">
    <input type="submit" name="rsort" value="降序">
</form>
</body>
</html>
