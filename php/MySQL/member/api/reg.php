<?php 

$account=$_POST['account'];
$password=$_POST['password'];
$mail=$_POST['mail'];
$name=$_POST['name'];
$address=$_POST['address'];
$mobile=$_POST['mobile'];
$birthday=$_POST['birthday'];

// echo $account;

$sql_account="insert into `account`(`account`,`password`,`mail`) values('$account','$password','$mail')";

$sql_members="insert into `members`(`name`,`address`,`mobile`,`birthday`) values('$name','$address','$mobile','$birthday')";

$dsn="mysql:host=localhost;charset=utf8;dbname=member";

$pdo=new PDO($dsn,'root','');

$pdo -> exec($sql_account);

$pdo -> exec($sql_members);

// echo $pdo -> exec($sql_account);
// echo $pdo -> exec($sql_members);

header("location:../index.php")
?>