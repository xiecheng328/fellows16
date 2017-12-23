<?php
/**
 * Created by PhpStorm.
 * User: apple
 * Date: 17/12/23
 * Time: 下午1:52
 */
session_start();

$name = $_POST['username'];
$pwd = $_POST['pwd'];

if($name=='zhangsan' && $pwd=='123'){
    $user = array('name'=>$name,'pwd'=>$pwd);
    $_SESSION['user'] = $user;
    echo 'aaaa';
//    echo 'success';
}else{
//    echo 'fail';
}