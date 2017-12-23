<?php
/**
 * Created by PhpStorm.
 * User: apple
 * Date: 17/12/23
 * Time: 下午2:47
 */

//create function with an exception
function checkNum($number)
{
    if($number>1)
    {
        throw new Exception("Value must be 1 or below");
    }
    return true;
}

//在 "try" 代码块中触发异常
try
{
    checkNum(2);
    //If the exception is thrown, this text will not be shown
    echo 'If you see this, the number is 1 or below';
}

//捕获异常
catch(Exception $e)
{
    echo 'Message: ' .$e->getMessage();
}