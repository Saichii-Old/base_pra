<?php

$account=$_POST['account'];
$password=$_POST['password'];

$sql="SELECT * FROM `account` WHERE `account`='{$_POST['account']}' && `password` = '{$_POST['password']'";

    echo $sql;

    $dsn= "mysql:host=localhost;charset=utf8;dbname=member";
    $pdo=new PDO($dsn,'root', '');

    $result=$pdo->query($sql);
    var_dump()



?>