<?php
/**
 * Created by PhpStorm.
 * User: apple
 * Date: 17/12/23
 * Time: 下午2:50
 */
//class customException extends Exception
//{
//    public function errorMessage()
//    {
//        //error message
//        $errorMsg = 'Error on line '.$this->getLine().' in '.$this->getFile()
//            .': <b>'.$this->getMessage().'</b> is not a valid E-Mail address';
//        return $errorMsg;
//    }
//}
//
//$email = "someone@example...com";
//
//try
//{
//    //check if
//    if(filter_var($email, FILTER_VALIDATE_EMAIL) === FALSE)
//    {
//        //throw exception if email is not valid
//        throw new customException($email);
//    }
//}
//
//catch (customException $e)
//{
//    //display custom message
//    echo $e->errorMessage();
//}


class customException extends Exception
{
    public function errorMessage()
    {
        //error message
        $errorMsg = $this->getMessage().' is not a valid E-Mail address.';
        return $errorMsg;
    }
}

$email = "someone@example.com";

try
{
    try
    {
        //check for "example" in mail address
        if(strpos($email, "example") !== FALSE)
        {
            //throw exception if email is not valid
            throw new Exception($email);
        }
    }
    catch(Exception $e)
    {
        //re-throw exception
        throw new customException($email);
    }
}

catch (customException $e)
{
    //display custom message
    echo $e->errorMessage();
}