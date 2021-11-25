<?php
$dsn="mysql:hostlocalhost;charset=utf8;dbname=member";
$pdo=new PDO($dsn,'root','');
$user_id=$pdo->query
// $sql_account="DELETE FROM `account` where `account` = ";