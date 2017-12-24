<?php
/**
 * Created by PhpStorm.
 * User: apple
 * Date: 17/12/24
 * Time: 上午11:53
 */
    session_start();
    $users = array();
    if(isset($_SESSION['users'])){
        $users = $_SESSION['users'];
    }
    if(isset($_POST['sub'])){
        $name = $_POST['name'];
        $age = $_POST['age'];
        $arr = array();
        $arr['name'] = $name;
        $arr['age'] = $age;

        $users[] = $arr;
        $_SESSION['users'] = $users;
    }

    if(isset($_POST['del'])){
        array_pop($users);
        $_SESSION['users'] = $users;
    }

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<form action="test9.php" method="post">
    姓名<input type="text" name="name"/><br/>
    年龄<input type="text" name="age"/><br/>
    <input type="submit" name='sub'>
</form>

<form action="test9.php" method="post">
    <table>
        <tr>
            <td>顺序</td>
            <td>名称</td>
            <td>年龄</td>
        </tr>
        <?php for($i=0;$i<count($users);$i++){?>
            <tr>
                <td><?php echo $i+1?></td>
                <td><?php echo $users[$i]['name']?></td>
                <td><?php echo $users[$i]['age']?></td>
            </tr>
        <?php }?>
    </table>

    <input type="submit" name="del" value="删除">
</form>

</body>
</html>
