<?php

    $name = $_GET['uname'];
    /*if($name == 'lisi'){
        echo 'fail';
    }else{
        echo 'success';
    }*/

    $data = array(
        'name' => $name,
        'age' => 23,
        'sex' => '男'
    );

    echo json_encode($data);










    /*$username = $_POST['username'];
    $email = $_POST['email'];
    $url = $_POST['url'];
    $comment = $_POST['comment'];
    $sex = $_POST['sex'];
    $hobby = $_POST['hobby'];

    if($username != ""){
        echo $username;
    }else{
        //echo '请输入用户名.';
        header('location: demo9.php?err=username_required');
    }*/

    /*echo '<br/>';
    echo $email;
    echo '<br/>';
    echo $url;
    echo '<br/>';
    echo $comment;
    echo '<br/>';
    echo $sex;
    echo '<br/>';
    print_r($hobby);
    echo '<br/>';*/