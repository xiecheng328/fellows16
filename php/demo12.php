<?php
/**
 * Created by PhpStorm.
 * User: apple
 * Date: 17/12/23
 * Time: 上午9:40
 */
//    if(isset($_POST['name'])){
//        echo $_POST['name'];
//    }
$nameerr = $emailerr = "";
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = test_input($_POST["name"]);
    if(empty($name)){
        $nameerr='用户名不能空';
    }
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
        $nameerr = "只允许字母和空格！";
    }

    $email = test_input($_POST["email"]);
    if(empty($email)){
        $emailerr='邮箱不能空';
    }
    $website = test_input($_POST["website"]);
    $comment = test_input($_POST["comment"]);
    $gender = test_input($_POST["gender"]);

}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>

</head>
<body>
<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
    <p>* 必填字段</p>
    <p>
        姓名：<input type="text" id="username" name="name"> *
        <span><?php echo $nameerr?></span>
    </p>
    <p>
        电邮：<input type="text" id="email" name="email"> *
    </p>
    <p>
        网址：<input type="text" id="url" name="website">
    </p>
    <p>
        评论：<textarea id="comment" cols="30" rows="10" name="comment"></textarea>
    </p>
    <p>
        性别：<input type="radio" name="gender" value="男">男 <input type="radio" name="gender" value="女">女
    </p>
    <p>
        爱好：<input type="checkbox" name="hobby[]" value="sing">唱歌 <input type="checkbox" name="hobby[]" value="dance">跳舞
    </p>
    <p>
        <input type="submit" value="提交">
    </p>
</form>
</body>
</html>
