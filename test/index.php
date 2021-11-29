<?php

$dsn="mysql:host=localhost;charset=utf8;dbname=s1100401"; //資料庫位置
$pdo=new PDO ($dsn,'s1100401','s1100401'); //帳號密碼

$sql="SELECT * FROM `test` where `id` = '1'"; //提取資料表資料
$test=$pdo->query($sql)->fetch(); //抓資料

echo "<pre>";
print_r($test);
echo "</pre>";

?>