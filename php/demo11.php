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

$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = test_input($_POST["name"]);
    $email = test_input($_POST["email"]);
    $website = test_input($_POST["website"]);
    $comment = test_input($_POST["comment"]);
    $gender = test_input($_POST["gender"]);

    echo $name;
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
<form action="server.php" method="post">
    <p>* 必填字段</p>
    <p>
        姓名：<input type="text" id="username" name="username"> *
    </p>
    <p>
        电邮：<input type="text" id="email" name="email"> *
    </p>
    <p>
        网址：<input type="text" id="url" name="url">
    </p>
    <p>
        评论：<textarea id="comment" cols="30" rows="10" name="comment"></textarea>
    </p>
    <p>
        性别：<input type="radio" name="sex" value="男">男 <input type="radio" name="sex" value="女">女
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
