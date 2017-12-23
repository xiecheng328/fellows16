<?php
/**
 * Created by PhpStorm.
 * User: apple
 * Date: 17/12/23
 * Time: 上午9:23
 */

//$cars=array('a'=>"Volvo",0=>'ccc',2=>'dddd','b'=>"BMW","SAAB");
//var_dump($cars);

$age=array("Bill"=>"35","Steve"=>"37","Peter"=>"43");

foreach($age as $key=>$x_value) {
    echo "Value=" . $x_value.",key=".$key;
    echo "<br>";
}