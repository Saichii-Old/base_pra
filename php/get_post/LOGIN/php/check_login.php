<?php

$account='saichi';
$password='1234';

if($account==$_POST['account'] && $password==$_POST['password']){
    setcookie('user',$_POST['account'],time()+3600);
    header("location:mem_center.php");
    // $_SESSION['user']=$_POST['account'];
}else{
    header("location:login1.php?status=err");

}


?>