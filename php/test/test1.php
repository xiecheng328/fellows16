<?php
/**
 * Created by PhpStorm.
 * User: apple
 * Date: 17/12/24
 * Time: 上午11:03
 */
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $filename = $_FILES['myfile']['name'];
        $arr = explode('.',$filename);
        $length = count($arr);
        echo $arr[$length-1];
    }

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post" enctype="multipart/form-data">
    <input type="file" name="myfile">
    <input type="submit">
</form>
</body>
</html>
