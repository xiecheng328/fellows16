<?php
/**
 * Created by PhpStorm.
 * User: apple
 * Date: 17/12/23
 * Time: 下午2:40
 */
function customError($errno, $errstr)
{
    echo "<b>Error:</b> [$errno] $errstr<br />";
    echo "Ending Script";
    die();
}

set_error_handler("customError");

//echo $aa;
$aa = 1;
if($aa >0){
    trigger_error('变量不能大于1');
}

