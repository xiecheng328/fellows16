<!DOCTYPE html>
<html>
<body>

<?php
//phpstrom注册地址：http://idea.iteblog.com/key.php
print "我的第一段 PHP 脚本！";
echo '<br>';
?>

<?php
$x = 5; // 全局作用域

function myTest()
{
    $y = 10; // 局部作用域
    echo "<p>测试函数内部的变量：</p>";
    echo '变量 x 是：' . $x;
    echo "<br>";
    echo "变量 y 是：$y";
}

myTest();

echo "<p>测试函数之外的变量：</p>";
echo "变量 x 是：$x";
echo "<br>";
echo "变量 y 是：$y";
?>

</body>
</html>