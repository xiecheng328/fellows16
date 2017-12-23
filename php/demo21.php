<?php
/**
 * Created by PhpStorm.
 * User: apple
 * Date: 17/12/23
 * Time: 下午3:45
 */

//$name = $_POST['name'];

//$con = mysql_connect('localhost:3306','root',"") or die('ddddddd');
//

//mysql_select_db("test", $con);

//$sql = "insert into t_user(name) values('$name')";
//$sql = "SELECT * FROM t_user order by id desc";
//$result = mysql_query($sql);

//while($row = mysql_fetch_array($result))
//{
//    echo $row['name'].'<br/>';
//    var_dump($row);
//    echo "<br />";
//}


//mysql_close($con);


include 'DBPDO.php';


$pdo = new DBPDO();
$pdo -> insert("insert into t_user(name) values('wangliu')");




//$pdo = new PDO('mysql:host=localhost;dbname=test','root','');
//
//$pdo->query("SET NAMES 'UTF8'");
//$pdo->query("SET TIME_ZONE = '+8:00'");
//
//$pdo->exec("");
//
//echo $pdo->lastInsertId();

//mysqli


//$result = $pdo->query('SELECT * FROM t_user');
//$users = $result->fetchAll();
//foreach ($users as $user){
//    echo $user['name'].','.$user['0'];
//}

