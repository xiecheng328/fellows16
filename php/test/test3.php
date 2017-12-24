<?php
/**
 * Created by PhpStorm.
 * User: apple
 * Date: 17/12/24
 * Time: 上午11:23
 */

    $arr = array();
    while (count($arr) < 5){
        array_push($arr,mt_rand(0,9));
        $arr = array_unique($arr);
    }
//explode()
   echo implode(' ',$arr);
