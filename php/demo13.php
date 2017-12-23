<?php
/**
 * Created by PhpStorm.
 * User: apple
 * Date: 17/12/23
 * Time: 上午10:49
 */

    include 'demo14.php';


date_default_timezone_set("Asia/Shanghai");
echo "今天是 " . date("y/m/d") . "<br>";
echo "今天是 " . date("Y.m.d") . "<br>";
echo "今天是 " . date("Y-m-d") . "<br>";
echo "今天是 " . date("l");

echo "现在时间是 " . date("h:i:sa");

$d=mktime(9, 12, 31, 6, 10, 2015);
echo "创建日期是 " . date("Y--m--d h:i:sa", $d)."<br>";

$d=strtotime("10:38pm April 15 2015");

echo "创建日期是 " . date("Y-m-d h:i:sa", $d)."<br>";

$d=strtotime("tomorrow");
echo date("Y-m-d h:i:sa", $d) . "<br>";

$d=strtotime("next Saturday");
echo date("Y-m-d h:i:sa", $d) . "<br>";

$d=strtotime("+3 Months");
echo date("Y-m-d h:i:sa", $d) . "<br>";

$d1=strtotime("December 31");
//echo time();
$d2=ceil(($d1-time())/60/60/24);
echo "距离十二月三十一日还有：" . $d2 ." 天。";
