<?php
/**
 * Created by PhpStorm.
 * User: apple
 * Date: 17/12/23
 * Time: 下午1:39
 */

//setcookie('username','zhangsan',time() - 20);


//echo $_COOKIE['username'];

session_start();

//$_SESSION['views']=1;
if(isset($_SESSION['views'])){
    $_SESSION['views']++;
}
echo $_SESSION['views'];

include 'index.php';