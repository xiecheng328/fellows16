<?php
/**
 * Created by PhpStorm.
 * User: apple
 * Date: 17/12/23
 * Time: 上午11:04
 */

//echo readfile("test.txt");


$myfile = fopen("test.txt", "w");
fwrite($myfile,'fdafdsafdsfdsa');
//echo $myfile;
//echo fread($myfile,filesize("test.txt"));
//echo fgets($myfile);
//echo fgetc($myfile);
//while(!feof($myfile)){
//    echo fgetc($myfile);
//}
fclose($myfile);